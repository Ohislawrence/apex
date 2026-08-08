@extends('layouts.app')

@section('title', $post->title)
@section('meta_description', $post->excerpt ?? Str::limit(strip_tags($post->content), 155))
@section('meta_keywords', strip_tags($post->category ?? '') . ', Apex Cloud Tech blog, tech insights')
@section('og_image', $post->featured_image ?? asset('images/og-default.jpg'))

@section('content')
<section class="py-20 lg:py-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Link -->
        <a href="{{ route('blogs') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#facc15] transition-colors mb-8 text-sm">
            <i class="fas fa-arrow-left"></i> Back to Blog
        </a>

        <article class="animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <!-- Header -->
            <div class="mb-10">
                <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-[#3b82f6]/20 border border-[#3b82f6]/30 rounded-full text-xs text-[#3b82f6] font-medium">{{ $post->category ?? 'General' }}</span>
                    <span class="text-gray-500 text-sm">{{ $post->published_at->format('M d, Y') }}</span>
                    <span class="text-gray-600">·</span>
                    <span class="text-gray-500 text-sm">By {{ $post->user->name ?? 'Apex Cloud Tech' }}</span>
                </div>
                <h1 class="text-3xl lg:text-5xl font-['Orbitron'] font-black leading-tight">{{ $post->title }}</h1>
                @if($post->excerpt)
                <p class="text-gray-400 text-lg mt-4">{{ $post->excerpt }}</p>
                @endif
            </div>

            <!-- Featured Image -->
            @if($post->featured_image)
            <div class="mb-10 rounded-2xl overflow-hidden">
                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full object-cover max-h-[500px]">
            </div>
            @endif

            <!-- Content -->
            <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed text-lg space-y-6">
                {!! $post->content !!}
            </div>

            <!-- Share -->
            <div class="border-t border-white/10 mt-12 pt-8 flex items-center gap-4">
                <span class="text-gray-400 text-sm">Share:</span>
                <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all"><i class="fab fa-x-twitter"></i></a>
                <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#3b82f6] hover:border-[#3b82f6]/50 transition-all"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all"><i class="fab fa-facebook-f"></i></a>
            </div>
        </article>

        <!-- Recent Posts -->
        @if($recentPosts->count() > 0)
        <div class="mt-16">
            <h3 class="text-xl font-['Orbitron'] font-bold text-white mb-6">Recent <span class="text-[#facc15]">Posts</span></h3>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($recentPosts as $recent)
                <a href="{{ route('blog.show', $recent->slug) }}" class="group bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden hover:border-[#3b82f6]/30 transition-all duration-300">
                    <div class="h-40 bg-gradient-to-br from-[#3b82f6]/20 to-[#facc15]/10 flex items-center justify-center relative overflow-hidden">
                        @if($recent->featured_image)
                            <img src="{{ $recent->featured_image }}" alt="{{ $recent->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <i class="fas fa-newspaper text-3xl text-gray-700 group-hover:text-[#3b82f6]/50 transition-colors"></i>
                        @endif
                    </div>
                    <div class="p-5">
                        <p class="text-gray-500 text-xs mb-2">{{ $recent->published_at->format('M d, Y') }}</p>
                        <h4 class="font-['Rajdhani'] font-bold text-white text-sm group-hover:text-[#facc15] transition-colors">{{ $recent->title }}</h4>
                    </div>
                </a>
                @endforeach
            </div>
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