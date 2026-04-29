<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-inter antialiased bg-deep-black text-white selection:bg-gold-accent selection:text-deep-black">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
                <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-gold-accent/5 blur-[120px] rounded-full"></div>
                <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-gold-accent/5 blur-[120px] rounded-full"></div>
            </div>

            <div class="z-10 mb-8">
                <a href="/" class="text-3xl font-bold text-white uppercase tracking-tighter">
                    Admin<span class="text-gold-accent">.</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md z-10">
                <div class="glass-card p-10 border-white/10 shadow-2xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
