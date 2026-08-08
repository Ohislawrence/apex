@extends('layouts.app')

@section('title', 'Our Services — Apex Cloud Tech')
@section('meta_description', 'Comprehensive digital solutions from Apex Cloud Tech: web development, mobile apps, cloud & DevOps, AI/ML, cybersecurity, UI/UX design, and API development.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">What We Offer</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Our <span class="text-[#3b82f6]">Services</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Comprehensive digital solutions to power your business growth.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $services = [
                ['icon' => 'fa-code', 'color' => '#facc15', 'title' => 'Web Development', 'desc' => 'Custom, responsive websites built with Laravel, React, Vue, and modern frameworks. SEO-optimized and blazing fast.'],
                ['icon' => 'fa-mobile-screen', 'color' => '#3b82f6', 'title' => 'Mobile Apps', 'desc' => 'Native iOS and Android apps plus cross-platform solutions using Flutter and React Native.'],
                ['icon' => 'fa-cloud', 'color' => '#06b6d4', 'title' => 'Cloud & DevOps', 'desc' => 'AWS, Azure, and GCP infrastructure with CI/CD pipelines, Docker, Kubernetes, and serverless.'],
                ['icon' => 'fa-brain', 'color' => '#a78bfa', 'title' => 'AI & Machine Learning', 'desc' => 'Intelligent automation, predictive analytics, NLP, and computer vision solutions.'],
                ['icon' => 'fa-shield-halved', 'color' => '#f87171', 'title' => 'Cybersecurity', 'desc' => 'Security audits, penetration testing, compliance, and secure architecture design.'],
                ['icon' => 'fa-database', 'color' => '#34d399', 'title' => 'Data Engineering', 'desc' => 'Data pipelines, warehousing, ETL processes, and real-time analytics dashboards.'],
                ['icon' => 'fa-paint-brush', 'color' => '#fbbf24', 'title' => 'UI/UX Design', 'desc' => 'User-centered design with wireframes, prototypes, and stunning interfaces.'],
                ['icon' => 'fa-gears', 'color' => '#f472b6', 'title' => 'API Development', 'desc' => 'RESTful and GraphQL APIs, microservices architecture, and third-party integrations.'],
                ['icon' => 'fa-rocket', 'color' => '#fb923c', 'title' => 'SaaS Development', 'desc' => 'Full-cycle SaaS platform development from MVP to enterprise-scale solutions.'],
            ];
            @endphp
            @foreach($services as $service)
            <div class="group bg-white/[0.03] border border-white/10 rounded-2xl p-8 hover:border-[{{ $service['color'] }}]/40 hover:bg-white/[0.06] transition-all duration-300 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" @if(!$loop->first) style="transition-delay: {{ $loop->index * 0.05 }}s;" @endif>
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300" style="background: {{ $service['color'] }}15;">
                    <i class="fas {{ $service['icon'] }} text-2xl" style="color: {{ $service['color'] }};"></i>
                </div>
                <h3 class="font-['Orbitron'] font-semibold text-white mb-3 text-sm tracking-wider">{{ $service['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $service['desc'] }}</p>
            </div>
            @endforeach
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