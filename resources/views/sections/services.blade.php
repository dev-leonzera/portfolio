<section id="services" class="bg-rich-black py-24 md:py-32 px-4 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-gold-accent rounded-full blur-[120px]"></div>
    </div>

    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="reveal text-center mb-16 md:mb-24">
            <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">{{ __('messages.services.title') }}</h2>
            <p class="text-4xl md:text-5xl font-bold text-white font-outfit">{{ __('messages.services.subtitle') }}</p>
            <div class="w-12 h-1 bg-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.fullstack.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.fullstack.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.pwa.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.pwa.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.consulting.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.consulting.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.data.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.data.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.security.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.security.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.solutions.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.solutions.description') }}
                </p>
            </div>
        </div>
    </div>
</section>
