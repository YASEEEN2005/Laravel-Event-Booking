@extends('layouts.app')

@section('title', 'My Bookings - EventBook')

@section('content')
    <div class="space-y-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-b border-slate-100 pb-8">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">My Bookings</h1>
                <p class="text-sm text-slate-500 mt-1">Track, manage, and view ticket details for all your reserved events.</p>
            </div>
            <div class="flex-shrink-0">
                <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-semibold bg-indigo-50 text-[#4F46E5]">
                    3 Total Reservations
                </span>
            </div>
        </div>

        <div class="space-y-6" id="bookings-list">
            <div class="premium-card rounded-2xl p-6 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 hover:shadow-md transition-shadow">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5 w-full lg:w-auto">
                    <div class="w-full sm:w-28 h-20 rounded-xl bg-slate-100 overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=300&q=80" alt="Global AI Summit" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded">
                                Confirmed
                            </span>
                            <span class="text-xs text-slate-400 font-medium">Booking ID: #EVB-9812</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 hover:text-[#4F46E5] transition"><a href="/events/show">Global AI & Agentic Systems Summit 2026</a></h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-slate-400">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Nov 08, 2026
                            </span>
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Moscone Center, SF
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row lg:flex-col items-center lg:items-end justify-between w-full lg:w-auto border-t lg:border-t-0 pt-4 lg:pt-0 border-slate-100 gap-4">
                    <div class="text-left lg:text-right">
                        <span class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold block">Total Reserved</span>
                        <span class="text-base font-extrabold text-[#4F46E5]">2 Seats ($598.00)</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button type="button" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-600 border border-slate-200 hover:bg-slate-50 transition">
                            View Ticket
                        </button>
                        <button type="button" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-rose-500 bg-rose-50 hover:bg-rose-100/60 transition">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl p-6 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 hover:shadow-md transition-shadow">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5 w-full lg:w-auto">
                    <div class="w-full sm:w-28 h-20 rounded-xl bg-slate-100 overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=300&q=80" alt="Global Rock Arena" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded">
                                Confirmed
                            </span>
                            <span class="text-xs text-slate-400 font-medium">Booking ID: #EVB-4039</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 hover:text-[#4F46E5] transition"><a href="/events/show">Global Rock Arena Arena</a></h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-slate-400">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Oct 14, 2026
                            </span>
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Oakland Stadium
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row lg:flex-col items-center lg:items-end justify-between w-full lg:w-auto border-t lg:border-t-0 pt-4 lg:pt-0 border-slate-100 gap-4">
                    <div class="text-left lg:text-right">
                        <span class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold block">Total Reserved</span>
                        <span class="text-base font-extrabold text-[#4F46E5]">1 Seat ($89.00)</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button type="button" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-600 border border-slate-200 hover:bg-slate-50 transition">
                            View Ticket
                        </button>
                        <button type="button" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-rose-500 bg-rose-50 hover:bg-rose-100/60 transition">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

            <div class="premium-card rounded-2xl p-6 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 opacity-60 hover:shadow-xs transition-shadow">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5 w-full lg:w-auto">
                    <div class="w-full sm:w-28 h-20 rounded-xl bg-slate-100 overflow-hidden flex-shrink-0 grayscale">
                        <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=300&q=80" alt="DevOps Scaling Forum" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-[10px] font-bold text-slate-500 bg-slate-100 border border-slate-200 px-2 py-0.5 rounded">
                                Cancelled
                            </span>
                            <span class="text-xs text-slate-400 font-medium">Booking ID: #EVB-1029</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-500 line-through">DevOps Scaling Forum</h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-slate-400">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Dec 28, 2026
                            </span>
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Tech Plaza, Seattle
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row lg:flex-col items-center lg:items-end justify-between w-full lg:w-auto border-t lg:border-t-0 pt-4 lg:pt-0 border-slate-100 gap-4">
                    <div class="text-left lg:text-right">
                        <span class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold block">Total Refunded</span>
                        <span class="text-base font-extrabold text-slate-500">1 Seat ($189.00)</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-xs font-semibold text-slate-400 italic">
                            Cancelled & Refunded
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden flex-col items-center justify-center py-24 text-center" id="empty-bookings-state">
            <div class="w-16 h-16 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900">No Reservations Found</h3>
            <p class="text-sm text-slate-500 mt-1 max-w-xs leading-relaxed">You haven't reserved tickets for any events yet. Check out upcoming events and start exploring.</p>
            <a href="/events" class="mt-6 inline-flex items-center px-4 py-2 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition">
                Browse Events
            </a>
        </div>
    </div>
@endsection
