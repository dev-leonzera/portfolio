<header x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 glass">
     <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex justify-between items-center">
            <div class="text-2xl tracking-tighter">
                <a href="#" class="text-white font-light group">Dev<span class="font-black text-white group-hover:text-gold-accent transition-colors duration-300">Leonzera</span><span class="text-gold-accent">.</span></a>
            </div>

            <nav class="hidden md:flex items-center space-x-8 text-[10px] font-bold uppercase tracking-widest text-gray-400">
                <a href="#" class="text-white transition duration-300">Início</a>
                <a href="#about" class="hover:text-gold-accent transition duration-300">Sobre</a>
                <a href="#services" class="hover:text-gold-accent transition duration-300">Serviços</a>
                <a href="#projects" class="hover:text-gold-accent transition duration-300">Projetos</a>
                <a href="#resume" class="hover:text-gold-accent transition duration-300">Experiência</a>
                <a href="#blog" class="hover:text-gold-accent transition duration-300">Blog</a>
                <a href="#contact" class="hover:text-gold-accent transition duration-300">Contato</a>
            </nav>                    

            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 focus:outline-none hover:text-gold-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200" 
             x-transition:enter-start="opacity-0 -translate-y-2" 
             x-transition:enter-end="opacity-100 translate-y-0" 
             class="md:hidden mt-4 py-6 space-y-4 glass-card border-none text-center">
            <a href="#" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gold-accent">Início</a>
            <a href="#about" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gray-300">Sobre</a>
            <a href="#services" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gray-300">Serviços</a>
            <a href="#projects" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gray-300">Projetos</a>
            <a href="#resume" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gray-300">Experiência</a>
            <a href="#blog" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gray-300">Blog</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block text-xs font-bold uppercase tracking-widest text-gray-300 text-gold-accent">Contato</a>
        </div>
    </div>
</header>
