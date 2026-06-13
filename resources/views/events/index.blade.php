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
                    8 Events Available
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
            <div class="lg:col-span-5 relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text" placeholder="Search by event title, host, or keyword..." class="w-full pl-11 pr-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
            </div>

            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                    <select class="w-full bg-transparent border-0 text-slate-600 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                        <option value="">All Categories</option>
                        <option value="music">Music</option>
                        <option value="conference">Conference</option>
                        <option value="workshop">Workshop</option>
                        <option value="sports">Sports</option>
                    </select>
                </div>

                <div class="relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                    <select class="w-full bg-transparent border-0 text-slate-600 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                        <option value="">All Prices</option>
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select>
                </div>

                <div class="relative rounded-xl bg-slate-50 border border-slate-200 focus-within:border-[#4F46E5] focus-within:bg-white transition-all">
                    <select class="w-full bg-transparent border-0 text-slate-600 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                        <option value="">Any Date</option>
                        <option value="today">Today</option>
                        <option value="week">This Week</option>
                        <option value="month">This Month</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="events-grid">
            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=600&q=80" alt="Music Concert" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-[#4F46E5] bg-indigo-50 border border-indigo-100 px-2.5 py-1 rounded-lg">
                            Music
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Oct 14, 2026
                            </span>
                            <span class="text-emerald-600 font-semibold">18 Seats Left</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Global Rock Arena</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Experience the heavy synth-rock, live orchestral tracks, and stunning lights display.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$89.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=600&q=80" alt="Tech Conference" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100 px-2.5 py-1 rounded-lg">
                            Conference
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Nov 08, 2026
                            </span>
                            <span class="text-emerald-600 font-semibold">68 Seats Left</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Global AI Summit</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Learn about new LLMs, agentic systems, and cloud architectures from core product creators.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$299.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" alt="UX Workshop" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-lg">
                            Workshop
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Nov 20, 2026
                            </span>
                            <span class="text-rose-500 font-semibold">Only 3 Seats Left</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Interaction UX Hub</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Master dynamic component architectures, design tokens, and sleek transitions step by step.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$45.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=600&q=80" alt="Sports Match" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-blue-600 bg-blue-50 border border-blue-100 px-2.5 py-1 rounded-lg">
                            Sports
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Dec 02, 2026
                            </span>
                            <span class="text-[#4F46E5] font-semibold">Seats Available</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">National Golf Cup</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Witness the championship tournament live from the best seats, featuring prime players.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$150.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&fit=crop&w=600&q=80" alt="Concert Live" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-[#4F46E5] bg-indigo-50 border border-indigo-100 px-2.5 py-1 rounded-lg">
                            Music
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Dec 12, 2026
                            </span>
                            <span class="text-rose-500 font-semibold">Sold Out</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Acoustic Night Live</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Unplugged raw sessions with acoustic sets, soft jazz, and ambient lounge settings.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$35.00</span>
                        </div>
                        <button disabled class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-slate-100 text-slate-400 cursor-not-allowed shadow-none">Sold Out</button>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1591115413009-00a9d525b418?auto=format&fit=crop&w=600&q=80" alt="Tech Pitch" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100 px-2.5 py-1 rounded-lg">
                            Conference
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Dec 15, 2026
                            </span>
                            <span class="text-emerald-600 font-semibold">12 Seats Left</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">SaaS Founders Demo</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Pitching sessions, VC connections, and feedback boards hosted in New York City.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">Free</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=600&q=80" alt="Yoga Session" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-blue-600 bg-blue-50 border border-blue-100 px-2.5 py-1 rounded-lg">
                            Sports
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Dec 20, 2026
                            </span>
                            <span class="text-emerald-600 font-semibold">32 Seats Left</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Mindfulness Yoga Retreat</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Immersive group breathing exercises, stretching classes, and mental health workshops.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$25.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl overflow-hidden hover:border-indigo-500/20 hover:shadow-xl transition-all duration-300 flex flex-col group">
                <div class="h-44 bg-slate-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=600&q=80" alt="Tech Seminar" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100 px-2.5 py-1 rounded-lg">
                            Conference
                        </span>
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-rose-500 hover:bg-white transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-2">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Dec 28, 2026
                            </span>
                            <span class="text-emerald-600 font-semibold">14 Seats Left</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">DevOps Scaling Forum</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Learn about advanced Kubernetes clusters, multi-cloud setups, and deployment automation.</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$189.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden flex-col items-center justify-center py-20 text-center" id="empty-state">
            <div class="w-16 h-16 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900">No Events Found</h3>
            <p class="text-sm text-slate-500 mt-1 max-w-xs leading-relaxed">We couldn't find any events matching your search criteria. Try adjusting your category or date filters.</p>
            <button type="button" class="mt-6 px-4 py-2 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition">
                Reset Filters
            </button>
        </div>

        <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
            <div class="text-xs text-slate-500 font-medium">
                Showing <span class="font-semibold text-slate-800">1</span> to <span class="font-semibold text-slate-800">8</span> of <span class="font-semibold text-slate-800">8</span> events
            </div>
            
            <nav class="flex space-x-1" aria-label="Pagination">
                <button disabled class="px-3.5 py-2 rounded-xl border border-slate-200 bg-white text-slate-400 text-xs font-semibold cursor-not-allowed">
                    Previous
                </button>
                <button class="px-3.5 py-2 rounded-xl bg-[#4F46E5] text-white text-xs font-bold shadow-sm">
                    1
                </button>
                <button class="px-3.5 py-2 rounded-xl border border-slate-200 bg-white text-slate-600 text-xs font-semibold hover:bg-slate-50 transition">
                    2
                </button>
                <button class="px-3.5 py-2 rounded-xl border border-slate-200 bg-white text-slate-600 text-xs font-semibold hover:bg-slate-50 transition">
                    Next
                </button>
            </nav>
        </div>
    </div>
@endsection
