<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'EventHub'))</title>
    <meta name="description" content="@yield('meta_description', 'Discover and book premium events seamlessly.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #020617;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #020617;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 9999px;
            border: 2px solid #020617;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }

        .glass-header {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .glass-card {
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glow-radial {
            background: radial-gradient(circle at 50% -20%, rgba(99, 102, 241, 0.15) 0%, transparent 60%);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-slate-100 min-h-screen flex flex-col antialiased selection:bg-violet-500/30 selection:text-violet-200 glow-radial">
    
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-cyan-500/5 rounded-full blur-[100px] pointer-events-none -z-10"></div>

    <header class="sticky top-0 z-50 w-full glass-header transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center space-x-2 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-violet-600 to-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-slate-100 to-indigo-200">
                            Event<span class="text-indigo-400 font-medium">Hub</span>
                        </span>
                    </a>
                </div>

                <nav class="hidden md:flex space-x-1 items-center">
                    <a href="/" class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition-all duration-200 {{ Request::is('/') ? 'text-indigo-400 bg-white/5' : '' }}">Home</a>
                    <a href="/events" class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition-all duration-200 {{ Request::is('events*') ? 'text-indigo-400 bg-white/5' : '' }}">Explore Events</a>
                    
                    @auth
                        <a href="/my-bookings" class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition-all duration-200 {{ Request::is('my-bookings') ? 'text-indigo-400 bg-white/5' : '' }}">My Bookings</a>
                        @if(auth()->user()->role === 'admin')
                            <a href="/admin" class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition-all duration-200 {{ Request::is('admin*') ? 'text-indigo-400 bg-white/5' : '' }}">Admin Panel</a>
                        @endif
                    @endauth
                </nav>

                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <div class="relative" id="user-menu-container">
                            <button type="button" class="flex items-center space-x-3 focus:outline-none" id="user-menu-button">
                                <span class="text-sm font-semibold text-slate-300">{{ auth()->user()->name }}</span>
                                <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-indigo-400 font-bold hover:border-indigo-500/50 transition-all">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                </div>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 rounded-xl glass-card border border-white/5 shadow-2xl py-2 hidden" id="user-dropdown">
                                <div class="px-4 py-2 border-b border-white/5">
                                    <p class="text-xs text-slate-400">Signed in as</p>
                                    <p class="text-sm font-semibold text-slate-200 truncate">{{ auth()->user()->email }}</p>
                                </div>
                                <a href="/my-bookings" class="block px-4 py-2 text-sm text-slate-300 hover:bg-white/5 hover:text-white transition">My Bookings</a>
                                @if(auth()->user()->role === 'admin')
                                    <a href="/admin" class="block px-4 py-2 text-sm text-slate-300 hover:bg-white/5 hover:text-white transition">Admin Panel</a>
                                @endif
                                <hr class="border-white/5 my-1">
                                <form method="POST" action="/logout" class="block w-full">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-rose-400 hover:bg-rose-500/10 hover:text-rose-300 transition">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="/login" class="text-sm font-semibold text-slate-300 hover:text-white transition">Login</a>
                        <a href="/register" class="px-5 py-2.5 rounded-xl text-sm font-bold bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 transition-all">Sign Up</a>
                    @endauth
                </div>

                <div class="md:hidden flex items-center">
                    <button type="button" class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/5 focus:outline-none" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-white/5 bg-slate-950/95 backdrop-blur-lg">
                <a href="/" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition">Home</a>
                <a href="/events" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition">Explore Events</a>
                
                @auth
                    <a href="/my-bookings" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition">My Bookings</a>
                    @if(auth()->user()->role === 'admin')
                        <a href="/admin" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-300 hover:text-white hover:bg-white/5 transition">Admin Panel</a>
                    @endif
                    <div class="pt-4 pb-2 border-t border-white/5">
                        <div class="flex items-center px-3">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-indigo-400 font-bold mr-3">
                                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-slate-200">{{ auth()->user()->name }}</div>
                                <div class="text-xs text-slate-400">{{ auth()->user()->email }}</div>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="block w-full text-left px-3 py-2 rounded-lg text-base font-semibold text-rose-400 hover:bg-rose-500/10 transition">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="pt-4 pb-2 border-t border-white/5 px-3 flex flex-col space-y-3">
                        <a href="/login" class="text-center py-2.5 rounded-xl text-sm font-semibold text-slate-300 border border-slate-700 hover:text-white hover:border-slate-500 transition">Login</a>
                        <a href="/register" class="text-center py-2.5 rounded-xl text-sm font-bold bg-gradient-to-r from-violet-600 to-indigo-600 text-white shadow-lg transition">Sign Up</a>
                    </div>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-10">
        @yield('content')
    </main>

    <footer class="w-full border-t border-white/5 bg-slate-950/40 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-violet-600 to-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-lg font-extrabold tracking-tight text-white">
                            Event<span class="text-indigo-400 font-medium">Hub</span>
                        </span>
                    </div>
                    <p class="mt-4 text-sm text-slate-400 max-w-sm leading-relaxed">
                        Discover, explore, and reserve seats at the most premium tech and cultural events worldwide. Seamless access at your fingertips.
                    </p>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-slate-300 uppercase tracking-wider">Explore</h3>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="/" class="text-sm text-slate-400 hover:text-white transition">Home</a></li>
                        <li><a href="/events" class="text-sm text-slate-400 hover:text-white transition">Events Directory</a></li>
                        <li><a href="/my-bookings" class="text-sm text-slate-400 hover:text-white transition">My Reservations</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-slate-300 uppercase tracking-wider">Support</h3>
                    <ul class="mt-4 space-y-2.5">
                        <li><span class="text-sm text-slate-400">help@eventhub.com</span></li>
                        <li><span class="text-sm text-slate-400">+1 (555) 234-5678</span></li>
                        <li><a href="#" class="text-sm text-slate-400 hover:text-white transition">Terms & Privacy</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between">
                <p class="text-xs text-slate-500">
                    &copy; {{ date('Y') }} EventHub Inc. All rights reserved. Built with passion & elegance.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-slate-500 hover:text-indigo-400 transition" aria-label="Facebook">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-slate-500 hover:text-indigo-400 transition" aria-label="Twitter">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 10) {
                    navbar.classList.add('shadow-xl', 'bg-slate-950/80', 'border-slate-900');
                    navbar.classList.remove('bg-slate-950/60');
                } else {
                    navbar.classList.remove('shadow-xl', 'bg-slate-950/80', 'border-slate-900');
                    navbar.classList.add('bg-slate-950/60');
                }
            });

            const mobileMenuBtn = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            const userMenuBtn = document.getElementById('user-menu-button');
            const userDropdown = document.getElementById('user-dropdown');
            if (userMenuBtn && userDropdown) {
                userMenuBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    userDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                    const container = document.getElementById('user-menu-container');
                    if (container && !container.contains(e.target)) {
                        userDropdown.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>
