<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') | Apex Cloud Tech Admin</title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @endif
    <style>
        body { background: #0a0a14; color: #fff; font-family: 'Inter', sans-serif; }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Admin Header -->
    <header class="bg-[#0a0a14]/95 backdrop-blur-xl border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-6">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <img src="{{ asset('images/apexcloud.PNG') }}" alt="Apex Cloud Tech logo" class="w-8 h-8 object-contain">
                        <span class="font-['Orbitron'] font-bold text-white text-sm tracking-wider">ADMIN</span>
                    </a>
                    <nav class="flex items-center gap-1">
                        <a href="{{ route('admin.blogs.index') }}" class="px-4 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('admin.blogs.*') ? 'text-[#facc15] bg-white/5' : 'text-gray-400 hover:text-white' }} transition-all">Blogs</a>
                        <a href="{{ route('admin.portfolio.index') }}" class="px-4 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('admin.portfolio.*') ? 'text-[#facc15] bg-white/5' : 'text-gray-400 hover:text-white' }} transition-all">Portfolio</a>
                    </nav>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-gray-400 text-sm">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="px-4 py-2 rounded-lg text-sm border border-white/20 text-gray-300 hover:text-white hover:border-white/40 transition-all">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/30 text-green-400 px-5 py-3 rounded-xl mb-6 text-sm flex items-center gap-2">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>
    @stack('scripts')
</body>
</html>