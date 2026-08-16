<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Apex Cloud Tech - Login or create an account to access our business technology platform.">
        <meta name="keywords" content="Apex Cloud Tech, login, register, web development, SaaS">
        <meta name="author" content="Apex Cloud Tech">
        <meta name="robots" content="noindex, follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Apex Cloud Tech — Account">
        <meta property="og:description" content="Access your Apex Cloud Tech account.">
        <meta property="og:image" content="{{ asset('images/og-default.svg') }}">
        <meta property="og:site_name" content="Apex Cloud Tech">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Apex Cloud Tech — Account">
        <meta name="twitter:description" content="Access your Apex Cloud Tech account.">
        <meta name="twitter:image" content="{{ asset('images/og-default.svg') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Account') | Apex Cloud Tech</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        @if(file_exists(public_path('build/manifest.json')))
            <link rel="stylesheet" href="{{ asset('build/assets/app-0x7bX3ll.css') }}">
            <script src="{{ asset('build/assets/app-CcEFHwyy.js') }}" defer></script>
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="font-['Inter'] text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/apexcloud.PNG') }}" alt="Apex Cloud Tech logo" class="w-12 h-12 object-contain">
                    <div>
                        <span class="font-['Orbitron'] font-bold text-xl text-gray-800 dark:text-white tracking-wider">APEX</span>
                        <span class="font-['Orbitron'] font-light text-xs text-[#3b82f6] tracking-[0.2em] block -mt-1">CLOUD TECH</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>