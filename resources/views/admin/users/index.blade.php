@extends('layouts.app')

@section('title', 'Users List - EventBook')

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
                
                <a href="/admin/events" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-[#4F46E5] hover:bg-slate-50 transition">
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Manage Events</span>
                </a>

                <a href="/admin/users" class="flex items-center space-x-3 px-4 py-2.5 rounded-xl text-sm font-bold bg-[#4F46E5] text-white shadow-sm transition">
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
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Users Management</h2>
                    <p class="text-sm text-slate-500 mt-1">Review and manage registered user accounts on the platform.</p>
                </div>
                <div class="flex-shrink-0">
                    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-semibold bg-indigo-50 text-[#4F46E5]">
                        {{ $users->count() }} Registered {{ Str::plural('User', $users->count()) }}
                    </span>
                </div>
            </div>

            <div class="premium-card rounded-2xl p-6 space-y-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[10px] font-bold text-slate-400 uppercase border-b border-slate-100">
                                <th class="pb-3 pr-2">User details</th>
                                <th class="pb-3 pr-2">Role</th>
                                <th class="pb-3 pr-2">Registered At</th>
                                <th class="pb-3 pr-2">Bookings Count</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-xs text-slate-600">
                            @forelse($users as $user)
                                <tr>
                                    <td class="py-3.5 pr-2">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-9 h-9 rounded-xl bg-slate-100 flex items-center justify-center text-[#4F46E5] font-bold">
                                                {{ strtoupper(substr($user->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <span class="font-bold text-slate-800 block">{{ $user->name }}</span>
                                                <span class="text-[10px] text-slate-400 block">{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3.5 pr-2">
                                        @if($user->role === 'admin')
                                            <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-pink-600 bg-pink-50 border border-pink-100">
                                                Admin
                                            </span>
                                        @else
                                            <span class="px-2.5 py-0.5 rounded text-[10px] font-bold text-indigo-600 bg-indigo-50 border border-indigo-100">
                                                User
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3.5 pr-2">
                                        {{ \Carbon\Carbon::parse($user->created_at)->format('M d, Y') }}
                                    </td>
                                    <td class="py-3.5 pr-2 font-bold text-slate-800">
                                        {{ $user->bookings()->count() }} {{ Str::plural('Booking', $user->bookings()->count()) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-6 text-center text-slate-400">No users found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
@endsection
