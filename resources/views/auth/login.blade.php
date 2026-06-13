@extends('layouts.app')

@section('title', 'Login - EventHub')

@section('content')
    <div class="relative py-12 flex items-center justify-center">
        <div class="absolute w-[400px] h-[400px] bg-violet-600/10 rounded-full blur-[100px] pointer-events-none -top-12 -left-12"></div>
        <div class="absolute w-[400px] h-[400px] bg-indigo-600/10 rounded-full blur-[100px] pointer-events-none -bottom-12 -right-12"></div>

        <div class="w-full max-w-md rounded-3xl glass-card border border-white/5 p-8 relative shadow-2xl overflow-hidden">
            <div class="text-center mb-8">
                <div class="mx-auto w-12 h-12 rounded-xl bg-gradient-to-tr from-violet-600 to-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-500/20 mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white tracking-tight">Welcome Back</h2>
                <p class="text-sm text-slate-400 mt-2">Sign in to your EventHub account</p>
            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs flex items-start space-x-2.5">
                    <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <div>
                        <span class="font-bold block mb-0.5">Please correct the following errors:</span>
                        <ul class="list-disc list-inside space-y-0.5 opacity-90">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form method="POST" action="/login" class="space-y-5" onsubmit="event.preventDefault();">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                    <div class="relative rounded-xl bg-slate-950/80 border border-white/10 hover:border-slate-700 focus-within:border-indigo-500 focus-within:shadow-[0_0_15px_rgba(99,102,241,0.15)] transition-all duration-200">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <input id="email" type="email" name="email" value="{{ old('email', 'demo@eventhub.com') }}" required autocomplete="email" placeholder="name@company.com" 
                            class="w-full pl-11 pr-4 py-3 bg-transparent border-0 text-white placeholder-slate-600 text-sm focus:outline-none focus:ring-0">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Password</label>
                        <a href="#" class="text-xs font-semibold text-indigo-400 hover:text-indigo-300 transition">Forgot Password?</a>
                    </div>
                    <div class="relative rounded-xl bg-slate-950/80 border border-white/10 hover:border-slate-700 focus-within:border-indigo-500 focus-within:shadow-[0_0_15px_rgba(99,102,241,0.15)] transition-all duration-200">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" 
                            class="w-full pl-11 pr-11 py-3 bg-transparent border-0 text-white placeholder-slate-600 text-sm focus:outline-none focus:ring-0">
                        <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-500 hover:text-slate-300 transition" id="toggle-password" aria-label="Toggle Password Visibility">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="eye-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" 
                        class="h-4.5 w-4.5 rounded border-white/10 bg-slate-950 text-indigo-600 focus:ring-offset-slate-950 focus:ring-indigo-500 transition-all cursor-pointer">
                    <label for="remember_me" class="ml-2 text-sm text-slate-400 select-none cursor-pointer hover:text-slate-300">Remember this device</label>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3.5 px-4 rounded-xl text-sm font-bold bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 active:translate-y-0 transition-all cursor-pointer flex items-center justify-center space-x-2" id="submit-btn">
                        <span>Sign In</span>
                    </button>

                    <button disabled type="button" class="hidden w-full py-3.5 px-4 rounded-xl text-sm font-bold bg-slate-800 text-slate-500 border border-white/5 cursor-not-allowed flex items-center justify-center space-x-2" id="loading-btn">
                        <svg class="animate-spin h-4 w-4 text-slate-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Signing In...</span>
                    </button>
                </div>
            </form>

            <div class="mt-8 pt-6 border-t border-white/5 text-center">
                <p class="text-sm text-slate-400">
                    Don't have an account? 
                    <a href="/register" class="font-bold text-indigo-400 hover:text-indigo-300 transition">Create account</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('toggle-password');
            const passwordInput = document.getElementById('password');
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', () => {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    const eyeIcon = document.getElementById('eye-icon');
                    if (type === 'text') {
                        eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />`;
                    } else {
                        eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
                    }
                });
            }

            const form = document.querySelector('form');
            const submitBtn = document.getElementById('submit-btn');
            const loadingBtn = document.getElementById('loading-btn');
            if (form && submitBtn && loadingBtn) {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    submitBtn.classList.add('hidden');
                    loadingBtn.classList.remove('hidden');
                    
                    setTimeout(() => {
                        submitBtn.classList.remove('hidden');
                        loadingBtn.classList.add('hidden');
                    }, 2000);
                });
            }
        });
    </script>
@endsection
