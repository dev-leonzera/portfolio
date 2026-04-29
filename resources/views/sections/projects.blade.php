<section id="projects" class="bg-deep-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="reveal text-center mb-16 md:mb-24">
            <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">Projetos</h2>
            <p class="text-4xl md:text-5xl font-bold text-white font-outfit">Trabalhos em Destaque</p>
            <div class="w-12 h-1 bg-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($projects as $project)
                <div class="glass-card overflow-hidden group">
                    <div class="relative overflow-hidden aspect-video">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        @else
                            <div class="w-full h-full bg-rich-black flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-deep-black via-transparent to-transparent opacity-60"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-gold-accent transition-colors">{{ $project->title }}</h3>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed line-clamp-3 font-light">{{ $project->description }}</p>
                        
                        <div class="flex flex-wrap gap-2 mb-8">
                            @if($project->technologies)
                                @foreach(is_array($project->technologies) ? $project->technologies : explode(',', $project->technologies) as $tech)
                                    <span class="text-[10px] uppercase tracking-widest font-bold px-3 py-1 bg-white/5 text-gray-300 rounded-full border border-white/10">{{ trim($tech) }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="flex items-center space-x-6">
                            @if($project->project_link)
                                <a href="{{ $project->project_link }}" target="_blank" class="text-gold-accent hover:text-white transition-colors text-sm font-bold uppercase tracking-widest flex items-center">
                                    Live Demo
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            @endif
                            @if($project->github_link)
                                <a href="{{ $project->github_link }}" target="_blank" class="text-gray-500 hover:text-white transition-colors text-sm font-bold uppercase tracking-widest flex items-center">
                                    Code
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20 glass-card">
                    <p class="text-gray-500 italic">Novos projetos sendo documentados. Em breve aqui.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
