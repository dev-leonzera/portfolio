<section id="about" class="bg-deep-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="grid md:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="reveal-left">
                <div class="relative inline-block">
                    <div class="absolute -inset-4 bg-gold-accent/20 rounded-2xl blur-2xl opacity-0 group-hover:opacity-100 transition duration-700"></div>
                    <img src="{{ asset('img/about.jpg') }}" alt="DevLeonzera" class="relative rounded-2xl shadow-2xl w-full max-w-md grayscale hover:grayscale-0 transition-all duration-700">
                </div>
            </div>

            <div class="reveal-right">
                <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-6">{{ __('messages.about.title') }}</h2>
                <h3 class="text-3xl md:text-5xl font-bold text-white mb-8 tracking-tight font-outfit">{!! __('messages.about.subtitle') !!}</h3>
                <p class="text-gray-400 text-lg leading-relaxed font-light mb-10">
                    {!! __('messages.about.description') !!}
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-12">
                    <div class="glass-card p-6">
                        <p class="text-gold-accent text-[10px] font-bold uppercase tracking-widest mb-2">{{ __('messages.about.seniority_label') }}</p>
                        <p class="text-white font-medium">{{ __('messages.about.seniority_value') }}</p>
                    </div>
                    <div class="glass-card p-6">
                        <p class="text-gold-accent text-[10px] font-bold uppercase tracking-widest mb-2">{{ __('messages.about.location_label') }}</p>
                        <p class="text-white font-medium">{{ __('messages.about.location_value') }}</p>
                    </div>
                </div>

                <a href="{{ asset('pdf/curriculo.pdf') }}" download="Curriculo_Leonardo_Andrade.pdf" class="btn-outline-premium gap-2 group">
                    <svg class="w-5 h-5 text-gold-accent transition-transform duration-300 group-hover:translate-y-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    <span>{{ __('messages.about.cv_button') }}</span>
                </a>
            </div>
        </div>
    </div>
</section>
