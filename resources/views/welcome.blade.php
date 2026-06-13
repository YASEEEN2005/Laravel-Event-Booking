@extends('layouts.app')

@section('title', 'EventHub - Discover Premium Events')

@section('content')
    <!-- Hero Showcase Block -->
    <section class="relative py-12 md:py-24 overflow-hidden rounded-3xl glass-card border border-white/5 px-6 sm:px-12 lg:px-16 flex flex-col items-center text-center">
        <!-- Interactive background glow elements -->
        <div class="absolute -top-48 -left-48 w-[500px] h-[500px] bg-violet-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-48 -right-48 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        
        <!-- Radiant badge header -->
        <span class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-300 border border-indigo-500/20 mb-8 tracking-wide uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-indigo-400 animate-pulse"></span>
            <span>Discover & Book Premium Experiences</span>
        </span>
        
        <!-- Dynamic header text -->
        <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight max-w-4xl leading-[1.15] bg-clip-text text-transparent bg-gradient-to-b from-white via-slate-100 to-slate-400">
            Connecting You to <span class="bg-clip-text text-transparent bg-gradient-to-r from-violet-400 via-indigo-400 to-cyan-400 font-black">Unforgettable</span> Moments
        </h1>
        
        <!-- Subheading text -->
        <p class="mt-6 text-base sm:text-lg lg:text-xl text-slate-400 max-w-2xl leading-relaxed">
            Reserve your seats at high-end tech conferences, immersive art showcases, live classical concerts, and hands-on business workshops.
        </p>

        <!-- Premium Integrated Search Bar -->
        <div class="mt-10 w-full max-w-3xl p-2.5 rounded-2xl bg-slate-950/80 border border-white/10 backdrop-blur-xl flex flex-col md:flex-row gap-2 shadow-2xl">
            <div class="flex-1 flex items-center px-3 gap-2">
                <svg class="w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" placeholder="Search events, cities, artists..." class="w-full bg-transparent border-0 text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-0 py-2">
            </div>
            
            <div class="h-px md:h-8 w-full md:w-px bg-white/10 self-center"></div>
            
            <div class="flex-shrink-0 flex items-center px-3 gap-2">
                <svg class="w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <select class="bg-transparent border-0 text-slate-300 text-sm focus:outline-none focus:ring-0 py-2 cursor-pointer pr-8">
                    <option value="" class="bg-slate-950">Any Location</option>
                    <option value="ny" class="bg-slate-950">New York, NY</option>
                    <option value="sf" class="bg-slate-950">San Francisco, CA</option>
                    <option value="lon" class="bg-slate-950">London, UK</option>
                    <option value="virt" class="bg-slate-950">Virtual / Online</option>
                </select>
            </div>
            
            <button type="button" class="w-full md:w-auto px-8 py-3 rounded-xl text-sm font-bold bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 active:translate-y-0 transition-all">
                Search
            </button>
        </div>

        <!-- Social Proof Metrics -->
        <div class="mt-12 flex flex-wrap justify-center gap-8 text-slate-500 border-t border-white/5 pt-8 w-full">
            <div class="flex items-center space-x-2">
                <span class="text-white font-bold text-lg">50k+</span>
                <span class="text-sm">Attendees</span>
            </div>
            <div class="h-4 w-px bg-white/10 self-center hidden sm:block"></div>
            <div class="flex items-center space-x-2">
                <span class="text-white font-bold text-lg">1.2k+</span>
                <span class="text-sm">Events Hosted</span>
            </div>
            <div class="h-4 w-px bg-white/10 self-center hidden sm:block"></div>
            <div class="flex items-center space-x-2">
                <span class="text-white font-bold text-lg">100%</span>
                <span class="text-sm">Secure Checkout</span>
            </div>
        </div>
    </section>

    <!-- Categories Grid -->
    <section class="mt-20">
        <div class="flex flex-col items-center text-center mb-10">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Browse by Category</h2>
            <p class="text-sm text-slate-400 mt-1">Explore curated experiences aligned with your passions.</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <!-- Technology -->
            <a href="/events?category=tech" class="group p-5 rounded-2xl glass-card hover:border-violet-500/30 hover:bg-violet-950/10 flex flex-col items-center text-center transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-violet-500/10 text-violet-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition">Technology</span>
            </a>
            
            <!-- Music -->
            <a href="/events?category=music" class="group p-5 rounded-2xl glass-card hover:border-cyan-500/30 hover:bg-cyan-950/10 flex flex-col items-center text-center transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition">Music & Concerts</span>
            </a>

            <!-- Design -->
            <a href="/events?category=design" class="group p-5 rounded-2xl glass-card hover:border-pink-500/30 hover:bg-pink-950/10 flex flex-col items-center text-center transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-pink-500/10 text-pink-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition">Art & Design</span>
            </a>

            <!-- Business -->
            <a href="/events?category=business" class="group p-5 rounded-2xl glass-card hover:border-emerald-500/30 hover:bg-emerald-950/10 flex flex-col items-center text-center transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition">Business & SaaS</span>
            </a>

            <!-- Sports -->
            <a href="/events?category=sports" class="group col-span-2 md:col-span-1 p-5 rounded-2xl glass-card hover:border-amber-500/30 hover:bg-amber-950/10 flex flex-col items-center text-center transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2m.945-2.065V9a2 2 0 00-2-2h-.5A1.5 1.5 0 0115 5.5V5a2 2 0 012-2h.5M6.3 18.7a8 8 0 0010.7-12.7M12 21a9 9 0 110-18 9 9 0 010 18z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-slate-200 group-hover:text-white transition">Sports & Wellness</span>
            </a>
        </div>
    </section>

    <!-- Featured Events Grid -->
    <section class="mt-24">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Featured Events</h2>
                <p class="text-sm text-slate-400 mt-1">Immersive and carefully selected event entries.</p>
            </div>
            <a href="/events" class="inline-flex items-center text-sm font-semibold text-indigo-400 hover:text-indigo-300 mt-3 sm:mt-0 transition group">
                <span>See all events</span>
                <svg class="w-4 h-4 ml-1.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Entry 1 -->
            <div class="group rounded-2xl glass-card overflow-hidden hover:border-indigo-500/20 hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.2)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
                <div class="h-52 bg-slate-900 relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-tr from-slate-950 via-indigo-950/40 to-transparent"></div>
                    <div class="absolute inset-0 bg-radial-gradient from-violet-500/10 to-transparent opacity-60"></div>
                    
                    <!-- Tech logo overlay inside banner mock -->
                    <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl flex items-center justify-center text-violet-400 shadow-xl group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2-1v-2.5M6 18l-2-1m2 1l2-1m-2-1v-2.5m12 2.5l2-1m-2 1l-2-1m2-1v-2.5"></path>
                        </svg>
                    </div>
                    
                    <!-- Tag overlay -->
                    <div class="absolute top-4 left-4">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-violet-300 border border-violet-500/30 px-3 py-1 rounded-full bg-violet-950/80 backdrop-blur-md">
                            Technology
                        </span>
                    </div>
                </div>
                
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                        <span class="flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Oct 14, 2026
                        </span>
                        <span class="px-2 py-0.5 rounded text-[11px] bg-emerald-500/10 text-emerald-400 font-semibold border border-emerald-500/20">Available</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-white group-hover:text-violet-400 transition-colors duration-200 truncate">NextGen AI & Agent Summit</h3>
                    <p class="text-sm text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                        Gather with leaders, core developers, and researchers to discuss AI agents, pipeline integration, and neural architectures.
                    </p>

                    <!-- Seating progress indicator -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between text-xs mb-1.5">
                            <span class="text-slate-400 font-medium">Seating Capacity</span>
                            <span class="text-slate-300 font-semibold">132 / 150 Seats Filled</span>
                        </div>
                        <div class="w-full h-2 bg-slate-950 rounded-full overflow-hidden p-0.5 border border-white/5">
                            <div class="h-full bg-gradient-to-r from-violet-600 to-indigo-500 rounded-full" style="width: 88%"></div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-5 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-slate-500 block uppercase tracking-wider font-semibold">Ticket Price</span>
                            <span class="text-lg font-extrabold text-white">$299.00</span>
                        </div>
                        <a href="#" class="px-5 py-2 rounded-xl text-xs font-bold bg-white/5 hover:bg-violet-600 hover:text-white border border-white/5 hover:border-violet-500 shadow-md transition-all duration-200">
                            Book Seat
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event Entry 2 -->
            <div class="group rounded-2xl glass-card overflow-hidden hover:border-indigo-500/20 hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.2)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
                <div class="h-52 bg-slate-900 relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-tr from-slate-950 via-cyan-950/40 to-transparent"></div>
                    <div class="absolute inset-0 bg-radial-gradient from-cyan-500/10 to-transparent opacity-60"></div>
                    
                    <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl flex items-center justify-center text-cyan-400 shadow-xl group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-cyan-300 border border-cyan-500/30 px-3 py-1 rounded-full bg-cyan-950/80 backdrop-blur-md">
                            Music
                        </span>
                    </div>
                </div>
                
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                        <span class="flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Nov 08, 2026
                        </span>
                        <span class="px-2 py-0.5 rounded text-[11px] bg-rose-500/10 text-rose-400 font-semibold border border-rose-500/20">Only 8 Seats Left</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors duration-200 truncate">Neo-Classical Symphony Live</h3>
                    <p class="text-sm text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                        Experience classic compositions redefined under modern acoustics and visual projectors, hosted at the Royal Albert.
                    </p>

                    <!-- Seating progress indicator -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between text-xs mb-1.5">
                            <span class="text-slate-400 font-medium">Seating Capacity</span>
                            <span class="text-rose-400 font-semibold">192 / 200 Seats Filled</span>
                        </div>
                        <div class="w-full h-2 bg-slate-950 rounded-full overflow-hidden p-0.5 border border-white/5">
                            <div class="h-full bg-gradient-to-r from-rose-600 to-amber-500 rounded-full" style="width: 96%"></div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-5 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-slate-500 block uppercase tracking-wider font-semibold">Ticket Price</span>
                            <span class="text-lg font-extrabold text-white">$75.00</span>
                        </div>
                        <a href="#" class="px-5 py-2 rounded-xl text-xs font-bold bg-white/5 hover:bg-cyan-600 hover:text-white border border-white/5 hover:border-cyan-500 shadow-md transition-all duration-200">
                            Book Seat
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event Entry 3 -->
            <div class="group rounded-2xl glass-card overflow-hidden hover:border-indigo-500/20 hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.2)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
                <div class="h-52 bg-slate-900 relative overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-gradient-to-tr from-slate-950 via-emerald-950/40 to-transparent"></div>
                    <div class="absolute inset-0 bg-radial-gradient from-emerald-500/10 to-transparent opacity-60"></div>
                    
                    <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl flex items-center justify-center text-emerald-400 shadow-xl group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-300 border border-emerald-500/30 px-3 py-1 rounded-full bg-emerald-950/80 backdrop-blur-md">
                            Business
                        </span>
                    </div>
                </div>
                
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                        <span class="flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Dec 19, 2026
                        </span>
                        <span class="px-2 py-0.5 rounded text-[11px] bg-emerald-500/10 text-emerald-400 font-semibold border border-emerald-500/20">Available</span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-white group-hover:text-emerald-400 transition-colors duration-200 truncate">SaaS Growth Hacks Bootcamp</h3>
                    <p class="text-sm text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                        An interactive virtual workshop demonstrating scaling channels, self-serve funnels, and retention models.
                    </p>

                    <!-- Seating progress indicator -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between text-xs mb-1.5">
                            <span class="text-slate-400 font-medium">Seating Capacity</span>
                            <span class="text-slate-300 font-semibold">450 / 1000 Seats Filled</span>
                        </div>
                        <div class="w-full h-2 bg-slate-950 rounded-full overflow-hidden p-0.5 border border-white/5">
                            <div class="h-full bg-gradient-to-r from-emerald-600 to-cyan-500 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-5 border-t border-white/5 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-slate-500 block uppercase tracking-wider font-semibold">Ticket Price</span>
                            <span class="text-lg font-extrabold text-white">Free</span>
                        </div>
                        <a href="#" class="px-5 py-2 rounded-xl text-xs font-bold bg-white/5 hover:bg-emerald-600 hover:text-white border border-white/5 hover:border-emerald-500 shadow-md transition-all duration-200">
                            Book Seat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotion banner / Host an Event Block -->
    <section class="mt-28 relative rounded-3xl overflow-hidden glass-card border border-white/5 p-8 sm:p-12 lg:p-16">
        <!-- Accent circles -->
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-violet-600/10 rounded-full blur-[80px] pointer-events-none"></div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative">
            <div>
                <span class="text-xs font-bold text-violet-400 uppercase tracking-widest block mb-3">Organizers & Brands</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
                    Host Your Event with <span class="bg-clip-text text-transparent bg-gradient-to-r from-violet-400 to-indigo-400">EventHub</span>
                </h2>
                <p class="mt-4 text-slate-400 text-sm sm:text-base leading-relaxed">
                    Set up ticket pricing, secure bookings, track capacity limits in real-time, and leverage our premium check-in dashboard. Build a page for your brand in minutes.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="/admin/events/new" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 active:translate-y-0 text-center transition-all">
                        Create Event Listing
                    </a>
                    <a href="#" class="px-6 py-3.5 rounded-xl text-sm font-semibold text-slate-300 border border-slate-800 hover:text-white hover:border-slate-600 hover:bg-white/5 text-center transition-all">
                        Learn More
                    </a>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Feature 1 -->
                <div class="p-5 rounded-2xl bg-slate-950/40 border border-white/5 backdrop-blur-sm">
                    <div class="w-8 h-8 rounded-lg bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-white">Instant Setups</h4>
                    <p class="text-xs text-slate-400 mt-1 leading-relaxed">Launch your event details and configure seating counts instantly.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-5 rounded-2xl bg-slate-950/40 border border-white/5 backdrop-blur-sm">
                    <div class="w-8 h-8 rounded-lg bg-violet-500/10 text-violet-400 flex items-center justify-center mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-white">Seating Audits</h4>
                    <p class="text-xs text-slate-400 mt-1 leading-relaxed">Prevent overbookings automatically when capacity bounds are met.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-5 rounded-2xl bg-slate-950/40 border border-white/5 backdrop-blur-sm">
                    <div class="w-8 h-8 rounded-lg bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-white">Metrics Tracking</h4>
                    <p class="text-xs text-slate-400 mt-1 leading-relaxed">Gain precise insights on ticket bookings and total capacity statistics.</p>
                </div>

                <!-- Feature 4 -->
                <div class="p-5 rounded-2xl bg-slate-950/40 border border-white/5 backdrop-blur-sm">
                    <div class="w-8 h-8 rounded-lg bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-white">Safe Collections</h4>
                    <p class="text-xs text-slate-400 mt-1 leading-relaxed">Direct payouts processing with integrated validation controls.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter subscription section -->
    <section class="mt-28 mb-12 relative rounded-3xl overflow-hidden bg-gradient-to-tr from-slate-950 via-slate-900 to-indigo-950/60 border border-white/5 p-8 sm:p-12 text-center">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-80 h-80 bg-indigo-500/10 rounded-full blur-[80px] pointer-events-none"></div>
        
        <div class="relative max-w-xl mx-auto">
            <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Stay in the Loop</h3>
            <p class="text-sm text-slate-400 mt-2 leading-relaxed">
                Join our premium newsletter list to receive early access warnings on new events, secret discount codes, and community meetups.
            </p>
            
            <form class="mt-8 flex flex-col sm:flex-row gap-3 w-full" onsubmit="event.preventDefault();">
                <input type="email" placeholder="Enter your business email" required class="flex-grow px-5 py-3.5 rounded-xl bg-slate-950 border border-white/10 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 transition duration-200">
                <button type="submit" class="px-6 py-3.5 rounded-xl text-sm font-bold bg-white text-slate-950 hover:bg-slate-200 transition duration-200">
                    Subscribe
                </button>
            </form>
            <p class="text-[11px] text-slate-500 mt-3">We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </section>
@endsection
