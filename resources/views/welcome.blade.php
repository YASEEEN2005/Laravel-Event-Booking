@extends('layouts.app')

@section('title', 'EventBook - Discover Amazing Events Near You')

@section('content')
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center py-6 md:py-12">
        <div class="lg:col-span-6 flex flex-col justify-center space-y-8">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.15]">
                Discover Amazing <br class="hidden sm:inline">Events <span class="text-[#4F46E5]">Near You</span>
            </h1>
            
            <p class="text-base sm:text-lg text-slate-500 max-w-xl leading-relaxed">
                Find and book tickets for the best events, concerts, conferences, workshops and more: all in one place.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="/events" class="inline-flex items-center space-x-2 px-6 py-3.5 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-lg shadow-indigo-500/10 hover:shadow-indigo-500/20 transform hover:-translate-y-0.5 transition-all">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Browse Events</span>
                </a>
                <a href="#how-it-works" class="inline-flex items-center space-x-2 px-6 py-3.5 rounded-xl text-sm font-bold bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 transition-all">
                    <svg class="w-4.5 h-4.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>How It Works</span>
                </a>
            </div>

            <div class="pt-8 border-t border-slate-100 grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-slate-800">Secure Booking</h4>
                        <p class="text-[11px] text-slate-400 mt-0.5">100% Safe & Secure</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-slate-800">Instant Confirmation</h4>
                        <p class="text-[11px] text-slate-400 mt-0.5">Get tickets instantly</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-slate-800">24/7 Support</h4>
                        <p class="text-[11px] text-slate-400 mt-0.5">We're here to help</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-6 relative flex justify-center">
            <div class="w-full max-w-[540px] aspect-[4/3] rounded-[40px] overflow-hidden shadow-2xl relative">
                <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=800&q=80" alt="Concert Event" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent"></div>
            </div>

            <div class="absolute -bottom-6 right-0 sm:right-6 bg-white border border-slate-100 rounded-2xl p-6 shadow-xl w-full max-w-[420px] grid grid-cols-4 gap-4">
                <div class="flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-lg bg-indigo-50 text-[#4F46E5] flex items-center justify-center mb-2">
                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-extrabold text-slate-900">250+</span>
                    <span class="text-[9px] text-slate-400 font-semibold tracking-wider uppercase mt-0.5">Events</span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-lg bg-indigo-50 text-[#4F46E5] flex items-center justify-center mb-2">
                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-extrabold text-slate-900">15K+</span>
                    <span class="text-[9px] text-slate-400 font-semibold tracking-wider uppercase mt-0.5">Happy Users</span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-lg bg-indigo-50 text-[#4F46E5] flex items-center justify-center mb-2">
                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-extrabold text-slate-900">30+</span>
                    <span class="text-[9px] text-slate-400 font-semibold tracking-wider uppercase mt-0.5">Locations</span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-lg bg-indigo-50 text-[#4F46E5] flex items-center justify-center mb-2">
                        <svg class="w-4.5 h-4.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-extrabold text-slate-900">4.8</span>
                    <span class="text-[9px] text-slate-400 font-semibold tracking-wider uppercase mt-0.5">User Rating</span>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-32">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10">
            <div>
                <span class="text-xs font-bold text-[#4F46E5] uppercase tracking-wider block mb-2">Featured Events</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Popular Events</h2>
                <p class="text-sm text-slate-400 mt-1">Don't miss out on these amazing events.</p>
            </div>
            <a href="/events" class="inline-flex items-center text-sm font-bold text-[#4F46E5] hover:text-[#4338CA] mt-3 sm:mt-0 transition group">
                <span>View All Events</span>
                <svg class="w-4.5 h-4.5 ml-1.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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
                        <div class="flex items-center text-xs text-slate-400 mb-2">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Oct 14, 2026</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Global Rock Arena</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Experience the heavy synth-rock, live orchestral tracks, and stunning lights display.</p>
                    </div>

                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$89.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">
                            Book Now
                        </a>
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
                        <div class="flex items-center text-xs text-slate-400 mb-2">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Nov 08, 2026</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Global AI Summit</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Learn about new LLMs, agentic systems, and cloud architectures from core product creators.</p>
                    </div>

                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$299.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">
                            Book Now
                        </a>
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
                        <div class="flex items-center text-xs text-slate-400 mb-2">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Nov 20, 2026</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">Interaction UX Hub</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Master dynamic component architectures, design tokens, and sleek transitions step by step.</p>
                    </div>

                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$45.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">
                            Book Now
                        </a>
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
                        <div class="flex items-center text-xs text-slate-400 mb-2">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Dec 02, 2026</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-[#4F46E5] transition-colors duration-200 line-clamp-1">National Golf Cup</h3>
                        <p class="text-xs text-slate-400 mt-1.5 line-clamp-2">Witness the championship tournament live from the best seats, featuring prime players.</p>
                    </div>

                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-slate-400 block uppercase tracking-wider font-semibold">Price</span>
                            <span class="text-base font-extrabold text-[#4F46E5]">$150.00</span>
                        </div>
                        <a href="#" class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-sm">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-32 border border-slate-100 bg-white rounded-3xl p-8 sm:p-12 shadow-sm grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <span class="text-xs font-bold text-[#4F46E5] uppercase tracking-wider block mb-2">Grow with Us</span>
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Host Your Own Events</h2>
            <p class="text-sm text-slate-500 mt-3 leading-relaxed">
                Connect with our premium audiences, design your own ticketing structures, set custom capacity metrics, and gather secure payments immediately.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="/register" class="px-5 py-3 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white transition-all shadow-md">
                    Become Organizer
                </a>
                <a href="/contact" class="px-5 py-3 rounded-xl text-sm font-semibold text-slate-600 border border-slate-200 hover:bg-slate-50 transition-all">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="w-full h-full min-h-[200px] bg-slate-50 rounded-2xl border border-slate-100 flex items-center justify-center p-8">
            <div class="grid grid-cols-2 gap-6 w-full max-w-sm">
                <div class="p-4 bg-white border border-slate-100 rounded-xl shadow-xs">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wide block">Fee</span>
                    <span class="text-lg font-black text-slate-800 mt-1 block">Low 2.5%</span>
                </div>
                <div class="p-4 bg-white border border-slate-100 rounded-xl shadow-xs">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wide block">Payouts</span>
                    <span class="text-lg font-black text-slate-800 mt-1 block">Instant</span>
                </div>
                <div class="p-4 bg-white border border-slate-100 rounded-xl shadow-xs">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wide block">Analytics</span>
                    <span class="text-lg font-black text-slate-800 mt-1 block">Included</span>
                </div>
                <div class="p-4 bg-white border border-slate-100 rounded-xl shadow-xs">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wide block">Tickets</span>
                    <span class="text-lg font-black text-slate-800 mt-1 block">QR Code</span>
                </div>
            </div>
        </div>
    </section>
@endsection
