<x-layout>
    <x-slot name="title">{{ $post->t('title') }} - DevLeonzera</x-slot>
    <x-slot name="description">{{ $post->t('excerpt') }}</x-slot>
    
    @include('sections.header')

    <main class="pt-32 pb-24 px-4 bg-deep-black min-h-screen">
        <div class="container mx-auto max-w-4xl">
            <div class="reveal mb-12">
                <a href="{{ route('home') }}#blog" class="inline-flex items-center text-gold-accent text-xs font-bold uppercase tracking-widest hover:text-white transition-colors mb-8 group">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    {{ __('messages.blog.back') }}
                </a>
                
                <span class="text-gold-accent text-xs font-bold uppercase tracking-[0.3em] block mb-4">
                    {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M, Y') }}
                </span>
                <h1 class="text-4xl md:text-6xl font-bold text-white font-outfit leading-tight mb-8">{{ $post->t('title') }}</h1>
            </div>

            @if($post->image)
                <div class="reveal mb-16 rounded-2xl overflow-hidden glass-card p-2">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->t('title') }}" class="w-full h-auto rounded-xl">
                </div>
            @endif

            <div class="reveal max-w-none">
                <div class="text-gray-300 leading-relaxed text-lg space-y-6 font-light post-content">
                    {!! $post->t('content') !!}
                </div>
            </div>

            <style>
                .post-content h2 { font-size: 1.875rem; font-weight: 700; color: white; margin-top: 2.5rem; margin-bottom: 1.25rem; font-family: 'Outfit', sans-serif; }
                .post-content h3 { font-size: 1.5rem; font-weight: 600; color: white; margin-top: 2rem; margin-bottom: 1rem; font-family: 'Outfit', sans-serif; }
                .post-content p { margin-bottom: 1.5rem; }
                .post-content ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1.5rem; }
                .post-content li { margin-bottom: 0.5rem; }
                .post-content strong { color: white; font-weight: 600; }
                .post-content a { color: #FBBF24; text-decoration: underline; transition: opacity 0.3s; }
                .post-content a:hover { opacity: 0.8; }
                .post-content blockquote { border-left: 4px solid #FBBF24; padding-left: 1.5rem; font-style: italic; color: #9CA3AF; margin: 2rem 0; }
                .post-content img { border-radius: 1rem; margin: 2rem 0; }
            </style>
            
            <div class="reveal mt-20 pt-10 border-t border-white/5">
                <div class="glass-card p-8 md:p-12 text-center">
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit">{{ __('messages.blog.cta_title') }}</h3>
                    <p class="text-gray-400 mb-8 max-w-xl mx-auto">{{ __('messages.blog.cta_description') }}</p>
                    <div class="flex justify-center gap-6">
                        <a href="{{ route('home') }}#contact" class="bg-gold-accent text-black px-8 py-4 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-white hover:scale-105 transition-all duration-300">
                            {{ __('messages.hero.cta_talk') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('sections.footer')
</x-layout>
