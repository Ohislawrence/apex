<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Apex Cloud Tech - Building cutting-edge websites and apps for businesses. We power ClickIntel, HealthIntel, and OliLearn.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Apex Cloud Tech, web development, app development, SaaS, ClickIntel, HealthIntel, OliLearn, Laravel, cloud computing')">
    <meta name="author" content="Apex Cloud Tech">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="@yield('title', 'Apex Cloud Tech')">
    <meta property="og:description" content="@yield('meta_description', 'Apex Cloud Tech - Building cutting-edge websites and apps for businesses. We power ClickIntel, HealthIntel, and OliLearn.')">
    <meta property="og:image" content="@yield('og_image', asset('images/apexHome.png'))">
    <meta property="og:site_name" content="Apex Cloud Tech">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ request()->url() }}">
    <meta name="twitter:title" content="@yield('title', 'Apex Cloud Tech')">
    <meta name="twitter:description" content="@yield('meta_description', 'Apex Cloud Tech - Building cutting-edge websites and apps for businesses.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/apexHome.png'))">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/apexcloud.PNG') }}">
    <title>@yield('title', 'Apex Cloud Tech')</title>

    <!-- Structured data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "Organization",
                "@@id": "{{ url('/') }}/#organization",
                "name": "Apex Cloud Tech",
                "url": "{{ url('/') }}",
                "logo": {
                    "@@type": "ImageObject",
                    "url": "{{ asset('images/apexcloud.PNG') }}"
                }
            },
            {
                "@@type": "WebSite",
                "@@id": "{{ url('/') }}/#website",
                "name": "Apex Cloud Tech",
                "url": "{{ url('/') }}",
                "publisher": { "@@id": "{{ url('/') }}/#organization" }
            }
        ]
    }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @php
        $manifestPath = public_path('build/manifest.json');
        $builtCss = null;
        $builtJs = null;
        if (file_exists($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), true);
            $builtCss = $manifest['resources/css/app.css']['file'] ?? null;
            $builtJs = $manifest['resources/js/app.js']['file'] ?? null;
        }
    @endphp
    @if($builtCss && $builtJs)
        <link rel="stylesheet" href="{{ asset('build/' . $builtCss) }}">
        <script src="{{ asset('build/' . $builtJs) }}" defer></script>
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            'orbitron': ['Orbitron', 'sans-serif'],
                            'rajdhani': ['Rajdhani', 'sans-serif'],
                        }
                    }
                }
            }
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @endif
    @stack('styles')
</head>
<body class="bg-[#0a0a14] text-white font-['Inter']">
    <!-- Animated Background -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#3b82f6] rounded-full mix-blend-screen filter blur-[128px] opacity-20 animate-pulse"></div>
        <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-[#facc15] rounded-full mix-blend-screen filter blur-[128px] opacity-15 animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-[#06b6d4] rounded-full mix-blend-screen filter blur-[100px] opacity-15 animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50" id="mainHeader">
        <div class="absolute inset-0 bg-[#0a0a14]/80 backdrop-blur-xl border-b border-white/10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/apexcloud.PNG') }}" alt="Apex Cloud Tech logo" class="w-10 h-10 lg:w-12 lg:h-12 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div>
                        <span class="font-['Orbitron'] font-bold text-lg lg:text-xl text-white tracking-wider">APEX</span>
                        <span class="font-['Orbitron'] font-light text-xs lg:text-sm text-[#3b82f6] tracking-[0.2em] block -mt-1">CLOUD TECH</span>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center gap-0 xl:gap-1">
                    <a href="{{ route('home') }}" class="nav-link px-2 xl:px-4 py-2 rounded-lg text-xs xl:text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 @if(request()->routeIs('home')) text-[#facc15] bg-white/5 @endif">Home</a>
                    <a href="{{ route('about') }}" class="nav-link px-2 xl:px-4 py-2 rounded-lg text-xs xl:text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 @if(request()->routeIs('about')) text-[#facc15] bg-white/5 @endif">About</a>
                    <a href="{{ route('services') }}" class="nav-link px-2 xl:px-4 py-2 rounded-lg text-xs xl:text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 @if(request()->routeIs('services')) text-[#facc15] bg-white/5 @endif">Services</a>
                    <a href="{{ route('portfolio') }}" class="nav-link px-2 xl:px-4 py-2 rounded-lg text-xs xl:text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 @if(request()->routeIs('portfolio')) text-[#facc15] bg-white/5 @endif">Portfolio</a>
                    <a href="{{ route('blogs') }}" class="nav-link px-2 xl:px-4 py-2 rounded-lg text-xs xl:text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 @if(request()->routeIs('blogs') || request()->routeIs('blog.show')) text-[#facc15] bg-white/5 @endif">Blog</a>
                    <a href="{{ route('contact') }}" class="nav-link px-2 xl:px-4 py-2 rounded-lg text-xs xl:text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 @if(request()->routeIs('contact')) text-[#facc15] bg-white/5 @endif">Contact</a>
                </nav>

                <!-- Auth Links Desktop -->
                <div class="hidden md:flex items-center gap-2 xl:gap-3">
                    @auth
                        @role('admin')
                            <a href="{{ route('admin.blogs.index') }}" class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-gradient-to-r from-[#facc15] to-[#eab308] text-black hover:shadow-lg hover:shadow-[#facc15]/25 transition-all duration-300 font-['Rajdhani'] tracking-wider">
                                <i class="fas fa-crown mr-2"></i>Admin Panel
                            </a>
                        @endrole
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="px-5 py-2.5 rounded-lg text-sm font-medium border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all duration-300">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-lg text-sm font-medium border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all duration-300">Login</a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden relative w-10 h-10 flex items-center justify-center rounded-lg border border-white/20 text-white hover:border-white/40 transition-all">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-[#0a0a14]/95 backdrop-blur-xl border-b border-white/10">
            <div class="px-4 py-4 space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg text-sm font-medium @if(request()->routeIs('home')) text-[#facc15] bg-white/5 @else text-gray-300 @endif hover:bg-white/5 transition-all">Home</a>
                <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-sm font-medium @if(request()->routeIs('about')) text-[#facc15] bg-white/5 @else text-gray-300 @endif hover:bg-white/5 transition-all">About</a>
                <a href="{{ route('services') }}" class="block px-4 py-3 rounded-lg text-sm font-medium @if(request()->routeIs('services')) text-[#facc15] bg-white/5 @else text-gray-300 @endif hover:bg-white/5 transition-all">Services</a>
                <a href="{{ route('portfolio') }}" class="block px-4 py-3 rounded-lg text-sm font-medium @if(request()->routeIs('portfolio')) text-[#facc15] bg-white/5 @else text-gray-300 @endif hover:bg-white/5 transition-all">Portfolio</a>
                <a href="{{ route('blogs') }}" class="block px-4 py-3 rounded-lg text-sm font-medium @if(request()->routeIs('blogs')) text-[#facc15] bg-white/5 @else text-gray-300 @endif hover:bg-white/5 transition-all">Blog</a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-lg text-sm font-medium @if(request()->routeIs('contact')) text-[#facc15] bg-white/5 @else text-gray-300 @endif hover:bg-white/5 transition-all">Contact</a>
                <div class="border-t border-white/10 pt-3 mt-3">
                    @auth
                        @role('admin')
                            <a href="{{ route('admin.blogs.index') }}" class="block w-full px-5 py-3 rounded-lg text-sm font-semibold bg-gradient-to-r from-[#facc15] to-[#eab308] text-black text-center mb-2">
                                <i class="fas fa-crown mr-2"></i>Admin Panel
                            </a>
                        @endrole
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full px-5 py-3 rounded-lg text-sm font-medium border border-white/20 text-gray-300 hover:text-white text-center">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="block w-full px-5 py-3 rounded-lg text-sm font-medium border border-white/20 text-gray-300 hover:text-white text-center">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Spacer for fixed header -->
    <div class="h-16 lg:h-20"></div>

    <!-- Main Content -->
    <main class="relative z-10">
        @hasSection('content')
            @yield('content')
        @else
            {{ $slot ?? '' }}
        @endif
    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-[#060610] border-t border-white/10">
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(59,130,246,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(59,130,246,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/apexcloud.PNG') }}" alt="Apex Cloud Tech logo" class="w-10 h-10 object-contain">
                        <div>
                            <span class="font-['Orbitron'] font-bold text-white tracking-wider">APEX</span>
                            <span class="font-['Orbitron'] font-light text-xs text-[#3b82f6] tracking-[0.2em] block -mt-1">CLOUD TECH</span>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">Building the future of business technology. We craft powerful websites, apps, and digital solutions that drive real results.</p>
                    <ul class="space-y-2.5 mt-5 text-sm text-gray-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-location-dot text-[#facc15] mt-0.5"></i>
                            <span>2 Agunbiade Street, Ologolo Road, Lekki, Lagos, Nigeria</span>
                        </li>
                        <li>
                            <a href="mailto:hello@apexcloudtech.com" class="flex items-start gap-2 hover:text-[#3b82f6] transition-colors">
                                <i class="fas fa-envelope text-[#3b82f6] mt-1"></i>
                                <span>hello@apexcloudtech.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:support@apexcloudtech.com" class="flex items-start gap-2 hover:text-[#06b6d4] transition-colors">
                                <i class="fas fa-headset text-[#06b6d4] mt-1"></i>
                                <span>support@apexcloudtech.com</span>
                            </a>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-phone text-purple-400 mt-1"></i>
                            <span>
                                <a href="tel:+2348117297730" class="hover:text-[#facc15] transition-colors">+234 811 729 7730</a>
                                <span class="text-gray-600 mx-1">·</span>
                                <a href="tel:09022239628" class="hover:text-[#facc15] transition-colors">0902 223 9628</a>
                            </span>
                        </li>
                    </ul>
                    <div class="flex gap-3 mt-5">
                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#3b82f6] hover:border-[#3b82f6]/50 transition-all"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#06b6d4] hover:border-[#06b6d4]/50 transition-all"><i class="fab fa-github"></i></a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center rounded-lg border border-white/10 text-gray-400 hover:text-[#facc15] hover:border-[#facc15]/50 transition-all"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-['Orbitron'] text-sm font-semibold text-white tracking-wider mb-5">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-[#facc15] transition-colors duration-300 text-sm">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-[#facc15] transition-colors duration-300 text-sm">About</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-[#facc15] transition-colors duration-300 text-sm">Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-[#facc15] transition-colors duration-300 text-sm">Portfolio</a></li>
                        <li><a href="{{ route('blogs') }}" class="text-gray-400 hover:text-[#facc15] transition-colors duration-300 text-sm">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-[#facc15] transition-colors duration-300 text-sm">Contact</a></li>
                    </ul>
                </div>

                <!-- Our Businesses -->
                <div>
                    <h4 class="font-['Orbitron'] text-sm font-semibold text-white tracking-wider mb-5">Our Businesses</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://clickintel.com" target="_blank" class="flex items-center gap-2 text-gray-400 hover:text-[#3b82f6] transition-colors duration-300 group">
                                <span class="w-2 h-2 bg-[#3b82f6] rounded-full group-hover:shadow-lg group-hover:shadow-[#3b82f6]/50 transition-all"></span>
                                <span class="text-sm">ClickIntel.com</span>
                                <i class="fas fa-arrow-up-right-from-square text-xs opacity-0 group-hover:opacity-100 transition-all"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://healthintel.com" target="_blank" class="flex items-center gap-2 text-gray-400 hover:text-[#06b6d4] transition-colors duration-300 group">
                                <span class="w-2 h-2 bg-[#06b6d4] rounded-full group-hover:shadow-lg group-hover:shadow-[#06b6d4]/50 transition-all"></span>
                                <span class="text-sm">HealthIntel.com</span>
                                <i class="fas fa-arrow-up-right-from-square text-xs opacity-0 group-hover:opacity-100 transition-all"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://olilearn.com" target="_blank" class="flex items-center gap-2 text-gray-400 hover:text-[#facc15] transition-colors duration-300 group">
                                <span class="w-2 h-2 bg-[#facc15] rounded-full group-hover:shadow-lg group-hover:shadow-[#facc15]/50 transition-all"></span>
                                <span class="text-sm">OliLearn.com</span>
                                <i class="fas fa-arrow-up-right-from-square text-xs opacity-0 group-hover:opacity-100 transition-all"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="font-['Orbitron'] text-sm font-semibold text-white tracking-wider mb-5">Stay Updated</h4>
                    <p class="text-gray-400 text-sm mb-4">Get the latest tech insights and updates delivered to your inbox.</p>
                    <form class="flex gap-2">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2.5 bg-white/5 border border-white/10 rounded-lg text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#3b82f6]/50 focus:bg-white/10 transition-all">
                        <button type="submit" class="px-4 py-2.5 bg-gradient-to-r from-[#3b82f6] to-[#2563eb] rounded-lg text-white text-sm font-semibold hover:shadow-lg hover:shadow-[#3b82f6]/25 transition-all">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-white/5 mt-12 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Apex Cloud Tech. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('privacy-policy') }}" class="text-gray-500 hover:text-gray-300 text-sm transition-colors">Privacy Policy</a>
                    <a href="{{ route('terms-of-service') }}" class="text-gray-500 hover:text-gray-300 text-sm transition-colors">Terms of Service</a>
                    <a href="{{ route('refund-policy') }}" class="text-gray-500 hover:text-gray-300 text-sm transition-colors">Refund Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top -->
    <button id="scrollTopBtn" class="fixed bottom-6 right-6 z-50 w-11 h-11 flex items-center justify-center rounded-full bg-gradient-to-br from-[#facc15] to-[#eab308] text-black shadow-lg shadow-[#facc15]/25 hover:shadow-xl hover:shadow-[#facc15]/40 transition-all duration-300 opacity-0 translate-y-4 pointer-events-none">
        <i class="fas fa-arrow-up"></i>
    </button>

    @stack('scripts')
    <script>
        document.getElementById('mobileMenuBtn')?.addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
        window.addEventListener('scroll', () => {
            const header = document.getElementById('mainHeader');
            const scrollTop = document.getElementById('scrollTopBtn');
            const currentScroll = window.pageYOffset;
            if (currentScroll > 100) {
                header.style.background = 'rgba(10,10,20,0.95)';
                header.style.backdropFilter = 'blur(20px)';
                scrollTop?.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                scrollTop?.classList.add('opacity-100', 'translate-y-0');
            } else {
                header.style.background = 'rgba(10,10,20,0.8)';
                header.style.backdropFilter = 'blur(12px)';
                scrollTop?.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                scrollTop?.classList.remove('opacity-100', 'translate-y-0');
            }
        });
        document.getElementById('scrollTopBtn')?.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-visible');
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
    </script>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/2348117297730" target="_blank" rel="noopener" class="fixed bottom-6 left-4 sm:left-6 z-50 flex items-center gap-3 group" title="Chat with us on WhatsApp">
        <!-- Button circle -->
        <span class="w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg shadow-[#25D366]/30 hover:shadow-xl hover:shadow-[#25D366]/50 hover:scale-110 transition-all duration-300 pulse-whatsapp">
            <i class="fab fa-whatsapp text-xl sm:text-2xl"></i>
        </span>
        <!-- Text label - hidden on mobile, visible on hover/tablet+ -->
        <span class="hidden sm:inline-flex items-center px-4 py-2.5 bg-[#1a1a2e] border border-white/10 text-white text-xs sm:text-sm rounded-xl whitespace-nowrap shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <i class="fab fa-whatsapp text-[#25D366] mr-1.5 text-xs sm:text-sm"></i>Chat with us!
        </span>
        <!-- Mobile: smaller text label below the button, always visible -->
        <span class="sm:hidden text-[10px] text-white/80 leading-tight max-w-[60px] text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Chat with us!
        </span>
    </a>

    <style>
        @keyframes pulseWhatsApp {
            0%, 100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5); }
            50% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
        }
        .pulse-whatsapp {
            animation: pulseWhatsApp 2s ease-in-out infinite;
        }
    </style>
</body>
</html>