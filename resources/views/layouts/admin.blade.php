<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-inter antialiased bg-deep-black text-white selection:bg-gold-accent selection:text-deep-black">
        <div class="min-h-screen bg-deep-black">
            @include('layouts.admin-navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="glass border-b border-white/5 py-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold font-outfit text-white tracking-tight">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>