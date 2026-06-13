@extends('layouts.app')

@section('title', 'Welcome to EventHub')

@section('content')
    <!-- Hero showcase -->
    <div class="relative py-20 lg:py-28 overflow-hidden rounded-3xl glass-card border border-white/5 px-6 sm:px-12 flex flex-col items-center text-center">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-violet-600/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-indigo-600/10 rounded-full blur-[100px] pointer-events-none"></div>

        <span class="px-4 py-1.5 rounded-full text-xs font-semibold bg-violet-500/10 text-violet-400 border border-violet-500/20 mb-6 tracking-wide uppercase">
            Introducing EventHub
        </span>
        
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight max-w-3xl leading-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-slate-100 to-indigo-200">
            Unleash Unforgettable <span class="bg-clip-text text-transparent bg-gradient-to-r from-violet-400 to-indigo-400">Experiences</span>
        </h1>
        
        <p class="mt-6 text-base sm:text-lg text-slate-400 max-w-xl leading-relaxed">
            Discover and reserve seats for local, national, and virtual tech conferences, live workshops, and music festivals. 
        </p>

        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <a href="/events" class="w-full sm:w-auto px-8 py-3.5 rounded-xl text-sm font-bold bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 transition-all">
                Explore All Events
            </a>
            <a href="/register" class="w-full sm:w-auto px-8 py-3.5 rounded-xl text-sm font-semibold text-slate-300 border border-slate-800 hover:text-white hover:border-slate-600 hover:bg-white/5 transition-all">
                Create Account
            </a>
        </div>
    </div>

    <!-- Quick statistics -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-16">
        <div class="p-6 rounded-2xl glass-card border border-white/5 flex flex-col items-center text-center">
            <span class="text-3xl font-extrabold text-white">500+</span>
            <span class="text-xs text-slate-400 mt-2 font-medium tracking-wide uppercase">Events Hosted</span>
        </div>
        <div class="p-6 rounded-2xl glass-card border border-white/5 flex flex-col items-center text-center">
            <span class="text-3xl font-extrabold text-white">100k+</span>
            <span class="text-xs text-slate-400 mt-2 font-medium tracking-wide uppercase">Seats Booked</span>
        </div>
        <div class="p-6 rounded-2xl glass-card border border-white/5 flex flex-col items-center text-center">
            <span class="text-3xl font-extrabold text-white">99.9%</span>
            <span class="text-xs text-slate-400 mt-2 font-medium tracking-wide uppercase">Satisfaction</span>
        </div>
    </div>

    <!-- Featured Events teasers -->
    <div class="mt-24">
        <div class="flex items-end justify-between mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">Featured Events</h2>
                <p class="text-sm text-slate-400 mt-1">Hand-picked premium experiences for you.</p>
            </div>
            <a href="/events" class="hidden sm:inline-flex items-center text-sm font-semibold text-indigo-400 hover:text-indigo-300 transition">
                See all events
                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="group rounded-2xl glass-card border border-white/5 overflow-hidden hover:border-indigo-500/20 hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.15)] hover:-translate-y-1 transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-slate-900 to-indigo-950/60 relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-400/90 border border-indigo-500/20 px-3 py-1 rounded-full bg-indigo-500/5">Technology</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                        <span class="flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Oct 14, 2026
                        </span>
                        <span class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 font-medium">Available</span>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-indigo-300 transition-colors duration-200 truncate">Global Developers Summit</h3>
                    <p class="text-sm text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                        Join developers from all around the world to discuss the future of decentralized computing and AI agents.
                    </p>
                    <div class="mt-6 pt-5 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-500 block">Ticket Price</span>
                            <span class="text-lg font-bold text-white">$249.00</span>
                        </div>
                        <span class="px-4 py-2 rounded-lg text-xs font-bold bg-white/5 hover:bg-indigo-600 hover:text-white border border-white/5 hover:border-indigo-500 cursor-pointer transition-all duration-200">
                            Book Seat
                        </span>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="group rounded-2xl glass-card border border-white/5 overflow-hidden hover:border-indigo-500/20 hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.15)] hover:-translate-y-1 transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-slate-900 to-violet-950/60 relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                    <span class="text-xs font-bold uppercase tracking-wider text-violet-400/90 border border-violet-500/20 px-3 py-1 rounded-full bg-violet-500/5">Design</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                        <span class="flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Nov 08, 2026
                        </span>
                        <span class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 font-medium">Available</span>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-violet-300 transition-colors duration-200 truncate">Interaction Design Hub</h3>
                    <p class="text-sm text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                        A masterclass in responsive architecture, modern layout paradigms, and premium UX principles.
                    </p>
                    <div class="mt-6 pt-5 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-500 block">Ticket Price</span>
                            <span class="text-lg font-bold text-white">$120.00</span>
                        </div>
                        <span class="px-4 py-2 rounded-lg text-xs font-bold bg-white/5 hover:bg-violet-600 hover:text-white border border-white/5 hover:border-violet-500 cursor-pointer transition-all duration-200">
                            Book Seat
                        </span>
                    </div>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="group rounded-2xl glass-card border border-white/5 overflow-hidden hover:border-indigo-500/20 hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.15)] hover:-translate-y-1 transition-all duration-300">
                <div class="h-48 bg-gradient-to-tr from-slate-900 to-cyan-950/60 relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan-400/90 border border-cyan-500/20 px-3 py-1 rounded-full bg-cyan-500/5">Business</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                        <span class="flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Dec 19, 2026
                        </span>
                        <span class="px-2 py-0.5 rounded bg-rose-500/10 text-rose-400 font-medium">Sold Out</span>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-cyan-300 transition-colors duration-200 truncate">SaaS Founders Retreat</h3>
                    <p class="text-sm text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                        An intimate gathering of founders to brainstorm scaling strategies, funding structures, and exit strategies.
                    </p>
                    <div class="mt-6 pt-5 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-500 block">Ticket Price</span>
                            <span class="text-lg font-bold text-white">$499.00</span>
                        </div>
                        <button disabled class="px-4 py-2 rounded-lg text-xs font-bold bg-white/5 text-slate-600 border border-white/5 cursor-not-allowed">
                            Sold Out
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center sm:hidden">
            <a href="/events" class="inline-flex items-center text-sm font-semibold text-indigo-400 hover:text-indigo-300 transition">
                See all events
                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
