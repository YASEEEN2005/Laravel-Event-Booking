@extends('layouts.app')

@section('title', 'Manage Events - EventBook')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <aside class="lg:col-span-3 premium-card rounded-2xl p-5 space-y-6">
            <div class="border-b border-slate-100 pb-4">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Control Panel</span>
                <span class="text-sm font-black text-slate-800 mt-1 block">EventBook Console</span>
            </div>
            
            <nav class="flex flex-col space-y-1">
                <a href="/admin" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                
                <a href="/admin/events" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-bold bg-[#4F46E5] text-white shadow-sm transition">
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
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Events Management</h2>
                    <p class="text-sm text-slate-500 mt-1">Review, search, and manage verified events listings.</p>
                </div>
                <a href="/admin/events/create" class="inline-flex items-center space-x-2 px-4 py-2.5 rounded-xl text-xs font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Create New Event</span>
                </a>
            </div>

            <div class="premium-card rounded-2xl p-6 space-y-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[10px] font-bold text-slate-400 uppercase border-b border-slate-100">
                                <th class="pb-3 pr-2">Event Title</th>
                                <th class="pb-3 pr-2">Category</th>
                                <th class="pb-3 pr-2">Date</th>
                                <th class="pb-3 pr-2">Bookings Rate</th>
                                <th class="pb-3 pr-2">Ticket Price</th>
                                <th class="pb-3 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-xs text-slate-600">
                            <tr>
                                <td class="py-3.5 pr-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-9 rounded bg-slate-100 overflow-hidden flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=150&q=80" alt="Global AI Summit" class="w-full h-full object-cover">
                                        </div>
                                        <span class="font-bold text-slate-800 block">Global AI & Agentic Systems Summit 2026</span>
                                    </div>
                                </td>
                                <td class="py-3.5 pr-2">
                                    <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100">Conference</span>
                                </td>
                                <td class="py-3.5 pr-2">Nov 08, 2026</td>
                                <td class="py-3.5 pr-2">
                                    <div class="w-24 space-y-1">
                                        <div class="flex items-center justify-between text-[10px]">
                                            <span class="font-semibold text-slate-700">132 / 150</span>
                                        </div>
                                        <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                                            <div class="h-full bg-emerald-500 rounded-full" style="width: 88%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 pr-2 font-bold text-slate-800">$299.00</td>
                                <td class="py-3.5 text-right space-x-1.5">
                                    <a href="/admin/events/edit" class="inline-flex items-center px-2.5 py-1 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 text-[10px] font-bold transition">Edit</a>
                                    <button type="button" class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 hover:bg-rose-100/50 text-rose-500 text-[10px] font-bold transition">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3.5 pr-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-9 rounded bg-slate-100 overflow-hidden flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=150&q=80" alt="Global Rock Arena" class="w-full h-full object-cover">
                                        </div>
                                        <span class="font-bold text-slate-800 block">Global Rock Arena Arena</span>
                                    </div>
                                </td>
                                <td class="py-3.5 pr-2">
                                    <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-indigo-600 bg-indigo-50 border border-indigo-100">Music</span>
                                </td>
                                <td class="py-3.5 pr-2">Oct 14, 2026</td>
                                <td class="py-3.5 pr-2">
                                    <div class="w-24 space-y-1">
                                        <div class="flex items-center justify-between text-[10px]">
                                            <span class="font-semibold text-slate-700">182 / 200</span>
                                        </div>
                                        <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                                            <div class="h-full bg-emerald-500 rounded-full" style="width: 91%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 pr-2 font-bold text-slate-800">$89.00</td>
                                <td class="py-3.5 text-right space-x-1.5">
                                    <a href="/admin/events/edit" class="inline-flex items-center px-2.5 py-1 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 text-[10px] font-bold transition">Edit</a>
                                    <button type="button" class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 hover:bg-rose-100/50 text-rose-500 text-[10px] font-bold transition">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3.5 pr-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-9 rounded bg-slate-100 overflow-hidden flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=150&q=80" alt="Interaction UX Hub" class="w-full h-full object-cover">
                                        </div>
                                        <span class="font-bold text-slate-800 block">Interaction UX Hub Workshop</span>
                                    </div>
                                </td>
                                <td class="py-3.5 pr-2">
                                    <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100">Workshop</span>
                                </td>
                                <td class="py-3.5 pr-2">Nov 20, 2026</td>
                                <td class="py-3.5 pr-2">
                                    <div class="w-24 space-y-1">
                                        <div class="flex items-center justify-between text-[10px]">
                                            <span class="font-semibold text-slate-700">47 / 50</span>
                                        </div>
                                        <div class="w-full h-1 bg-slate-100 rounded-full overflow-hidden">
                                            <div class="h-full bg-rose-500 rounded-full" style="width: 94%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 pr-2 font-bold text-slate-800">$45.00</td>
                                <td class="py-3.5 text-right space-x-1.5">
                                    <a href="/admin/events/edit" class="inline-flex items-center px-2.5 py-1 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 text-[10px] font-bold transition">Edit</a>
                                    <button type="button" class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 hover:bg-rose-100/50 text-rose-500 text-[10px] font-bold transition">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex items-center justify-between border-t border-slate-100 pt-5">
                    <div class="text-[11px] text-slate-400 font-medium">Showing 3 active events</div>
                    <nav class="flex space-x-1">
                        <button disabled class="px-3 py-1.5 rounded-lg border border-slate-200 bg-white text-slate-400 text-[10px] font-bold cursor-not-allowed">Previous</button>
                        <button class="px-3 py-1.5 rounded-lg bg-[#4F46E5] text-white text-[10px] font-bold">1</button>
                        <button class="px-3 py-1.5 rounded-lg border border-slate-200 bg-white text-slate-600 text-[10px] font-bold hover:bg-slate-50 transition">Next</button>
                    </nav>
                </div>
            </div>
        </main>
    </div>
@endsection
