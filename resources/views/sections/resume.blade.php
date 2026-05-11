<section id="resume" class="bg-deep-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="reveal text-center mb-16 md:mb-24">
            <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">{{ __('messages.resume.title') }}</h2>
            <p class="text-4xl md:text-5xl font-bold text-white font-outfit">{{ __('messages.resume.subtitle') }}</p>
            <div class="w-12 h-1 bg-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Education -->
            <div class="reveal-left">
                <h3 class="text-2xl font-bold text-white mb-10 flex items-center">
                    <span class="w-8 h-8 bg-gold-accent/20 rounded-lg flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/></svg>
                    </span>
                    {{ __('messages.resume.education_title') }}
                </h3>
                <div class="space-y-8 border-l border-white/10 ml-4 pl-8">
                    @forelse ($educations as $education)
                        <div class="relative">
                            <div class="absolute -left-[41px] top-2 w-4 h-4 rounded-full bg-deep-black border-2 border-gold-accent"></div>
                            <div class="glass-card p-6">
                                <span class="text-gold-accent text-[10px] font-bold uppercase tracking-widest block mb-2">
                                    {{ $education->year_start }} {{ $education->year_end ? '- ' . $education->year_end : '' }}
                                </span>
                                <h4 class="text-xl font-bold text-white mb-2">{{ $education->t('degree') }}</h4>
                                <p class="text-gray-400 font-medium text-sm mb-4">{{ $education->university }}</p>
                                @if($education->description)
                                    <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $education->t('description') }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 italic">{{ __('messages.resume.empty') }}</p>
                    @endforelse
                </div>
            </div>

            <!-- Professional -->
            <div class="reveal-right">
                <h3 class="text-2xl font-bold text-white mb-10 flex items-center">
                    <span class="w-8 h-8 bg-gold-accent/20 rounded-lg flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </span>
                    {{ __('messages.resume.experience_title') }}
                </h3>
                <div class="space-y-8 border-l border-white/10 ml-4 pl-8">
                    @forelse ($experiences as $experience)
                        <div class="relative">
                            <div class="absolute -left-[41px] top-2 w-4 h-4 rounded-full bg-deep-black border-2 border-gold-accent"></div>
                            <div class="glass-card p-6">
                                <span class="text-gold-accent text-[10px] font-bold uppercase tracking-widest block mb-2">
                                    {{ \Carbon\Carbon::createFromDate($experience->year_start, $experience->start_month, 1)->translatedFormat('M/Y') }} - {{ $experience->year_end ? \Carbon\Carbon::createFromDate($experience->year_end, $experience->end_month, 1)->translatedFormat('M/Y') : __('messages.resume.current') }}
                                </span>
                                <h4 class="text-xl font-bold text-white mb-2">{{ $experience->t('position') }}</h4>
                                <p class="text-gray-400 font-medium text-sm mb-4">{{ $experience->company }}</p>
                                @if($experience->description)
                                    <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $experience->t('description') }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 italic">{{ __('messages.resume.empty') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
