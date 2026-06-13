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

                <a href="/admin/bookings" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                    </svg>
                    <span>Manage Bookings</span>
                </a>

                <a href="/admin/users" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Users List</span>
                </a>

                <a href="/admin/settings" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>System Settings</span>
                </a>
            </nav>
        </aside>

        <main class="lg:col-span-9 space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Admin Dashboard</h2>
                    <p class="text-sm text-slate-500 mt-1">Real-time overview of ticket purchases, metrics, and active listings.</p>
                </div>
                <button type="button" class="inline-flex items-center space-x-2 px-4 py-2.5 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Add New Event</span>
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Total Revenue</span>
                        <span class="text-[10px] text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded font-bold">+12.5%</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">$48,250.00</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Earned this calendar month</span>
                </div>

                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Active Bookings</span>
                        <span class="text-[10px] text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded font-bold">+8.0%</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">1,248</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Active reservations reserved</span>
                </div>

                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Organizers</span>
                        <span class="text-[10px] text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded font-bold">+4 new</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">32</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Verified hosts registered</span>
                </div>

                <div class="premium-card rounded-2xl p-5 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Sales Rate</span>
                        <span class="text-[10px] text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded font-bold">+1.8%</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 block">94.2%</span>
                    <span class="text-[10px] text-slate-400 block font-medium">Average occupancy rates</span>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
                <div class="xl:col-span-8 premium-card rounded-2xl p-6 space-y-4">
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
                                <tr>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">Sarah Jenkins</td>
                                    <td class="py-3.5 pr-2">Global AI Summit</td>
                                    <td class="py-3.5 pr-2">2 Seats</td>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">$598.00</td>
                                    <td class="py-3.5"><span class="px-2 py-0.5 bg-emerald-50 border border-emerald-100 text-emerald-600 rounded">Paid</span></td>
                                </tr>
                                <tr>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">David Miller</td>
                                    <td class="py-3.5 pr-2">Global Rock Arena</td>
                                    <td class="py-3.5 pr-2">1 Seat</td>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">$89.00</td>
                                    <td class="py-3.5"><span class="px-2 py-0.5 bg-emerald-50 border border-emerald-100 text-emerald-600 rounded">Paid</span></td>
                                </tr>
                                <tr>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">Emma Watson</td>
                                    <td class="py-3.5 pr-2">Interaction UX Hub</td>
                                    <td class="py-3.5 pr-2">3 Seats</td>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">$135.00</td>
                                    <td class="py-3.5"><span class="px-2 py-0.5 bg-yellow-50 border border-yellow-100 text-yellow-600 rounded">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="xl:col-span-4 premium-card rounded-2xl p-6 space-y-4">
                    <h3 class="text-base font-bold text-slate-800 border-b border-slate-100 pb-3">Sales Share</h3>
                    
                    <div class="space-y-4">
                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-600 font-bold">Music</span>
                                <span class="text-slate-400 font-medium">42%</span>
                            </div>
                            <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-indigo-500 rounded-full" style="width: 42%"></div>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-600 font-bold">Conference</span>
                                <span class="text-slate-400 font-medium">35%</span>
                            </div>
                            <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-pink-500 rounded-full" style="width: 35%"></div>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-600 font-bold">Workshop</span>
                                <span class="text-slate-400 font-medium">15%</span>
                            </div>
                            <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-emerald-50 rounded-full" style="width: 15%"></div>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-slate-600 font-bold">Sports</span>
                                <span class="text-slate-400 font-medium">8%</span>
                            </div>
                            <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-blue-500 rounded-full" style="width: 8%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
