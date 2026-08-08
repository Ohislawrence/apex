@extends('layouts.app')

@section('title', 'Contact Apex Cloud Tech')
@section('meta_description', 'Get in touch with Apex Cloud Tech for your next web or app development project. Based in Lagos, Nigeria — serving clients worldwide.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Get In Touch</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Contact <span class="text-[#3b82f6]">Us</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Have a project in mind? Let's build something amazing together.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
                <div>
                    <h2 class="text-2xl font-['Orbitron'] font-bold mb-6">Send Us a <span class="text-[#facc15]">Message</span></h2>
                    <form class="space-y-5">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm text-gray-400 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm text-gray-400 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Subject</label>
                            <input type="text" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all" placeholder="Project Inquiry">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Message</label>
                            <textarea rows="5" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-600 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all resize-none" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full px-8 py-4 rounded-xl font-['Rajdhani'] font-bold text-lg tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-xl hover:shadow-[#facc15]/25 transition-all duration-300">
                            Send Message <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" style="transition-delay: 0.2s;">
                <div>
                    <h2 class="text-2xl font-['Orbitron'] font-bold mb-6">Contact <span class="text-[#3b82f6]">Info</span></h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 bg-white/[0.03] border border-white/10 rounded-xl p-5">
                            <div class="w-10 h-10 bg-[#facc15]/10 rounded-lg flex items-center justify-center shrink-0">
                                <i class="fas fa-envelope text-[#facc15]"></i>
                            </div>
                            <div>
                                <p class="text-white font-medium text-sm">Email</p>
                                <p class="text-gray-400 text-sm">hello@apexcloudtech.com</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-white/[0.03] border border-white/10 rounded-xl p-5">
                            <div class="w-10 h-10 bg-[#3b82f6]/10 rounded-lg flex items-center justify-center shrink-0">
                                <i class="fas fa-location-dot text-[#3b82f6]"></i>
                            </div>
                            <div>
                                <p class="text-white font-medium text-sm">Location</p>
                                <p class="text-gray-400 text-sm">Lagos, Nigeria — Serving Clients Worldwide</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-white/[0.03] border border-white/10 rounded-xl p-5">
                            <div class="w-10 h-10 bg-[#06b6d4]/10 rounded-lg flex items-center justify-center shrink-0">
                                <i class="fas fa-clock text-[#06b6d4]"></i>
                            </div>
                            <div>
                                <p class="text-white font-medium text-sm">Business Hours</p>
                                <p class="text-gray-400 text-sm">Mon - Fri: 9:00 AM - 6:00 PM (WAT)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/[0.03] border border-white/10 rounded-2xl p-6">
                    <h3 class="font-['Orbitron'] font-semibold text-white mb-4 text-sm tracking-wider">Follow Us</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#3b82f6] hover:border-[#3b82f6]/50 transition-all"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#06b6d4] hover:border-[#06b6d4]/50 transition-all"><i class="fab fa-github"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.animate-on-scroll.animate-visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
</style>
@endpush