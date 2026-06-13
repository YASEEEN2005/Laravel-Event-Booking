@extends('layouts.app')

@section('title', 'Manage Events - EventBook')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <aside class="lg:col-span-3 premium-card rounded-2xl p-5 space-y-6">
            <div class="border-b border-slate-100 pb-4">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Control Panel</span>
                <span class="text-sm font-black text-slate-800 mt-1 block">EventBook Console</span>
            </div>
            
            <nav class="flex flex-col space-y-1">
                <a href="/admin" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                
                <a href="/admin/events" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-bold bg-[#4F46E5] text-white shadow-sm transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Manage Events</span>
                </a>
            </nav>
        </aside>

        <main class="lg:col-span-9 space-y-8">
            @if(session('success'))
                <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-600 text-sm font-semibold shadow-xs">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Events Management</h2>
                    <p class="text-sm text-slate-500 mt-1">Review, search, and manage verified events listings.</p>
                </div>
                <a href="/admin/events/create" class="inline-flex items-center space-x-2 px-4 py-2.5 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Create New Event</span>
                </a>
            </div>

            <div class="premium-card rounded-2xl p-6 space-y-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[10px] font-bold text-slate-400 uppercase border-b border-slate-100">
                                <th class="pb-3 pr-2">Event Title</th>
                                <th class="pb-3 pr-2">Category</th>
                                <th class="pb-3 pr-2">Date</th>
                                <th class="pb-3 pr-2">Bookings Rate</th>
                                <th class="pb-3 pr-2">Ticket Price</th>
                                <th class="pb-3 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-xs text-slate-600">
                            @forelse($events as $event)
                                @php
                                    $cat = 'Event';
                                    $color = 'indigo';
                                    $titleLower = strtolower($event->title);
                                    if (str_contains($titleLower, 'summit') || str_contains($titleLower, 'forum') || str_contains($titleLower, 'conference')) {
                                        $cat = 'Conference';
                                        $color = 'pink';
                                    } elseif (str_contains($titleLower, 'rock') || str_contains($titleLower, 'acoustic') || str_contains($titleLower, 'music') || str_contains($titleLower, 'night') || str_contains($titleLower, 'arena')) {
                                        $cat = 'Music';
                                        $color = 'indigo';
                                    } elseif (str_contains($titleLower, 'workshop') || str_contains($titleLower, 'hub') || str_contains($titleLower, 'design') || str_contains($titleLower, 'learn')) {
                                        $cat = 'Workshop';
                                        $color = 'emerald';
                                    } elseif (str_contains($titleLower, 'golf') || str_contains($titleLower, 'cup') || str_contains($titleLower, 'sports') || str_contains($titleLower, 'retreat') || str_contains($titleLower, 'yoga')) {
                                        $cat = 'Sports';
                                        $color = 'blue';
                                    }

                                    $booked = $event->bookings()->where('status', 'confirmed')->count();
                                    $totalSeats = $event->available_seats + $booked;
                                    $percentage = $totalSeats > 0 ? round(($booked / $totalSeats) * 100) : 0;
                                @endphp
                                <tr>
                                    <td class="py-3.5 pr-2">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-12 h-9 rounded bg-slate-100 overflow-hidden flex-shrink-0">
                                                <img src="{{ $event->image ?: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=150&q=80' }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                                            </div>
                                            <span class="font-bold text-slate-800 block truncate max-w-[240px]">{{ $event->title }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 pr-2">
                                        @if($color === 'pink')
                                            <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100">
                                                {{ $cat }}
                                            </span>
                                        @elseif($color === 'emerald')
                                            <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100">
                                                {{ $cat }}
                                            </span>
                                        @elseif($color === 'blue')
                                            <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-blue-600 bg-blue-50 border border-blue-100">
                                                {{ $cat }}
                                            </span>
                                        @else
                                            <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-[#4F46E5] bg-indigo-50 border border-indigo-100">
                                                {{ $cat }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3.5 pr-2">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</td>
                                    <td class="py-3.5 pr-2">
                                        <div class="w-24 space-y-1">
                                            <div class="flex items-center justify-between text-[10px]">
                                                <span class="font-semibold text-slate-700">{{ $booked }} / {{ $totalSeats }}</span>
                                            </div>
                                            <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-emerald-500 rounded-full" style="width: {{ $percentage }}%"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">
                                        {{ $event->price == 0 ? 'Free' : '$' . number_format($event->price, 2) }}
                                    </td>
                                    <td class="py-3.5 text-right space-x-1.5">
                                        <a href="/admin/events/{{ $event->id }}/edit" class="inline-flex items-center px-2.5 py-1 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 text-[10px] font-bold transition">Edit</a>
                                        
                                        <form method="POST" action="/admin/events/{{ $event->id }}" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 hover:bg-rose-100/50 text-rose-500 text-[10px] font-bold transition">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-6 text-center text-slate-400">No events listing in database.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="flex items-center justify-between border-t border-slate-100 pt-5">
                    <div class="text-[11px] text-slate-400 font-medium">Showing {{ $events->count() }} active events</div>
                </div>
            </div>
        </main>
    </div>
@endsection
