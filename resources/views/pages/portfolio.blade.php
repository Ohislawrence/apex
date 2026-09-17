@extends('layouts.app')

@section('title', 'Our Portfolio — Apex Cloud Tech')
@section('meta_description', 'Explore the Apex Cloud Tech portfolio — ClickIntel analytics, HealthIntel health intelligence, OliLearn e-learning, and other custom projects we have built.')
@push('styles')
<style>
.animate-on-scroll.animate-visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
</style>
@endpush

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Our Work</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Our <span class="text-[#3b82f6]">Portfolio</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Showcasing our businesses and projects that are making an impact.</p>
        </div>

        @if($items->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            @foreach($items as $item)
            <a @if($item->url) href="{{ $item->url }}" target="_blank" @endif class="group relative bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden hover:border-white/20 transition-all duration-300 hover:-translate-y-1 {{ $item->url ? 'cursor-pointer' : 'cursor-default' }} animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" @if(!$loop->first) style="transition-delay: {{ min($loop->index, 5) * 0.1 }}s;" @endif>
                <div class="h-56 flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, {{ $item->color }}30, {{ $item->color }}10);">
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <i class="fas {{ $item->icon ?? 'fa-folder' }} text-6xl group-hover:scale-110 transition-transform duration-500" style="color: {{ $item->color }}; opacity: 0.5;"></i>
                    @endif
                    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-[#0a0a14] to-transparent"></div>
                </div>
                <div class="p-6 relative">
                    <h3 class="font-['Orbitron'] font-bold text-white text-lg mb-2">{{ $item->title }}</h3>
                    @if($item->description)
                    <p class="text-gray-400 text-sm mb-4">{{ $item->description }}</p>
                    @endif
                    @if($item->url)
                    <span class="inline-flex items-center gap-2 text-sm font-medium group-hover:gap-3 transition-all" style="color: {{ $item->color }};">
                        Visit Site <i class="fas fa-arrow-right text-xs"></i>
                    </span>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="text-center py-20">
            <i class="fas fa-folder-open text-6xl text-gray-700 mb-4 block"></i>
            <h2 class="text-2xl font-['Orbitron'] font-bold text-white mb-2">No Portfolio Items Yet</h2>
            <p class="text-gray-500">Check back soon for exciting projects.</p>
        </div>
        @endif
    </div>
</section>
@endsection