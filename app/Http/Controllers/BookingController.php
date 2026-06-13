<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookingController extends Controller
{
    public function book(Request $request, int $eventId): JsonResponse
    {
        $event = Event::find($eventId);

        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Event not found',
            ], 404);
        }

        if ($event->available_seats <= 0) {
            return response()->json([
                'success' => false,
                'message' => 'No seats available',
            ], 400);
        }

        $alreadyBooked = Booking::where('user_id', $request->user()->id)
            ->where('event_id', $event->id)
            ->exists();

        if ($alreadyBooked) {
            return response()->json([
                'success' => false,
                'message' => 'You have already booked this event',
            ], 400);
        }

        $booking = Booking::create([
            'user_id' => $request->user()->id,
            'event_id' => $event->id,
            'status' => 'confirmed',
        ]);

        $event->decrement('available_seats');

        return response()->json([
            'success' => true,
            'message' => 'Event booked successfully',
            'booking' => $booking,
        ], 201);
    }

    public function myBookings(Request $request): JsonResponse
    {
        $bookings = Booking::with('event')
            ->where('user_id', $request->user()->id)
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'bookings' => $bookings,
        ]);
    }

    public function cancelBooking(Request $request, int $bookingId): JsonResponse
    {
        $booking = Booking::where('id', $bookingId)
            ->where('user_id', $request->user()->id)
            ->first();

        if (!$booking) {
            return response()->json([
                'success' => false,
                'message' => 'Booking not found',
            ], 404);
        }

        $event = Event::find($booking->event_id);

        if ($event) {
            $event->increment('available_seats');
        }

        $booking->delete();

        return response()->json([
            'success' => true,
            'message' => 'Booking cancelled successfully',
        ]);
    }
}