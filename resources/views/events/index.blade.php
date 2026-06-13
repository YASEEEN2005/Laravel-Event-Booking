@extends('layouts.app')

@section('title', 'Explore Events - EventBook')

@section('content')
    <div class="space-y-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-b border-slate-100 pb-8">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Explore Events</h1>
                <p class="text-sm text-slate-500 mt-1">Discover and reserve tickets for concerts, tech conferences, workshops, and wellness programs.</p>
            </div>
            <div class="flex-shrink-0">
                <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-semibold bg-indigo-50 text-[#4F46E5]">
                    {{ $events->count() }} {{ Str::plural('Event', $events->count()) }} Available
                </span>
            </div>
        </div>

        <form method="GET" action="/events" class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
            <div class="lg:col-span-6 relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Search by event title, location, or keyword..." class="w-full pl-11 pr-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
            </div>

            <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                    <select name="price" onchange="this.form.submit()" class="w-full bg-transparent border-0 text-slate-600 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                        <option value="">All Prices</option>
                        <option value="free" {{ request('price') === 'free' ? 'selected' : '' }}>Free</option>
                        <option value="paid" {{ request('price') === 'paid' ? 'selected' : '' }}>Paid</option>
                    </select>
                </div>

                <div class="relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                    <select name="date" onchange="this.form.submit()" class="w-full bg-transparent border-0 text-slate-600 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                        <option value="">Any Date</option>
                        <option value="today" {{ request('date') === 'today' ? 'selected' : '' }}>Today</option>
                        <option value="week" {{ request('date') === 'week' ? 'selected' : '' }}>This Week</option>
                        <option value="month" {{ request('date') === 'month' ? 'selected' : '' }}>This Month</option>
                    </select>
                </div>
            </div>
        </form>

        @if($events->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 text-center" id="empty-state">
                <div class="w-16 h-16 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900">No Events Found</h3>
                <p class="text-sm text-slate-500 mt-1 max-w-xs leading-relaxed">We couldn't find any events matching your search criteria. Try adjusting your category or date filters.</p>
                <a href="/events" class="mt-6 px-4 py-2 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition inline-block">
                    Reset Filters
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="events-grid">
                @foreach($events as $event)
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
                    @endphp
                    <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                        <div class="h-44 bg-slate-100 relative overflow-hidden">
                            <img src="{{ $event->image ?: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $event->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-3 left-3">
                                @if($color === 'pink')
                                    <span class="text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100 px-2.5 py-1 rounded-lg">
                                        {{ $cat }}
                                    </span>
                                @elseif($color === 'emerald')
                                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-lg">
                                        {{ $cat }}
                                    </span>
                                @elseif($color === 'blue')
                                    <span class="text-[10px] font-bold text-blue-600 bg-blue-50 border border-blue-100 px-2.5 py-1 rounded-lg">
                                        {{ $cat }}
                                    </span>
                                @else
                                    <span class="text-[10px] font-bold text-[#4F46E5] bg-indigo-50 border border-indigo-100 px-2.5 py-1 rounded-lg">
                                        {{ $cat }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="p-5 flex-grow flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}
                                    </span>
                                    @if($event->available_seats <= 0)
                                        <span class="text-rose-500 font-bold">Sold Out</span>
                                    @elseif($event->available_seats <= 10)
                                        <span class="text-rose-500 font-bold">Only {{ $event->available_seats }} Seats Left</span>
                                    @else
                                        <span class="text-emerald-600 font-semibold">{{ $event->available_seats }} Seats Left</span>
                                    @endif
                                </div>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">
                                    <a href="/events/{{ $event->id }}">{{ $event->title }}</a>
                                </h3>
                                <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">{{ $event->description }}</p>
                            </div>
                            <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                                    <span class="text-base font-extrabold text-[#4F46E5]">
                                        {{ $event->price == 0 ? 'Free' : '$' . number_format($event->price, 2) }}
                                    </span>
                                </div>
                                <a href="/events/{{ $event->id }}" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
