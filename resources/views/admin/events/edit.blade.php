@extends('layouts.app')

@section('title', 'Edit Event - EventBook')

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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                
                <a href="/admin/events" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-bold bg-[#4F46E5] text-white shadow-sm transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Manage Events</span>
                </a>

                <a href="/admin/users" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Users List</span>
                </a>
            </nav>
        </aside>

        <main class="lg:col-span-9 space-y-6">
            <div class="flex items-center space-x-3">
                <a href="/admin/events" class="p-2 rounded-xl bg-slate-50 border border-slate-200 text-slate-400 hover:text-slate-600 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </a>
                <div>
                    <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Edit Event</h2>
                    <p class="text-xs text-slate-400">Modify properties of the selected events directory listing.</p>
                </div>
            </div>

            @if ($errors->any())
                <div class="p-4 rounded-2xl bg-rose-50 border border-rose-100 text-rose-600 text-xs shadow-xs">
                    <ul class="list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="premium-card rounded-2xl p-6 sm:p-8">
                <form method="POST" action="/admin/events/{{ $event->id }}" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="title" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Title</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="title" type="text" name="title" required value="{{ old('title', $event->title) }}" placeholder="e.g. Acoustic Sessions Live 2026"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div>
                            <label for="location" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Location / Venue</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="location" type="text" name="location" required value="{{ old('location', $event->location) }}" placeholder="e.g. San Francisco, CA"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div>
                            <label for="event_date" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Date & Time</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="event_date" type="datetime-local" name="event_date" required value="{{ old('event_date', \Carbon\Carbon::parse($event->event_date)->format('Y-m-d\TH:i')) }}"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-700 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 md:col-span-2">
                            <div>
                                <label for="available_seats" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Capacity / Seats</label>
                                <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                    <input id="available_seats" type="number" name="available_seats" required value="{{ old('available_seats', $event->available_seats) }}" placeholder="150" min="1"
                                        class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                                </div>
                            </div>
                            <div>
                                <label for="price" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Price ($)</label>
                                <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                    <input id="price" type="number" name="price" required value="{{ old('price', $event->price) }}" placeholder="89.00" min="0" step="0.01"
                                        class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <label for="description" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Description</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <textarea id="description" name="description" rows="4" required placeholder="Describe what attendees should expect..."
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0 resize-none">{{ old('description', $event->description) }}</textarea>
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <label for="image" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Banner Image URL</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="image" type="url" name="image" value="{{ old('image', $event->image) }}" placeholder="https://images.unsplash.com/..."
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-end space-x-3">
                        <a href="/admin/events" class="px-5 py-3 rounded-xl text-sm font-semibold text-slate-600 border border-slate-200 hover:bg-slate-50 transition">Cancel</a>
                        <button type="submit" class="px-6 py-3 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-md transition">Save Changes</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
