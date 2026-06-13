@extends('layouts.app')

@section('title', 'Contact Us - EventBook')

@section('content')
    <div class="space-y-12">
        <div class="border-b border-slate-100 pb-8 text-center sm:text-left">
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Contact Us</h1>
            <p class="text-sm text-slate-500 mt-1">Have any questions? We would love to hear from you.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-5 space-y-6">
                <div class="premium-card rounded-2xl p-6 sm:p-8 space-y-6">
                    <h3 class="text-lg font-bold text-slate-800 border-b border-slate-100 pb-3">Get in Touch</h3>
                    
                    <div class="space-y-5">
                        <div class="flex items-start space-x-3.5">
                            <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-[#4F46E5] flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Email Support</span>
                                <span class="text-sm font-bold text-slate-800 block mt-0.5">support@eventbook.com</span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3.5">
                            <div class="w-10 h-10 rounded-xl bg-pink-50 border border-pink-100 flex items-center justify-center text-pink-600 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Call Center</span>
                                <span class="text-sm font-bold text-slate-800 block mt-0.5">+1 (800) 555-0199</span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3.5">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Headquarters</span>
                                <span class="text-sm font-bold text-slate-800 block mt-0.5">747 Howard St, San Francisco, CA</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="premium-card rounded-2xl p-6 text-slate-500 text-xs leading-relaxed space-y-2.5">
                    <h4 class="font-bold text-slate-700">Operating Hours</h4>
                    <p>Monday - Friday: 09:00 AM - 06:00 PM EST</p>
                    <p>Saturday: 10:00 AM - 04:00 PM EST</p>
                    <p class="text-[10px] text-slate-400 italic">For booking emergencies outside operating hours, please email us directly with your Booking ID.</p>
                </div>
            </div>

            <div class="lg:col-span-7 premium-card rounded-2xl p-6 sm:p-8 space-y-6">
                <h3 class="text-lg font-bold text-slate-800 border-b border-slate-100 pb-3">Send a Message</h3>
                
                @if(session('success'))
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-600 text-xs font-semibold shadow-xs">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="#" class="space-y-5" onsubmit="event.preventDefault(); alert('Thank you for contacting us! We will get back to you shortly.'); this.reset();">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Your Name</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="name" type="text" name="name" required placeholder="John Doe"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                            <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                                <input id="email" type="email" name="email" required placeholder="name@company.com"
                                    class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Subject</label>
                        <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                            <input id="subject" type="text" name="subject" required placeholder="e.g. Booking assistance request"
                                class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0">
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Message</label>
                        <div class="relative rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 focus-within:border-[#4F46E5] focus-within:bg-white transition-all duration-200">
                            <textarea id="message" name="message" rows="5" required placeholder="How can we help you today?"
                                class="w-full px-4 py-3 bg-transparent border-0 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-0 resize-none"></textarea>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full py-3.5 px-4 rounded-xl text-sm font-bold bg-[#4F46E5] hover:bg-[#4338CA] text-white shadow-lg shadow-indigo-500/10 hover:shadow-indigo-500/20 transform hover:-translate-y-0.5 active:translate-y-0 transition-all text-center">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
