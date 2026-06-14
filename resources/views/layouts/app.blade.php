<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'EventBook'))</title>
    <meta name="description" content="@yield('meta_description', 'Discover and book premium events seamlessly.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Outfit', sans-serif;
            background-color: #FAF9F6;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #FAF9F6;
        }
        ::-webkit-scrollbar-thumb {
            background: #E5E2DA;
            border-radius: 9999px;
            border: 2px solid #FAF9F6;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #D1CCC0;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(229, 226, 218, 0.7);
        }
        
        .premium-card {
            background: #FFFFFF;
            border: 1px solid rgba(229, 226, 218, 0.6);
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.015);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .premium-card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 0 25px 50px -12px rgba(197, 168, 128, 0.12);
            border-color: rgba(197, 168, 128, 0.3);
        }

        .premium-btn-primary {
            background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%) !important;
            border: 1px solid rgba(197, 168, 128, 0.3) !important;
            color: #C5A880 !important;
            box-shadow: 0 4px 15px -3px rgba(197, 168, 128, 0.15) !important;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .premium-btn-primary:hover {
            background: #C5A880 !important;
            color: #0F172A !important;
            box-shadow: 0 10px 25px -4px rgba(197, 168, 128, 0.3) !important;
            transform: translateY(-2px) scale(1.02);
        }

        .premium-btn-primary:active {
            transform: translateY(0) scale(0.98);
        }
        
        .premium-badge {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.75s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .nav-link-item {
            position: relative;
            transition: color 0.25s ease;
        }

        .nav-link-item::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, #C5A880, #D8B48F);
            transform-origin: bottom right;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .nav-link-item:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .text-\[\#4F46E5\], .text-indigo-600, .text-indigo-500 {
            color: #C5A880 !important;
        }
        .bg-\[\#4F46E5\], .bg-indigo-600 {
            background-color: #0F172A !important;
        }
        .hover\:bg-\[\#4338CA\]:hover, .hover\:bg-indigo-700:hover {
            background-color: #C5A880 !important;
            color: #0F172A !important;
        }
        .bg-indigo-50, .bg-indigo-50\/50, .bg-indigo-500\/10 {
            background-color: rgba(197, 168, 128, 0.08) !important;
        }
        .border-indigo-100, .border-indigo-500\/10, .border-indigo-500\/20 {
            border-color: rgba(197, 168, 128, 0.2) !important;
        }
        .shadow-indigo-500\/10, .shadow-indigo-500\/20, .shadow-indigo-500\/25 {
            box-shadow: 0 10px 25px -5px rgba(197, 168, 128, 0.15) !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-slate-800 min-h-screen flex flex-col antialiased selection:bg-[#C5A880]/10 selection:text-[#0F172A]">
    
    <div class="fixed top-4 left-0 right-0 z-50 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
        <header class="w-full rounded-2xl glass-header shadow-lg shadow-slate-100/40 transition-all duration-300" id="navbar">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 sm:h-20">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center space-x-2.5 group">
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl sm:rounded-2xl bg-gradient-to-tr from-[#0F172A] to-[#1E293B] border border-[#C5A880]/20 flex items-center justify-center shadow-lg shadow-indigo-500/25 group-hover:rotate-3 transition-transform duration-300">
                                <svg class="w-5 h-5 sm:w-5.5 sm:h-5.5 text-[#C5A880]" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 10a2 2 0 00-2 2v4a2 2 0 002 2h16a2 2 0 002-2v-4a2 2 0 00-2-2H4zm8-4a1 1 0 100-2 1 1 0 000 2zm0 10a1 1 0 100-2 1 1 0 000 2z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-base sm:text-xl font-black tracking-tight text-slate-900 leading-none">
                                    EventBook
                                </span>
                                <span class="text-[8px] sm:text-[9px] text-[#C5A880] font-bold uppercase tracking-wider mt-0.5">Premium Experience</span>
                            </div>
                        </a>
                    </div>

                    <nav class="hidden md:flex space-x-1 items-center">
                        <a href="/" class="px-3.5 py-2 rounded-xl text-sm font-semibold nav-link-item transition-all duration-250 {{ Request::is('/') ? 'text-[#C5A880] bg-[#C5A880]/10' : 'text-slate-600 hover:text-[#C5A880]' }}">Home</a>
                        <a href="/events" class="px-3.5 py-2 rounded-xl text-sm font-semibold nav-link-item transition-all duration-250 {{ Request::is('events*') ? 'text-[#C5A880] bg-[#C5A880]/10' : 'text-slate-600 hover:text-[#C5A880]' }}">Events</a>
                        <a href="/my-bookings" class="px-3.5 py-2 rounded-xl text-sm font-semibold nav-link-item transition-all duration-250 {{ Request::is('my-bookings') ? 'text-[#C5A880] bg-[#C5A880]/10' : 'text-slate-600 hover:text-[#C5A880]' }}">My Bookings</a>
                        <a href="/about" class="px-3.5 py-2 rounded-xl text-sm font-semibold nav-link-item transition-all duration-250 {{ Request::is('about') ? 'text-[#C5A880] bg-[#C5A880]/10' : 'text-slate-600 hover:text-[#C5A880]' }}">About Us</a>
                        <a href="/contact" class="px-3.5 py-2 rounded-xl text-sm font-semibold nav-link-item transition-all duration-250 {{ Request::is('contact') ? 'text-[#C5A880] bg-[#C5A880]/10' : 'text-slate-600 hover:text-[#C5A880]' }}">Contact</a>
                    </nav>

                    <div class="hidden md:flex items-center space-x-4">
                        @auth
                            <div class="relative" id="user-menu-container">
                                <button type="button" class="flex items-center space-x-3 focus:outline-none" id="user-menu-button">
                                    <span class="text-sm font-bold text-slate-700">{{ auth()->user()->name }}</span>
                                    <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl sm:rounded-2xl bg-gradient-to-tr from-slate-50 to-slate-100 border border-slate-200 flex items-center justify-center text-[#C5A880] font-extrabold hover:border-[#C5A880]/40 transition-all">
                                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                    </div>
                                </button>
                                <div class="absolute right-0 mt-2.5 w-52 rounded-2xl bg-white border border-slate-100 shadow-2xl py-2.5 hidden animate-fade-in-up" id="user-dropdown">
                                    <div class="px-4.5 py-3 border-b border-slate-50">
                                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Signed in as</p>
                                        <p class="text-xs font-bold text-slate-800 truncate mt-0.5">{{ auth()->user()->email }}</p>
                                    </div>
                                    <a href="/my-bookings" class="block px-4.5 py-2.5 text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-[#C5A880] transition">My Bookings</a>
                                    @if(auth()->user()->role === 'admin')
                                        <a href="/admin" class="block px-4.5 py-2.5 text-xs font-semibold text-[#C5A880] hover:bg-indigo-50/30 transition">Admin Panel</a>
                                    @endif
                                    <hr class="border-slate-50 my-1.5">
                                    <form method="POST" action="/logout" class="block w-full">
                                        @csrf
                                        <button type="submit" class="w-full text-left px-4.5 py-2.5 text-xs font-bold text-rose-500 hover:bg-rose-50/50 transition">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="/login" class="text-sm font-semibold text-slate-600 hover:text-[#C5A880] px-4 py-2 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 transition">Login</a>
                            <a href="/register" class="px-5 py-2.5 rounded-xl text-sm font-bold text-[#C5A880] premium-btn-primary">Register</a>
                        @endauth
                    </div>

                    <div class="md:hidden flex items-center">
                        <button type="button" class="p-2.5 rounded-xl text-slate-500 hover:text-slate-700 hover:bg-slate-100 focus:outline-none" id="mobile-menu-button">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-3 pt-2.5 pb-4.5 space-y-1.5 sm:px-3 border-t border-slate-100 bg-white rounded-b-2xl shadow-lg">
                    <a href="/" class="block px-3 py-2.5 rounded-xl text-base font-semibold text-slate-600 hover:text-[#C5A880] hover:bg-slate-50 transition">Home</a>
                    <a href="/events" class="block px-3 py-2.5 rounded-xl text-base font-semibold text-slate-600 hover:text-[#C5A880] hover:bg-slate-50 transition">Events</a>
                    
                    @auth
                        <a href="/my-bookings" class="block px-3 py-2.5 rounded-xl text-base font-semibold text-slate-600 hover:text-[#C5A880] hover:bg-slate-50 transition">My Bookings</a>
                        <div class="pt-4 pb-2 border-t border-slate-100">
                            <div class="flex items-center px-3">
                                <div class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-[#C5A880] font-extrabold mr-3">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-slate-800">{{ auth()->user()->name }}</div>
                                    <div class="text-xs text-slate-500">{{ auth()->user()->email }}</div>
                                </div>
                            </div>
                            <div class="mt-3.5 space-y-1.5">
                                @if(auth()->user()->role === 'admin')
                                    <a href="/admin" class="block px-3 py-2.5 rounded-xl text-base font-semibold text-[#C5A880] hover:bg-indigo-50/30 transition">Admin Panel</a>
                                @endif
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-3 py-2.5 rounded-xl text-base font-bold text-rose-500 hover:bg-rose-50 transition">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="pt-4 pb-2 border-t border-slate-100 px-3 flex flex-col space-y-3">
                            <a href="/login" class="text-center py-3 rounded-xl text-sm font-semibold text-slate-600 border border-slate-200 hover:bg-slate-50 transition">Login</a>
                            <a href="/register" class="text-center py-3 rounded-xl text-sm font-bold text-[#C5A880] premium-btn-primary">Register</a>
                        </div>
                    @endauth
                </div>
            </div>
        </header>
    </div>

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-36 pb-16 animate-fade-in-up">
        @yield('content')
    </main>

    <footer class="w-full border-t border-slate-100 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="col-span-1 md:col-span-2 space-y-4">
                    <div class="flex items-center space-x-2.5">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#0F172A] to-[#1E293B] border border-[#C5A880]/20 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                            <svg class="w-4.5 h-4.5 text-[#C5A880]" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 10a2 2 0 00-2 2v4a2 2 0 002 2h16a2 2 0 002-2v-4a2 2 0 00-2-2H4zm8-4a1 1 0 100-2 1 1 0 000 2zm0 10a1 1 0 100-2 1 1 0 000 2z"></path>
                            </svg>
                        </div>
                        <span class="text-lg font-black tracking-tight text-slate-900">
                            EventBook
                        </span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-400 max-w-sm leading-relaxed font-medium">
                        Discover, explore, and reserve seats at the most popular events, concerts, conferences, and workshops in one place.
                    </p>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Explore</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="/" class="text-sm font-semibold text-slate-500 hover:text-[#C5A880] transition">Home</a></li>
                        <li><a href="/events" class="text-sm font-semibold text-slate-500 hover:text-[#C5A880] transition">Events Directory</a></li>
                        <li><a href="/my-bookings" class="text-sm font-semibold text-slate-500 hover:text-[#C5A880] transition">My Bookings</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Support</h3>
                    <ul class="mt-4 space-y-3">
                        <li><span class="text-sm font-semibold text-slate-500 block">support@eventbook.com</span></li>
                        <li><span class="text-sm font-semibold text-slate-500 block">+1 (800) 555-0199</span></li>
                        <li><a href="#" class="text-sm font-semibold text-slate-500 hover:text-[#C5A880] transition">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-16 pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between">
                <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">
                    &copy; {{ date('Y') }} EventBook Inc. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-slate-400 hover:text-[#C5A880] transition" aria-label="Facebook">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-[#C5A880] transition" aria-label="Twitter">
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
                if (window.scrollY > 20) {
                    navbar.classList.add('shadow-xl', 'bg-white/95', 'border-[#C5A880]/15');
                    navbar.classList.remove('bg-white/85');
                } else {
                    navbar.classList.remove('shadow-xl', 'bg-white/95', 'border-[#C5A880]/15');
                    navbar.classList.add('bg-white/85');
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
