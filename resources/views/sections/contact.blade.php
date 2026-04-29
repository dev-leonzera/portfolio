<section id="contact" class="bg-deep-black py-24 md:py-32 px-4 relative">
    <div class="container mx-auto max-w-7xl">
        <div class="grid md:grid-cols-2 gap-16 lg:gap-24 items-start">
            <div class="reveal-left">
                <h2 class="text-gold-accent text-sm font-semibold tracking-[0.2em] uppercase mb-6">Contato</h2>
                <h3 class="text-4xl md:text-6xl font-bold text-white mb-8 tracking-tight font-outfit">Vamos construir algo <span class="text-gradient">memorável</span>?</h3>
                <p class="text-gray-400 text-lg leading-relaxed font-light mb-12">
                    Se você busca um parceiro técnico que valoriza a qualidade e o impacto real do software, estou pronto para ajudar.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 glass flex items-center justify-center rounded-xl mr-6 text-gold-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">Email</p>
                            <p class="text-white font-medium">leonandrade22@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 glass flex items-center justify-center rounded-xl mr-6 text-gold-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">Telefone</p>
                            <p class="text-white font-medium">(84) 99666-7335</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal-right glass-card p-10">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">Nome</label>
                            <input type="text" name="name" required class="w-full bg-rich-black border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/50 transition duration-300" placeholder="Seu Nome">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">Email</label>
                            <input type="email" name="email" required class="w-full bg-rich-black border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/50 transition duration-300" placeholder="seu@email.com">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1">Mensagem</label>
                        <textarea name="message" rows="5" required class="w-full bg-rich-black border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/50 transition duration-300 resize-none" placeholder="Como posso ajudar?"></textarea>
                    </div>
                    <button type="submit" class="w-full btn-premium py-5">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>
