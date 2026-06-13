@extends('layouts.app')

@section('title', 'About Us - EventBook')

@section('content')
    <div class="space-y-20">
        <div class="relative w-full py-16 sm:py-24 rounded-[32px] overflow-hidden bg-gradient-to-tr from-indigo-900 via-slate-900 to-indigo-950 text-white px-6 sm:px-12 text-center shadow-xl">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(99,102,241,0.15),transparent)]"></div>
            <div class="relative max-w-3xl mx-auto space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-[#6366F1] bg-indigo-500/10 px-4 py-1.5 rounded-full">
                    Our Mission
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Connecting Communities Through Premium Experiences
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-2xl mx-auto">
                    EventBook was founded with a singular vision: to remove the friction from discovering, reserving, and managing live event tickets. We unite tech leaders, artists, organizers, and event goers under one premium booking umbrella.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="premium-card rounded-2xl p-6 text-center space-y-2">
                <span class="text-3xl font-extrabold text-[#4F46E5] block">45k+</span>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Tickets Issued</span>
                <p class="text-[10px] text-slate-400">Secure ticket distributions processed.</p>
            </div>
            <div class="premium-card rounded-2xl p-6 text-center space-y-2">
                <span class="text-3xl font-extrabold text-[#4F46E5] block">200+</span>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Annual Events</span>
                <p class="text-[10px] text-slate-400">Concerts, summits, and workshops.</p>
            </div>
            <div class="premium-card rounded-2xl p-6 text-center space-y-2">
                <span class="text-3xl font-extrabold text-[#4F46E5] block">99.9%</span>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Uptime SLA</span>
                <p class="text-[10px] text-slate-400">Always online instant booking loops.</p>
            </div>
            <div class="premium-card rounded-2xl p-6 text-center space-y-2">
                <span class="text-3xl font-extrabold text-[#4F46E5] block">4.9★</span>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">User Rating</span>
                <p class="text-[10px] text-slate-400">Highly-rated customer reviews.</p>
            </div>
        </div>

        <div class="space-y-10">
            <div class="text-center space-y-2">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Our Core Values</h2>
                <p class="text-sm text-slate-500 max-w-md mx-auto">The principles that guide our event platform developments.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="premium-card rounded-2xl p-8 space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#4F46E5]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800">Trust & Safety First</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Every listing is verified, and tickets are protected with unique confirmation algorithms.
                    </p>
                </div>

                <div class="premium-card rounded-2xl p-8 space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-pink-50 border border-pink-100 flex items-center justify-center text-pink-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800">Seamless Flow</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Select seats, book tickets, and download PDF passes within a couple of mouse clicks.
                    </p>
                </div>

                <div class="premium-card rounded-2xl p-8 space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800">Clear Pricing</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        No hidden check-out fees or booking taxes. The price you see listed is the price you pay.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
