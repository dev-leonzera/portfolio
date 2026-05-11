<x-layout>
    <x-slot name="title">{{ $post->t('title') }} - DevLeonzera</x-slot>
    <x-slot name="description">{{ $post->t('excerpt') ?: Str::limit(strip_tags($post->t('content')), 160) }}</x-slot>

    @push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />
    <style>
        .post-content h2 { font-size: 2.25rem; font-weight: 700; color: white; margin-top: 3.5rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; letter-spacing: -0.02em; }
        .post-content h3 { font-size: 1.75rem; font-weight: 600; color: white; margin-top: 2.5rem; margin-bottom: 1.25rem; font-family: 'Outfit', sans-serif; }
        .post-content p { margin-bottom: 1.75rem; color: #D1D5DB; }
        .post-content ul, .post-content ol { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1.75rem; color: #D1D5DB; }
        .post-content ol { list-style-type: decimal; }
        .post-content li { margin-bottom: 0.75rem; }
        .post-content strong { color: white; font-weight: 600; }
        .post-content a { color: #FBBF24; text-decoration: underline; text-underline-offset: 4px; transition: all 0.3s; }
        .post-content a:hover { color: white; opacity: 1; }
        .post-content blockquote { border-left: 4px solid #FBBF24; padding: 1.5rem 2rem; font-style: italic; color: #9CA3AF; background: rgba(251, 191, 36, 0.03); border-radius: 0 1rem 1rem 0; margin: 2.5rem 0; font-size: 1.25rem; }
        .post-content img { border-radius: 1.5rem; margin: 3rem 0; width: 100%; height: auto; box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        .post-content pre { border-radius: 1rem !important; margin: 2rem 0 !important; background: #0F0F0F !important; border: 1px solid rgba(255,255,255,0.05) !important; padding: 1.5rem !important; }
        .post-content code { font-family: 'Fira Code', monospace; font-size: 0.9em; }
        
        #progress-bar { position: fixed; top: 0; left: 0; width: 0%; height: 4px; background: linear-gradient(to right, #FBBF24, #F59E0B); z-index: 100; transition: width 0.1s ease-out; }
    </style>
    @endpush
    
    @include('sections.header')

    <div id="progress-bar"></div>

    <main class="pt-32 pb-24 px-4 bg-deep-black min-h-screen">
        <div class="container mx-auto max-w-4xl">
            <div class="reveal mb-12">
                <a href="{{ route('home') }}#blog" class="inline-flex items-center text-gold-accent text-xs font-bold uppercase tracking-widest hover:text-white transition-colors mb-12 group">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    {{ __('messages.blog.back') }}
                </a>
                
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-gold-accent text-xs font-bold uppercase tracking-[0.3em]">
                        {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M, Y') }}
                    </span>
                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                    <span class="text-gray-500 text-xs font-bold uppercase tracking-[0.2em]">
                        {{ __('messages.blog.reading_time', ['time' => $post->reading_time]) }}
                    </span>
                    @if($post->category)
                        <span class="bg-gold-accent/10 text-gold-accent text-[10px] px-3 py-1 rounded-full font-bold uppercase tracking-widest ml-auto">
                            {{ $post->category->t('name') }}
                        </span>
                    @endif
                </div>

                <h1 class="text-4xl md:text-6xl font-bold text-white font-outfit leading-tight mb-8 tracking-tight">{{ $post->t('title') }}</h1>
            </div>

            @if($post->image)
                <div class="reveal mb-16 rounded-3xl overflow-hidden glass-card p-2">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->t('title') }}" class="w-full h-auto rounded-2xl shadow-2xl">
                </div>
            @endif

            <div class="reveal max-w-none">
                <div class="leading-relaxed text-lg font-light post-content">
                    {!! $post->t('content') !!}
                </div>
            </div>
            
            <div class="reveal mt-20 pt-10 border-t border-white/5">
                <div class="glass-card p-8 md:p-12 text-center relative overflow-hidden group">
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-gold-accent/5 rounded-full blur-3xl group-hover:bg-gold-accent/10 transition-colors duration-700"></div>
                    <div class="relative z-10">
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
        </div>
    </main>

    @include('sections.footer')

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup.min.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('progress-bar').style.width = scrolled + '%';
        });
    </script>
    @endpush
</x-layout>
