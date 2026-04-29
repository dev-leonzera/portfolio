<section id="blog" class="bg-rich-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="reveal text-center mb-16 md:mb-24">
            <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">Blog</h2>
            <p class="text-4xl md:text-5xl font-bold text-white font-outfit">Últimos Insights</p>
            <div class="w-12 h-1 bg-gold-accent mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @forelse ($posts as $post)
                <article class="glass-card overflow-hidden group">
                    @if($post->image)
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                    @endif
                    <div class="p-8">
                        <span class="text-gold-accent text-[10px] font-bold uppercase tracking-widest block mb-4">
                            {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M, Y') : 'Em breve' }}
                        </span>
                        <h3 class="text-xl font-bold text-white mb-4 group-hover:text-gold-accent transition-colors leading-tight font-outfit">{{ $post->title }}</h3>
                        <p class="text-gray-500 text-sm mb-8 leading-relaxed line-clamp-2 font-light">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                        <a href="#" class="text-white text-[10px] font-bold uppercase tracking-[0.2em] flex items-center group/link">
                            Ler Mais
                            <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-2 transition-transform text-gold-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-20 glass-card">
                    <p class="text-gray-500 italic">Novos artigos em breve.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
