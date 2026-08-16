@extends('layouts.app')

@section('title', 'Apex Cloud Tech - Building the Future')
@section('meta_description', 'Apex Cloud Tech builds cutting-edge websites, apps, and SaaS platforms for businesses. Our portfolio includes ClickIntel, HealthIntel, and OliLearn.')
@section('meta_keywords', 'Apex Cloud Tech, web development, app development, SaaS, ClickIntel, HealthIntel, OliLearn, cloud computing, Lagos, Nigeria')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden">
    <!-- Animated Grid Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(59,130,246,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(59,130,246,0.5) 1px, transparent 1px); background-size: 50px 50px; animation: gridMove 20s linear infinite;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
                <div class="">
                    <span class="w-2 h-2 bg-[#facc15] rounded-full animate-pulse"></span>
                    <span class="text-[#facc15] text-sm font-medium font-['Rajdhani'] tracking-wider">TECH INNOVATION LEADERS</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-['Orbitron'] font-black leading-tight">
                    <span class="text-white">Build The</span><br>
                    <span class="bg-gradient-to-r from-[#facc15] via-[#eab308] to-[#fbbf24] bg-clip-text text-transparent">Future</span> 
                    <span class="text-[#3b82f6]">Digital</span>
                </h1>
                
                <p class="text-lg lg:text-xl text-gray-400 max-w-lg leading-relaxed">
                    Apex Cloud Tech crafts powerful websites, apps, and digital solutions that transform businesses. From ClickIntel to HealthIntel, we deliver innovation at scale.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('services') }}" class="group relative px-8 py-4 rounded-xl font-['Rajdhani'] font-bold text-lg tracking-wider overflow-hidden">
                        <span class="absolute inset-0 bg-gradient-to-r from-[#facc15] to-[#eab308] transition-all duration-300"></span>
                        <span class="absolute inset-0 bg-gradient-to-r from-[#3b82f6] to-[#2563eb] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative text-black flex items-center gap-2">
                            Explore Services
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </a>
                    <a href="{{ route('portfolio') }}" class="relative px-8 py-4 rounded-xl font-['Rajdhani'] font-bold text-lg tracking-wider border border-[#3b82f6]/50 text-[#3b82f6] hover:bg-[#3b82f6]/10 transition-all duration-300">
                        View Portfolio
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="flex flex-wrap gap-8 pt-4">
                    <div>
                        <span class="text-3xl lg:text-4xl font-['Orbitron'] font-black text-[#facc15]">50+</span>
                        <p class="text-gray-500 text-sm mt-1">Projects Delivered</p>
                    </div>
                    <div>
                        <span class="text-3xl lg:text-4xl font-['Orbitron'] font-black text-[#3b82f6]">3</span>
                        <p class="text-gray-500 text-sm mt-1">SaaS Businesses</p>
                    </div>
                    <div>
                        <span class="text-3xl lg:text-4xl font-['Orbitron'] font-black text-[#06b6d4]">99%</span>
                        <p class="text-gray-500 text-sm mt-1">Client Satisfaction</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Visual -->
            <div class="relative animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" style="transition-delay: 0.2s;">
                <div class="relative">
                    <!-- Floating cards -->
                    <div class="relative z-10 bg-gradient-to-br from-white/[0.08] to-white/[0.02] backdrop-blur-xl border border-white/10 rounded-2xl p-8">
                        <!-- Code-like display -->
                        <div class="space-y-3 font-mono text-sm">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-gray-500 text-xs ml-2">apex_cloud.sh</span>
                            </div>
                            <div class="text-[#3b82f6]">> <span class="text-gray-300">deploy --app</span> <span class="text-[#06b6d4]">clickintel</span></div>
                            <div class="text-gray-500 pl-4">Initializing cloud infrastructure...</div>
                            <div class="text-green-400 pl-4">✓ Deployed to 12 regions globally</div>
                            <div class="text-gray-500 pl-4">Scaling...</div>
                            <div class="text-[#facc15] pl-4">⚡ 99.99% uptime achieved</div>
                            <div class="text-[#3b82f6] mt-3">> <span class="text-gray-300">monitor --all</span></div>
                            <div class="text-green-400 pl-4">✓ ClickIntel - Healthy</div>
                            <div class="text-green-400 pl-4">✓ HealthIntel - Healthy</div>
                            <div class="text-green-400 pl-4">✓ OliLearn - Healthy</div>
                            <div class="text-gray-300 mt-2">> <span class="animate-pulse">▊</span></div>
                        </div>
                    </div>
                    
                    <!-- Glow effects -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#facc15]/20 via-[#3b82f6]/20 to-[#06b6d4]/20 rounded-2xl blur-xl -z-10 animate-pulse"></div>
                    <div class="absolute -inset-4 bg-gradient-to-r from-[#3b82f6]/10 via-transparent to-[#facc15]/10 rounded-2xl blur-2xl -z-20"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
        <span class="text-gray-500 text-xs font-['Rajdhani'] tracking-widest">SCROLL</span>
        <i class="fas fa-chevron-down text-[#facc15] text-sm"></i>
    </div>
</section>

<!-- Our Businesses Section -->
@if($portfolioItems->count() > 0)
<section class="py-20 lg:py-28 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#3b82f6]/5 to-transparent"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#3b82f6] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Our Ecosystem</span>
            <h2 class="text-4xl lg:text-5xl font-['Orbitron'] font-black mt-4 mb-4">Businesses We <span class="text-[#facc15]">Power</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore the latest businesses and projects from Apex Cloud Tech.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($portfolioItems as $item)
            <a @if($item->url) href="{{ $item->url }}" target="_blank" @endif class="group relative bg-gradient-to-br from-white/[0.05] to-white/[0.01] border border-white/10 rounded-2xl p-8 hover:border-white/20 transition-all duration-500 hover:-translate-y-2 animate-on-scroll opacity-0 translate-y-8 ease-out" @if(!$loop->first) style="transition-delay: {{ min($loop->index, 5) * 0.1 }}s;" @endif>
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(135deg, {{ $item->color }}18, transparent);"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500" style="background: {{ $item->color }}20;">
                        <i class="fas {{ $item->icon ?? 'fa-folder' }} text-2xl" style="color: {{ $item->color }};"></i>
                    </div>
                    <h3 class="text-xl font-['Orbitron'] font-bold text-white mb-3">{{ $item->title }}</h3>
                    @if($item->description)
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">{{ $item->description }}</p>
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
    </div>
</section>
@endif

<!-- Services Highlights -->
<section class="py-20 lg:py-28 relative">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <span class="text-[#facc15] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">What We Do</span>
            <h2 class="text-4xl lg:text-5xl font-['Orbitron'] font-black mt-4 mb-4">Our <span class="text-[#3b82f6]">Services</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">End-to-end digital solutions tailored for modern businesses.</p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-white/[0.03] border border-white/10 rounded-2xl p-6 hover:border-[#facc15]/30 hover:bg-white/[0.06] transition-all duration-300 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
                <div class="w-12 h-12 bg-[#facc15]/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-[#facc15]/20 transition-colors">
                    <i class="fas fa-code text-xl text-[#facc15]"></i>
                </div>
                <h3 class="font-['Orbitron'] font-semibold text-white mb-2 text-sm tracking-wider">WEB DEVELOPMENT</h3>
                <p class="text-gray-500 text-sm">Custom websites built with cutting-edge tech stacks for performance.</p>
            </div>
            <div class="group bg-white/[0.03] border border-white/10 rounded-2xl p-6 hover:border-[#3b82f6]/30 hover:bg-white/[0.06] transition-all duration-300 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" style="transition-delay: 0.1s;">
                <div class="w-12 h-12 bg-[#3b82f6]/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-[#3b82f6]/20 transition-colors">
                    <i class="fas fa-mobile-screen text-xl text-[#3b82f6]"></i>
                </div>
                <h3 class="font-['Orbitron'] font-semibold text-white mb-2 text-sm tracking-wider">APP DEVELOPMENT</h3>
                <p class="text-gray-500 text-sm">Native and cross-platform mobile applications for iOS and Android.</p>
            </div>
            <div class="group bg-white/[0.03] border border-white/10 rounded-2xl p-6 hover:border-[#06b6d4]/30 hover:bg-white/[0.06] transition-all duration-300 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" style="transition-delay: 0.2s;">
                <div class="w-12 h-12 bg-[#06b6d4]/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-[#06b6d4]/20 transition-colors">
                    <i class="fas fa-cloud text-xl text-[#06b6d4]"></i>
                </div>
                <h3 class="font-['Orbitron'] font-semibold text-white mb-2 text-sm tracking-wider">CLOUD & SAAS</h3>
                <p class="text-gray-500 text-sm">Scalable cloud infrastructure and SaaS platform development.</p>
            </div>
            <div class="group bg-white/[0.03] border border-white/10 rounded-2xl p-6 hover:border-[#a78bfa]/30 hover:bg-white/[0.06] transition-all duration-300 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" style="transition-delay: 0.3s;">
                <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-purple-500/20 transition-colors">
                    <i class="fas fa-brain text-xl text-purple-400"></i>
                </div>
                <h3 class="font-['Orbitron'] font-semibold text-white mb-2 text-sm tracking-wider">AI & ANALYTICS</h3>
                <p class="text-gray-500 text-sm">AI-powered analytics and intelligent automation for businesses.</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Posts -->
@if($posts->count() > 0)
<section class="py-20 lg:py-28 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#facc15]/5 to-transparent"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between mb-12 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <div>
                <span class="text-[#3b82f6] font-['Rajdhani'] font-semibold tracking-widest text-sm uppercase">Insights</span>
                <h2 class="text-4xl lg:text-5xl font-['Orbitron'] font-black mt-4">Latest <span class="text-[#facc15]">Blog</span></h2>
            </div>
            <a href="{{ route('blogs') }}" class="hidden sm:inline-flex items-center gap-2 text-[#3b82f6] hover:text-[#facc15] font-medium transition-colors">
                View All Posts <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group bg-white/[0.03] border border-white/10 rounded-2xl overflow-hidden hover:border-[#facc15]/30 transition-all duration-300 hover:-translate-y-1 animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out" @if(!$loop->first) style="transition-delay: {{ $loop->index * 0.1 }}s;" @endif>
                <div class="h-44 bg-gradient-to-br from-[#3b82f6]/20 to-[#facc15]/10 flex items-center justify-center relative overflow-hidden">
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
                        <span class="mx-1">·</span>
                        <i class="far fa-clock"></i>
                        <span>{{ $post->published_at->diffForHumans() }}</span>
                    </div>
                    <h3 class="font-['Rajdhani'] font-bold text-lg text-white mb-2 group-hover:text-[#facc15] transition-colors line-clamp-2">{{ $post->title }}</h3>
                    <p class="text-gray-500 text-sm line-clamp-2">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>
        
        <div class="text-center mt-10 sm:hidden">
            <a href="{{ route('blogs') }}" class="inline-flex items-center gap-2 px-6 py-3 border border-[#3b82f6]/50 text-[#3b82f6] rounded-xl hover:bg-[#3b82f6]/10 transition-all">
                View All Posts <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 lg:py-28 relative">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative bg-gradient-to-r from-[#3b82f6]/10 via-[#facc15]/5 to-[#06b6d4]/10 border border-white/10 rounded-3xl p-10 lg:p-16 text-center overflow-hidden animate-on-scroll opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#facc15]/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#3b82f6]/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
            <div class="relative">
                <h2 class="text-3xl lg:text-5xl font-['Orbitron'] font-black mb-4">Ready to <span class="text-[#facc15]">Transform</span> Your Business?</h2>
                <p class="text-gray-400 max-w-xl mx-auto mb-8 text-lg">Let's discuss how Apex Cloud Tech can build the digital future your business deserves.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="group px-8 py-4 rounded-xl font-['Rajdhani'] font-bold text-lg tracking-wider bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-2xl hover:shadow-[#facc15]/30 transition-all duration-300">
                        Get in Touch <i class="fas fa-paper-plane ml-2 group-hover:translate-x-1 transition-transform inline-block"></i>
                    </a>
                    <a href="{{ route('services') }}" class="px-8 py-4 rounded-xl font-['Rajdhani'] font-bold text-lg tracking-wider border border-white/30 text-white hover:bg-white/5 transition-all duration-300">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
@keyframes gridMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}
.animate-on-scroll.animate-visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endpush