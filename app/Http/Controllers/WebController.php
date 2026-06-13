<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    public function home()
    {
        $events = Event::latest()->take(4)->get();
        return view('welcome', compact('events'));
    }

    public function eventsIndex(Request $request)
    {
        $query = Event::query();

        if ($request->filled('q')) {
            $q = $request->input('q');
            $query->where(function ($subQuery) use ($q) {
                $subQuery->where('title', 'like', "%{$q}%")
                         ->orWhere('description', 'like', "%{$q}%");
            });
        }

        if ($request->filled('price')) {
            $price = $request->input('price');
            if ($price === 'free') {
                $query->where('price', 0);
            } elseif ($price === 'paid') {
                $query->where('price', '>', 0);
            }
        }

        if ($request->filled('date')) {
            $date = $request->input('date');
            if ($date === 'today') {
                $query->whereDate('event_date', today());
            } elseif ($date === 'week') {
                $query->whereBetween('event_date', [now()->startOfWeek(), now()->endOfWeek()]);
            } elseif ($date === 'month') {
                $query->whereMonth('event_date', now()->month)
                      ->whereYear('event_date', now()->year);
            }
        }

        $events = $query->latest()->get();
        return view('events.index', compact('events'));
    }

    public function eventShow($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function loginForm()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registerForm()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function myBookings()
    {
        $bookings = Booking::with('event')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();
        return view('bookings.index', compact('bookings'));
    }

    public function book(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['auth' => 'Please sign in to book event tickets.']);
        }

        $event = Event::findOrFail($id);

        if ($event->available_seats <= 0) {
            return back()->withErrors(['seats' => 'Sorry, this event has no available seats remaining.']);
        }

        $alreadyBooked = Booking::where('user_id', Auth::id())
            ->where('event_id', $event->id)
            ->where('status', 'confirmed')
            ->exists();

        if ($alreadyBooked) {
            return back()->withErrors(['booking' => 'You have already booked a ticket for this event.']);
        }

        Booking::create([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
            'status' => 'confirmed',
        ]);

        $event->decrement('available_seats');

        return redirect('/my-bookings')->with('success', 'Ticket booked successfully!');
    }

    public function cancelBooking($id)
    {
        $booking = Booking::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($booking->status === 'confirmed') {
            $booking->update(['status' => 'cancelled']);
            
            $event = Event::find($booking->event_id);
            if ($event) {
                $event->increment('available_seats');
            }
        }

        return redirect('/my-bookings')->with('success', 'Booking cancelled successfully.');
    }

    public function adminDashboard()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $total_revenue = Booking::where('status', 'confirmed')
            ->join('events', 'bookings.event_id', '=', 'events.id')
            ->sum('events.price');

        $active_bookings_count = Booking::where('status', 'confirmed')->count();
        $total_users = User::count();
        
        $recent_bookings = Booking::with(['user', 'event'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('total_revenue', 'active_bookings_count', 'total_users', 'recent_bookings'));
    }

    public function adminEvents()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }

    public function adminCreateEvent()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        return view('admin.events.create');
    }

    public function adminStoreEvent(Request $request)
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'event_date' => ['required', 'date'],
            'location' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'available_seats' => ['required', 'integer', 'min:1'],
            'image' => ['nullable', 'url'],
        ]);

        $validated['contact_email'] = Auth::user()->email;
        $validated['contact_phone'] = '+1 (555) 019-0000';

        Event::create($validated);

        return redirect('/admin/events')->with('success', 'Event created successfully.');
    }

    public function adminEditEvent($id)
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function adminUpdateEvent(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'event_date' => ['required', 'date'],
            'location' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'available_seats' => ['required', 'integer', 'min:1'],
            'image' => ['nullable', 'url'],
        ]);

        $event->update($validated);

        return redirect('/admin/events')->with('success', 'Event updated successfully.');
    }

    public function adminDeleteEvent($id)
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/admin/events')->with('success', 'Event deleted successfully.');
    }

    public function adminUsers()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        $users = User::latest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
