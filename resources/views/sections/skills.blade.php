<section id="skills" class="bg-rich-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="reveal text-center mb-16 md:mb-24">
            <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">Habilidades</h2>
            <p class="text-4xl md:text-5xl font-bold text-white font-outfit">Stack Tecnológica</p>
            <div class="w-12 h-1 bg-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <h3 class="text-3xl font-bold text-white mb-6 font-outfit">Expertise técnica para construir o futuro.</h3>
                <p class="text-gray-400 text-lg leading-relaxed font-light mb-10">                           
                    Tenho experiência sólida em back-end com <span class="text-white font-medium">PHP e Laravel</span>, domínio em front-end com <span class="text-white font-medium">Vue.js e Tailwind CSS</span>, além de uma base robusta em infraestrutura.
                </p>
                <div class="flex items-center p-6 glass-card">
                    <div class="w-12 h-12 bg-gold-accent/10 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-sm text-gray-300">Foco em unir código limpo com resultados reais de negócio.</p>
                </div>
            </div>

            <div class="reveal-right">
                <div class="space-y-10">
                    @forelse ($skills->groupBy('category') as $category => $items)
                        <div>
                            <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-gold-accent mb-6 flex items-center">
                                {{ $category }}
                                <span class="h-[1px] bg-white/10 flex-grow ml-4"></span>
                            </h4>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                @foreach ($items as $skill)
                                    <div class="glass-card p-3 text-center group hover:bg-gold-accent transition-all duration-300">
                                        <span class="text-[10px] font-bold tracking-widest uppercase text-gray-400 group-hover:text-deep-black transition-colors">{{ $skill->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-sm italic">Em carregamento...</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
