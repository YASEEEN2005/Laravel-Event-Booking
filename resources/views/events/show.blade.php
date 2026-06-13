@extends('layouts.app')

@section('title', 'Global AI Summit 2026 - EventBook')

@section('content')
    <div class="space-y-8">
        <div class="relative w-full h-[320px] sm:h-[400px] rounded-[32px] overflow-hidden shadow-lg border border-slate-100">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80" alt="Global AI Summit" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/20 to-transparent"></div>
            
            <div class="absolute bottom-6 left-6 right-6 sm:bottom-8 sm:left-8 sm:right-8 text-white flex flex-col justify-end">
                <div class="flex items-center space-x-2">
                    <span class="text-[10px] font-bold text-white bg-pink-600/90 backdrop-blur-sm px-3 py-1 rounded-full uppercase tracking-wider">
                        Conference
                    </span>
                    <span class="text-[10px] font-bold text-white bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full uppercase tracking-wider">
                        Technology
                    </span>
                </div>
                <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight mt-3 leading-tight max-w-3xl">
                    Global AI & Agentic Systems Summit 2026
                </h1>
                <div class="flex flex-wrap gap-4 sm:gap-6 mt-4 text-xs sm:text-sm text-slate-200">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>Nov 08, 2026</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>09:00 AM - 05:00 PM EST</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>San Francisco, CA</span>
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
                            Join developers, pipeline architects, neural researchers, and industry founders from all around the world to map out the future of autonomous systems. This summit is a deep dive into active agent networks, orchestration layers, fine-tuning methodologies, and safe model execution environments.
                        </p>
                        <p class="text-sm text-slate-500 mt-3 leading-relaxed">
                            Attendees will gain direct access to interactive coding workshops, panel discussions, and structured networking lounges with top-tier product creators in the Silicon Valley ecosystem.
                        </p>
                    </div>

                    <div>
                        <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">Schedule Timeline</h2>
                        <div class="mt-6 space-y-6">
                            <div class="relative pl-6 border-l-2 border-indigo-100">
                                <div class="absolute -left-[7px] top-1.5 w-3 h-3 rounded-full bg-[#4F46E5]"></div>
                                <span class="text-xs font-bold text-[#4F46E5] block">09:00 AM - 10:00 AM</span>
                                <h4 class="text-sm font-bold text-slate-800 mt-0.5">Registration & Welcome Keynote</h4>
                                <p class="text-xs text-slate-400 mt-1">Check-in at the main hall reception desk and gather initial materials.</p>
                            </div>
                            <div class="relative pl-6 border-l-2 border-indigo-100">
                                <div class="absolute -left-[7px] top-1.5 w-3 h-3 rounded-full bg-[#4F46E5]"></div>
                                <span class="text-xs font-bold text-[#4F46E5] block">10:15 AM - 12:30 PM</span>
                                <h4 class="text-sm font-bold text-slate-800 mt-0.5">Agentic Frameworks Deep Dive</h4>
                                <p class="text-xs text-slate-400 mt-1">Live live-coding demos demonstrating tool integration, routing nodes, and context limits.</p>
                            </div>
                            <div class="relative pl-6 border-l-2 border-indigo-100">
                                <div class="absolute -left-[7px] top-1.5 w-3 h-3 rounded-full bg-[#4F46E5]"></div>
                                <span class="text-xs font-bold text-[#4F46E5] block">02:00 PM - 05:00 PM</span>
                                <h4 class="text-sm font-bold text-slate-800 mt-0.5">Scale Audits & Sandbox Environments</h4>
                                <p class="text-xs text-slate-400 mt-1">Structured panels discussing sandboxing execution loops and cost boundaries.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">Event Venue</h2>
                        <div class="mt-4 flex flex-col sm:flex-row gap-4 justify-between">
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">The Moscone Center</h4>
                                <p class="text-xs text-slate-400 mt-1">747 Howard St, San Francisco, CA 94103</p>
                            </div>
                            <a href="https://maps.google.com" target="_blank" class="inline-flex items-center text-xs font-bold text-[#4F46E5] hover:text-[#4338CA] transition">
                                <span>Get Directions</span>
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="w-full h-44 rounded-xl bg-slate-50 border border-slate-100 mt-4 flex items-center justify-center text-slate-400">
                            <div class="text-center">
                                <svg class="w-8 h-8 mx-auto text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                <span class="text-xs text-slate-400 block mt-2">Mock Location Map Preview</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-6">
                <div class="premium-card rounded-2xl p-6 space-y-6">
                    <div class="flex items-baseline justify-between">
                        <span class="text-xs text-slate-400 uppercase tracking-wide font-bold">Ticket Price</span>
                        <span class="text-2xl font-black text-[#4F46E5]">$299.00</span>
                    </div>

                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-400 font-medium">Availability</span>
                            <span class="text-rose-500 font-bold">Only 18 Seats Left!</span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden p-0.5 border border-slate-100">
                            <div class="h-full bg-gradient-to-r from-rose-600 to-amber-500 rounded-full" style="width: 88%"></div>
                        </div>
                        <span class="text-[10px] text-slate-400 block mt-1">132 out of 150 total seats filled.</span>
                    </div>

                    <div class="space-y-2.5">
                        <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider">Number of Seats</label>
                        <div class="relative rounded-xl bg-slate-50 border border-slate-200">
                            <select class="w-full bg-transparent border-0 text-slate-700 text-sm focus:outline-none focus:ring-0 py-3 pl-3 pr-8 cursor-pointer">
                                <option value="1">1 Seat</option>
                                <option value="2">2 Seats</option>
                                <option value="3">3 Seats</option>
                                <option value="4">4 Seats</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" class="w-full py-3.5 px-4 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-lg shadow-indigo-500/10 hover:shadow-indigo-500/20 transform hover:-translate-y-0.5 transition-all text-center">
                        Book Seat
                    </button>

                    <div class="pt-4 border-t border-slate-100 flex flex-col space-y-2.5 text-xs text-slate-500">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            <span>Instant Ticket PDF Download</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            <span>100% Refundable up to 7 days before</span>
                        </div>
                    </div>
                </div>

                <div class="premium-card rounded-2xl p-6 space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wide">Event Organizer</h3>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#4F46E5] font-bold">
                            NT
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-800">NextGen Tech Solutions</h4>
                            <p class="text-[10px] text-slate-400">Host since 2024</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Organizing high-end technology and networking summits across key tech hubs. Focus on premium venues, safe sandbox coding projects, and secure booking processes.
                    </p>
                    <button type="button" class="w-full py-2.5 px-4 rounded-xl text-xs font-bold bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 transition-all text-center">
                        Contact Host
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
