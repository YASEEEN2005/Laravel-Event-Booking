@extends('layouts.app')

@section('title', 'Create Event - EventBook')

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

                <a href="/admin/bookings" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                    </svg>
                    <span>Manage Bookings</span>
                </a>

                <a href="/admin/users" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Users List</span>
                </a>

                <a href="/admin/settings" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>System Settings</span>
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
                    <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Create Event</h2>
                    <p class="text-xs text-slate-400">Add a new verified listing to the events directory.</p>
                </div>
            </div>

            <div class="premium-card rounded-2xl p-6 sm:p-8">
                <form method="POST" action="/admin/events" class="space-y-6" onsubmit="event.preventDefault();">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="title" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Title</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="title" type="text" name="title" required placeholder="e.g. Acoustic Sessions Live 2026"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div>
                            <label for="category" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Category</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200">
                                <select id="category" name="category" required
                                    class="w-full bg-transparent border-0 text-slate-700 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                                    <option value="music">Music</option>
                                    <option value="conference">Conference</option>
                                    <option value="workshop">Workshop</option>
                                    <option value="sports">Sports</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="venue" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Location / Venue</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="venue" type="text" name="venue" required placeholder="e.g. San Francisco, CA"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div>
                            <label for="date" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Date & Time</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="date" type="datetime-local" name="date" required
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-700 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="capacity" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Capacity</label>
                                <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                    <input id="capacity" type="number" name="capacity" required placeholder="150" min="1"
                                        class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                                </div>
                            </div>
                            <div>
                                <label for="price" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Price ($)</label>
                                <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                    <input id="price" type="number" name="price" required placeholder="89.00" min="0" step="0.01"
                                        class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <label for="description" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Description</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <textarea id="description" name="description" rows="4" required placeholder="Describe what attendees should expect..."
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0 resize-none"></textarea>
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <label for="image" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Event Banner Image URL</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="image" type="url" name="image" placeholder="https://images.unsplash.com/..."
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-end space-x-3">
                        <a href="/admin/events" class="px-5 py-3 rounded-xl text-sm font-semibold text-slate-600 border border-slate-200 hover:bg-slate-50 transition">Cancel</a>
                        <button type="submit" class="px-6 py-3 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-md transition">Create Event</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
