<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? __('messages.nav.title') }}</title>
        <meta name="description" content="{{ $description ?? __('messages.nav.meta_description') }}">
        <meta name="keywords" content="{{ __('messages.nav.keywords') }}">
        <meta name="author" content="Leonardo Andrade (DevLeonzera)">
        <meta name="robots" content="index, follow">

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

        <!-- Multilingual Support -->
        <link rel="alternate" hreflang="pt-br" href="{{ url('/lang/pt') }}">
        <link rel="alternate" hreflang="en" href="{{ url('/lang/en') }}">
        <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="DevLeonzera Portfolio">
        <meta property="og:title" content="{{ $title ?? __('messages.nav.title') }}">
        <meta property="og:description" content="{{ $description ?? __('messages.nav.meta_description') }}">
        <meta property="og:image" content="{{ asset('img/logo.png') }}">
        <meta property="og:locale" content="{{ app()->getLocale() == 'pt' ? 'pt_BR' : 'en_US' }}">
        <meta property="og:locale:alternate" content="{{ app()->getLocale() == 'pt' ? 'en_US' : 'pt_BR' }}">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $title ?? __('messages.nav.title') }}">
        <meta name="twitter:description" content="{{ $description ?? __('messages.nav.meta_description') }}">
        <meta name="twitter:image" content="{{ asset('img/logo.png') }}">
        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Alpine.js -->
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Animation Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                        }
                    });
                }, observerOptions);
                
                document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
                    observer.observe(el);
                });
                
                function animateCounter(element, target, duration = 2000) {
                    let start = 0;
                    const increment = target / (duration / 16);
                    
                    function updateCounter() {
                        start += increment;
                        if (start < target) {
                            element.textContent = Math.floor(start);
                            requestAnimationFrame(updateCounter);
                        } else {
                            element.textContent = target;
                        }
                    }
                    updateCounter();
                }
                
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const target = parseInt(counter.textContent);
                            animateCounter(counter, target);
                            counterObserver.unobserve(counter);
                        }
                    });
                }, { threshold: 0.5 });
                
                document.querySelectorAll('.counter').forEach(counter => {
                    counterObserver.observe(counter);
                });
            });
        </script>

        <!-- JSON-LD -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Person",
          "name": "Leonardo Andrade",
          "alternateName": "DevLeonzera",
          "url": "{{ url('/') }}",
          "image": "{{ asset('img/about.jpg') }}",
          "sameAs": [
            "https://github.com/dev-leonzera",
            "https://linkedin.com/in/leonandrade"
          ],
          "jobTitle": "Arquiteto de Software",
          "knowsAbout": ["PHP", "Laravel", "Vue.js", "MySQL", "DevOps"]
        }
        </script>

        {{ $head ?? '' }}
        @stack('styles')
    </head>
    <body class="antialiased bg-deep-black text-white font-inter">

        <div class="relative overflow-x-hidden">
            {{ $slot }}
        </div>
        
        @stack('scripts')
    </body>
</html>
