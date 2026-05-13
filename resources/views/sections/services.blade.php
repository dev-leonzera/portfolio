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
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.custom.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.custom.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.modernization.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.modernization.description') }}
                </p>
            </div>

            <div class="glass-card p-8 group">
                <div class="text-gold-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('messages.services.list.leadership.title') }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed font-light">
                    {{ __('messages.services.list.leadership.description') }}
                </p>
            </div>
        </div>
    </div>
</section>
