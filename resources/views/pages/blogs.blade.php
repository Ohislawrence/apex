@extends('layouts.app')

@section('title', 'Blog — Apex Cloud Tech')
@section('meta_description', 'Read the latest tech insights, industry trends, and expert perspectives from the Apex Cloud Tech team. Topics include cloud computing, AI/ML, web development, and cybersecurity.')

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Insights</span>
            <h1 class="text-4xl lg:text-6xl font-['Orbitron'] font-black mt-4 mb-4">Our <span class="text-[#3b82f6]">Blog</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Tech insights, industry trends, and expert perspectives from the Apex team.</p>
        </div>

        @if($posts->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden hover:border-[#facc15]/30 transition-all duration-300 hover:-translate-y-1 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" @if(!$loop->first) style="transition-delay: {{ $loop->index * 0.05 }}s;" @endif>
                <div class="h-48 bg-gradient-to-br from-[#3b82f6]/20 to-[#facc15]/10 flex items-center justify-center relative overflow-hidden">
                    @if($post->featured_image)
                        <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <i class="fas fa-newspaper text-4xl text-gray-700 group-hover:text-[#facc15]/50 transition-colors"></i>
                    @endif
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-[#3b82f6]/20 border border-[#3b82f6]/30 rounded-full text-xs text-[#3b82f6] font-medium">{{ $post->category ?? 'General' }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-gray-500 text-xs mb-3">
                        <i class="far fa-calendar"></i>
                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-['Rajdhani'] font-bold text-lg text-white mb-2 group-hover:text-[#facc15] transition-colors">{{ $post->title }}</h3>
                    <p class="text-gray-500 text-sm">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            {{ $posts->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <i class="fas fa-pen-to-square text-6xl text-gray-700 mb-4"></i>
            <h2 class="text-2xl font-['Orbitron'] font-bold text-white mb-2">No Posts Yet</h2>
            <p class="text-gray-500">Check back soon for insightful articles and tech updates.</p>
        </div>
        @endif
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