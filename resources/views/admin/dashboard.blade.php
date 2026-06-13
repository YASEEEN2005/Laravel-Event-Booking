@extends('layouts.app')

@section('title', 'Admin Dashboard - EventBook')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <aside class="lg:col-span-3 premium-card rounded-2xl p-5 space-y-6">
            <div class="border-b border-slate-100 pb-4">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Control Panel</span>
                <span class="text-sm font-black text-slate-800 mt-1 block">EventBook Console</span>
            </div>
            
            <nav class="flex flex-col space-y-1">
                <a href="/admin" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-bold bg-[#4F46E5] text-white shadow-sm transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                
                <a href="/admin/events" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Manage Events</span>
                </a>

                <a href="/admin/users" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Users List</span>
                </a>
            </nav>
        </aside>

        <main class="lg:col-span-9 space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Admin Dashboard</h2>
                    <p class="text-sm text-slate-500 mt-1">Real-time overview of ticket purchases, metrics, and active listings.</p>
                </div>
                <a href="/admin/events/create" class="inline-flex items-center space-x-2 px-4 py-2.5 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Add New Event</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Total Revenue</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">${{ number_format($total_revenue, 2) }}</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Earned this calendar month</span>
                </div>

                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Active Bookings</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">{{ number_format($active_bookings_count) }}</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Active reservations reserved</span>
                </div>

                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Total Users</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">{{ $total_users }}</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Verified accounts registered</span>
                </div>
            </div>

            <div class="premium-card rounded-2xl p-6 space-y-4">
                <h3 class="text-base font-bold text-slate-800 border-b border-slate-100 pb-3">Recent Ticket Bookings</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[10px] font-bold text-slate-400 uppercase border-b border-slate-100">
                                <th class="pb-3 pr-2">Buyer</th>
                                <th class="pb-3 pr-2">Event</th>
                                <th class="pb-3 pr-2">Tickets</th>
                                <th class="pb-3 pr-2">Amount</th>
                                <th class="pb-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-xs text-slate-600">
                            @forelse($recent_bookings as $booking)
                                <tr>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">{{ $booking->user ? $booking->user->name : 'N/A' }}</td>
                                    <td class="py-3.5 pr-2">{{ $booking->event ? $booking->event->title : 'Deleted Event' }}</td>
                                    <td class="py-3.5 pr-2">1 Seat</td>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">
                                        {{ $booking->event ? ($booking->event->price == 0 ? 'Free' : '$' . number_format($booking->event->price, 2)) : 'N/A' }}
                                    </td>
                                    <td class="py-3.5">
                                        @if($booking->status === 'confirmed')
                                            <span class="px-2 py-0.5 bg-emerald-50 border border-emerald-100 text-emerald-600 rounded">Confirmed</span>
                                        @else
                                            <span class="px-2 py-0.5 bg-slate-100 border border-slate-200 text-slate-500 rounded">Cancelled</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-6 text-center text-slate-400">No bookings recorded yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
@endsection
