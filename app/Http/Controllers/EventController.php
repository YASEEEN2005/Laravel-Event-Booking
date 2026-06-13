<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    public function index(): JsonResponse
    {
        $events = Event::latest()->get();

        return response()->json([
            'success' => true,
            'events' => $events,
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Event not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'event' => $event,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'event_date' => ['required', 'date'],
            'location' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'available_seats' => ['required', 'integer', 'min:1'],
            'contact_email' => ['required', 'email'],
            'contact_phone' => ['required', 'string'],
            'image' => ['nullable', 'string'],
        ]);

        $event = Event::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Event created successfully',
            'event' => $event,
        ], 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Event not found',
            ], 404);
        }

        $validated = $request->validate([
            'title' => ['sometimes', 'string', 'max:255'],
            'description' => ['sometimes'],
            'event_date' => ['sometimes', 'date'],
            'location' => ['sometimes', 'string'],
            'price' => ['sometimes', 'numeric'],
            'available_seats' => ['sometimes', 'integer', 'min:1'],
            'contact_email' => ['sometimes', 'email'],
            'contact_phone' => ['sometimes', 'string'],
            'image' => ['nullable', 'string'],
        ]);

        $event->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Event updated successfully',
            'event' => $event,
        ]);
    }

    public function destroy(int $id): JsonResponse
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Event not found',
            ], 404);
        }

        $event->delete();

        return response()->json([
            'success' => true,
            'message' => 'Event deleted successfully',
        ]);
    }
}