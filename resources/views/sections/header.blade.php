<header x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 glass">
     <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex justify-between items-center">
            <div class="text-2xl tracking-tighter">
                <a href="{{ route('home') }}" class="text-white font-light group">Dev<span class="font-black text-white group-hover:text-gold-accent transition-colors duration-300">Leonzera</span><span class="text-gold-accent">.</span></a>
            </div>

            <nav class="hidden md:flex items-center space-x-8 text-xs font-bold uppercase tracking-widest text-gray-400">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white' : 'hover:text-gold-accent' }} transition duration-300">{{ __('messages.nav.home') }}</a>
                <a href="{{ route('home') }}#about" class="hover:text-gold-accent transition duration-300">{{ __('messages.nav.about') }}</a>
                <a href="{{ route('home') }}#services" class="hover:text-gold-accent transition duration-300">{{ __('messages.nav.services') }}</a>
                <a href="{{ route('home') }}#projects" class="hover:text-gold-accent transition duration-300">{{ __('messages.nav.projects') }}</a>
                <a href="{{ route('home') }}#resume" class="hover:text-gold-accent transition duration-300">{{ __('messages.nav.experience') }}</a>
                <a href="{{ route('home') }}#blog" class="hover:text-gold-accent transition duration-300">{{ __('messages.nav.blog') }}</a>
                <a href="{{ route('home') }}#contact" class="hover:text-gold-accent transition duration-300">{{ __('messages.nav.contact') }}</a>
                
                <div class="flex items-center space-x-2 border-l border-gray-700 pl-6 ml-6">
                    <a href="{{ route('lang.switch', 'pt') }}" class="{{ app()->getLocale() == 'pt' ? 'text-gold-accent' : 'text-gray-500 hover:text-white' }} transition-colors duration-300">PT</a>
                    <span class="text-gray-700">|</span>
                    <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'text-gold-accent' : 'text-gray-500 hover:text-white' }} transition-colors duration-300">EN</a>
                </div>
            </nav>                    

            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 focus:outline-none hover:text-gold-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200" 
             x-transition:enter-start="opacity-0 -translate-y-2" 
             x-transition:enter-end="opacity-100 translate-y-0" 
             class="md:hidden mt-4 py-6 space-y-4 glass-card border-none text-center">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest {{ request()->routeIs('home') ? 'text-gold-accent' : 'text-gray-300' }}">{{ __('messages.nav.home') }}</a>
            <a href="{{ route('home') }}#about" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest text-gray-300 hover:text-gold-accent">{{ __('messages.nav.about') }}</a>
            <a href="{{ route('home') }}#services" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest text-gray-300 hover:text-gold-accent">{{ __('messages.nav.services') }}</a>
            <a href="{{ route('home') }}#projects" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest text-gray-300 hover:text-gold-accent">{{ __('messages.nav.projects') }}</a>
            <a href="{{ route('home') }}#resume" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest text-gray-300 hover:text-gold-accent">{{ __('messages.nav.experience') }}</a>
            <a href="{{ route('home') }}#blog" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest text-gray-300 hover:text-gold-accent">{{ __('messages.nav.blog') }}</a>
            <a href="{{ route('home') }}#contact" @click="mobileMenuOpen = false" class="block text-sm font-bold uppercase tracking-widest text-gray-300 hover:text-gold-accent">{{ __('messages.nav.contact') }}</a>
            
            <div class="flex justify-center space-x-4 pt-4 border-t border-gray-800">
                <a href="{{ route('lang.switch', 'pt') }}" class="{{ app()->getLocale() == 'pt' ? 'text-gold-accent' : 'text-gray-500' }} font-bold text-xs uppercase">Português</a>
                <span class="text-gray-800">|</span>
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'text-gold-accent' : 'text-gray-500' }} font-bold text-xs uppercase">English</a>
            </div>
        </div>
    </div>
</header>
