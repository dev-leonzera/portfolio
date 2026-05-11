<section id="skills" class="bg-rich-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="reveal text-center mb-16 md:mb-24">
            <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">{{ __('messages.skills.title') }}</h2>
            <p class="text-4xl md:text-5xl font-bold text-white font-outfit">{{ __('messages.skills.subtitle') }}</p>
            <div class="w-12 h-1 bg-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="flex flex-col space-y-16">
            <div class="reveal-left max-w-3xl">
                <h3 class="text-3xl font-bold text-white mb-6 font-outfit">{{ __('messages.skills.intro_title') }}</h3>
                <p class="text-gray-400 text-lg leading-relaxed font-light mb-8">                           
                    {!! __('messages.skills.intro_description') !!}
                </p>
                <div class="flex items-center p-4 glass-card inline-flex">
                    <div class="w-10 h-10 bg-gold-accent/10 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-xs text-gray-300">{{ __('messages.skills.focus_text') }}</p>
                </div>
            </div>

            <div class="reveal-right">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                    @forelse ($skills->groupBy('category') as $category => $items)
                        <div>
                            <h4 class="text-xs font-black uppercase tracking-[0.3em] text-gold-accent mb-8 flex items-center">
                                {{ __('messages.skills.categories.' . $category) ?? $category }}
                                <span class="h-[1px] bg-white/10 flex-grow ml-4"></span>
                            </h4>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                @foreach ($items as $skill)
                                    <div class="glass-card p-3 flex flex-col items-center justify-center space-y-3 group hover:bg-gold-accent transition-all duration-500 hover:-translate-y-1 border border-white/5 hover:border-gold-accent/50">
                                        @if($skill->icon)
                                            @php
                                                $iconUrl = str_starts_with($skill->icon, 'http') 
                                                    ? $skill->icon 
                                                    : "https://cdn.simpleicons.org/{$skill->icon}/white";
                                            @endphp
                                            <div class="w-8 h-8 flex items-center justify-center bg-white/5 rounded-lg group-hover:bg-deep-black/10 transition-colors duration-300">
                                                <img src="{{ $iconUrl }}" class="w-5 h-5 object-contain group-hover:brightness-0 transition-all duration-300" alt="{{ $skill->t('name') }}">
                                            </div>
                                        @endif
                                        <span class="text-[11px] font-bold tracking-widest uppercase text-gray-400 group-hover:text-deep-black transition-colors text-center">{{ $skill->t('name') }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-sm italic">{{ __('messages.skills.loading') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
