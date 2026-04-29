<section class="bg-deep-black py-24 md:py-32 px-4">
    <div class="container mx-auto max-w-7xl">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-4">Ebook Gratuito</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-8 tracking-tight font-outfit">Arquitetando o Amanhã</h3>
                <p class="text-gray-400 mb-10 text-lg leading-relaxed font-light">
                    Um guia completo para quem busca elevar o nível do seu código e entender as bases de sistemas escaláveis.
                </p>
                <a href="{{ route('ebook') }}" class="btn-premium">Baixar Gratuitamente</a>
            </div>
            <div class="reveal-right flex justify-center">
                <div class="glass-card p-4 rotate-3 hover:rotate-0 transition-transform duration-500">
                    <img src="{{ asset('img/book-cover.png') }}" alt="Ebook Cover" class="w-64 md:w-80 h-auto rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>
