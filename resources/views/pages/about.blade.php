@extends('layouts.app')

@section('title', 'About Apex Cloud Tech')
@section('meta_description', 'Learn about Apex Cloud Tech — a team of passionate technologists building the digital backbone for businesses worldwide. Founded in 2020.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Who We Are</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">About <span class="text-[#3b82f6]">Apex Cloud Tech</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">We're a team of passionate technologists building the digital backbone for businesses worldwide.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <div class="space-y-6 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
                <h2 class="text-3xl font-['Orbitron'] font-bold">Our <span class="text-[#facc15]">Mission</span></h2>
                <p class="text-gray-400 leading-relaxed">At Apex Cloud Tech, we believe that exceptional technology should be accessible to every business. Founded with the vision of bridging the gap between enterprise-grade solutions and growing businesses, we deliver custom websites, mobile applications, and SaaS platforms that drive measurable results.</p>
                <p class="text-gray-400 leading-relaxed">Our portfolio includes successful platforms like ClickIntel, HealthIntel, and OliLearn — each solving real-world problems through innovative technology.</p>
                <div class="flex gap-6 pt-4">
                    <div class="text-center">
                        <span class="text-3xl font-['Orbitron'] font-black text-[#facc15]">2020</span>
                        <p class="text-gray-500 text-xs mt-1">Founded</p>
                    </div>
                    <div class="text-center">
                        <span class="text-3xl font-['Orbitron'] font-black text-[#3b82f6]">15+</span>
                        <p class="text-gray-500 text-xs mt-1">Team Members</p>
                    </div>
                    <div class="text-center">
                        <span class="text-3xl font-['Orbitron'] font-black text-[#06b6d4]">Global</span>
                        <p class="text-gray-500 text-xs mt-1">Reach</p>
                    </div>
                </div>
            </div>
            <div class="relative animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" style="transition-delay: 0.2s;">
                <div class="bg-white/[0.03] border border-white/10 rounded-2xl p-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#3b82f6]/10 rounded-full blur-2xl"></div>
                    <i class="fas fa-quote-right text-4xl text-[#facc15]/30 mb-4"></i>
                    <p class="text-gray-300 text-lg italic leading-relaxed mb-6">"Technology is best when it brings people together. At Apex, we don't just build software — we build bridges between ideas and reality."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-[#facc15] to-[#eab308] rounded-full flex items-center justify-center font-bold text-black">A</div>
                        <div>
                            <p class="text-white font-semibold text-sm">Apex Cloud Tech</p>
                            <p class="text-gray-500 text-xs">Founding Team</p>
                        </div>
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