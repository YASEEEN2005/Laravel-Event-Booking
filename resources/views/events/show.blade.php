@extends('layouts.app')

@section('title', $event->title . ' - EventBook')

@section('content')
    <div class="space-y-8">
        @if($errors->any())
            <div class="p-4 rounded-2xl bg-rose-50 border border-rose-100 text-rose-600 text-sm font-semibold shadow-xs">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="relative w-full h-[320px] sm:h-[400px] rounded-[32px] overflow-hidden shadow-lg border border-slate-100">
            <img src="{{ $event->image ?: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80' }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/20 to-transparent"></div>
            
            <div class="absolute bottom-6 left-6 right-6 sm:bottom-8 sm:left-8 sm:right-8 text-white flex flex-col justify-end">
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
                <div class="flex items-center space-x-2">
                    @if($color === 'pink')
                        <span class="text-[10px] font-bold text-white bg-pink-600/90 backdrop-blur-sm px-3 py-1 rounded-full uppercase tracking-wider">
                            {{ $cat }}
                        </span>
                    @elseif($color === 'emerald')
                        <span class="text-[10px] font-bold text-white bg-emerald-600/90 backdrop-blur-sm px-3 py-1 rounded-full uppercase tracking-wider">
                            {{ $cat }}
                        </span>
                    @elseif($color === 'blue')
                        <span class="text-[10px] font-bold text-white bg-blue-600/90 backdrop-blur-sm px-3 py-1 rounded-full uppercase tracking-wider">
                            {{ $cat }}
                        </span>
                    @else
                        <span class="text-[10px] font-bold text-white bg-[#4F46E5]/90 backdrop-blur-sm px-3 py-1 rounded-full uppercase tracking-wider">
                            {{ $cat }}
                        </span>
                    @endif
                </div>
                <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight mt-3 leading-tight max-w-3xl">
                    {{ $event->title }}
                </h1>
                <div class="flex flex-wrap gap-4 sm:gap-6 mt-4 text-xs sm:text-sm text-slate-200">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>{{ \Carbon\Carbon::parse($event->event_date)->format('h:i A') }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>{{ $event->location }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-8 space-y-8">
                <div class="premium-card rounded-2xl p-6 sm:p-8 space-y-6">
                    <div>
                        <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">About This Event</h2>
                        <p class="text-sm text-slate-500 mt-4 leading-relaxed">
                            {{ $event->description }}
                        </p>
                    </div>

                    <div>
                        <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">Schedule Timeline</h2>
                        <div class="mt-6 space-y-6">
                            <div class="relative pl-6 border-l-2 border-indigo-100">
                                <div class="absolute -left-[7px] top-1.5 w-3 h-3 rounded-full bg-[#4F46E5]"></div>
                                <span class="text-xs font-bold text-[#4F46E5] block">Session 1</span>
                                <h4 class="text-sm font-bold text-slate-800 mt-0.5">Registration & Welcome</h4>
                                <p class="text-xs text-slate-400 mt-1">Check-in at the reception desk and receive event documentation.</p>
                            </div>
                            <div class="relative pl-6 border-l-2 border-indigo-100">
                                <div class="absolute -left-[7px] top-1.5 w-3 h-3 rounded-full bg-[#4F46E5]"></div>
                                <span class="text-xs font-bold text-[#4F46E5] block">Session 2</span>
                                <h4 class="text-sm font-bold text-slate-800 mt-0.5">Keynote Presentation</h4>
                                <p class="text-xs text-slate-400 mt-1">Interactive presentations led by hosts and experts.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">Event Venue</h2>
                        <div class="mt-4 flex flex-col sm:flex-row gap-4 justify-between">
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">{{ $event->location }}</h4>
                            </div>
                            <a href="https://maps.google.com/?q={{ urlencode($event->location) }}" target="_blank" class="inline-flex items-center text-xs font-bold text-[#4F46E5] hover:text-[#4338CA] transition">
                                <span>Get Directions</span>
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-6">
                <div class="premium-card rounded-2xl p-6 space-y-6">
                    <div class="flex items-baseline justify-between">
                        <span class="text-xs text-slate-400 uppercase tracking-wide font-bold">Ticket Price</span>
                        <span class="text-2xl font-black text-[#4F46E5]">
                            {{ $event->price == 0 ? 'Free' : '$' . number_format($event->price, 2) }}
                        </span>
                    </div>

                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-400 font-medium">Availability</span>
                            @if($event->available_seats <= 0)
                                <span class="text-rose-500 font-bold">Sold Out</span>
                            @elseif($event->available_seats <= 10)
                                <span class="text-rose-500 font-bold">Only {{ $event->available_seats }} Seats Left!</span>
                            @else
                                <span class="text-emerald-600 font-bold">{{ $event->available_seats }} Seats Left</span>
                            @endif
                        </div>
                    </div>

                    @if($event->available_seats > 0)
                        <form method="POST" action="/events/{{ $event->id }}/book" class="space-y-4">
                            @csrf
                            <button type="submit" class="w-full py-3.5 px-4 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-lg shadow-indigo-500/10 hover:shadow-indigo-500/20 transform hover:-translate-y-0.5 transition-all text-center">
                                Book Seat
                            </button>
                        </form>
                    @else
                        <button disabled class="w-full py-3.5 px-4 rounded-xl text-sm font-bold bg-slate-100 text-slate-400 cursor-not-allowed text-center">
                            Sold Out
                        </button>
                    @endif

                    <div class="pt-4 border-t border-slate-100 flex flex-col space-y-2.5 text-xs text-slate-500">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            <span>Instant Ticket PDF Confirmation</span>
                        </div>
                    </div>
                </div>

                <div class="premium-card rounded-2xl p-6 space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wide">Event Organizer</h3>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#4F46E5] font-bold">
                            {{ strtoupper(substr($event->contact_email, 0, 2)) }}
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-800 truncate max-w-[160px]">{{ $event->contact_email }}</h4>
                            <p class="text-[10px] text-slate-400">Phone: {{ $event->contact_phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
