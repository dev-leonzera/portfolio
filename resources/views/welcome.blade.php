<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leonardo Andrade - Desenvolvedor de Software</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Embedded Styles (Minimal) -->
            <style>
            html {
                scroll-behavior: smooth; /* Smooth scrolling for anchor links */
            }
            body {
                background-color: #0D1117;
                color: #C9D1D9;
                font-family: 'Poppins', sans-serif; /* Apply Poppins font */
            }
            .hero-bg {
                /* Replace with your actual background image */
                background-image: linear-gradient(rgba(13, 17, 23, 0.7), rgba(13, 17, 23, 0.7)), url('https://via.placeholder.com/1920x800/161B22/C9D1D9?text=Mountain+Background'); /* Added overlay */
                background-size: cover;
                background-position: center;
            }
            /* Input focus style */
            input:focus, textarea:focus {
                --tw-ring-color: #FBBF24;
            }
             /* Custom scrollbar (optional, webkit only) */
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #161B22;
            }
            ::-webkit-scrollbar-thumb {
                background: #4b5563; /* gray-600 */
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #FBBF24; /* Amber accent */
            }
            </style>
        <!-- Alpine.js -->
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body class="antialiased">
        @php
            \Carbon\Carbon::setLocale('pt_BR');
        @endphp
        <div>
            <!-- Header -->
            <header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-[#0D1117] bg-opacity-90 backdrop-blur-sm shadow-md">
                 <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex justify-between items-center">
                        <!-- Logo -->
                        <div class="text-2xl font-bold text-amber-400">
                            <a href="#">Leonardo Andrade</a>
                        </div>

                        <!-- Navigation -->
                        <nav class="hidden md:flex items-center space-x-6 lg:space-x-8 text-sm uppercase tracking-wider">
                            <a href="#" class="text-amber-400 border-b-2 border-amber-400 pb-1">Início</a>
                            <a href="#about" class="pb-1 border-b-2 border-transparent hover:text-amber-400 hover:border-amber-400 transition duration-300">Sobre</a>
                            <a href="#services" class="pb-1 border-b-2 border-transparent hover:text-amber-400 hover:border-amber-400 transition duration-300">Serviços</a>
                            <a href="#resume" class="pb-1 border-b-2 border-transparent hover:text-amber-400 hover:border-amber-400 transition duration-300">Currículo</a>
                            <a href="#contact" class="pb-1 border-b-2 border-transparent hover:text-amber-400 hover:border-amber-400 transition duration-300">Contato</a>
                            <a href="{{ route('ebook') }}" class="pb-1 border-b-2 border-transparent hover:text-amber-400 hover:border-amber-400 transition duration-300">Ebook</a>
                            <a href="{{ route('mentoria.index') }}" class="pb-1 border-b-2 border-transparent hover:text-amber-400 hover:border-amber-400 transition duration-300">Mentoria</a>
                        </nav>                    

                        <!-- Mobile Menu Button -->
                        <div class="md:hidden">
                            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 focus:outline-none hover:text-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden mt-4 py-2 space-y-3">
                        <a href="#" class="block py-2.5 px-4 text-amber-400 hover:bg-[#161B22] rounded-lg transition duration-300">Início</a>
                        <a href="#about" class="block py-2.5 px-4 text-gray-300 hover:text-amber-400 hover:bg-[#161B22] rounded-lg transition duration-300">Sobre</a>
                        <a href="#services" class="block py-2.5 px-4 text-gray-300 hover:text-amber-400 hover:bg-[#161B22] rounded-lg transition duration-300">Serviços</a>
                        <a href="#resume" class="block py-2.5 px-4 text-gray-300 hover:text-amber-400 hover:bg-[#161B22] rounded-lg transition duration-300">Currículo</a>
                        <a href="#contact" class="block py-2.5 px-4 text-gray-300 hover:text-amber-400 hover:bg-[#161B22] rounded-lg transition duration-300">Contato</a>
                        <a href="{{ route('ebook') }}" class="block py-2.5 px-4 text-gray-300 hover:text-amber-400 hover:bg-[#161B22] rounded-lg transition duration-300">Ebook</a>
                    </div>
                </div>
            </header>

            <!-- Hero Section -->
            <section id="home" class="hero-bg min-h-screen flex flex-col justify-center items-center text-center px-4 sm:px-6 lg:px-8 pt-16">
                <img src="{{ asset('img/hero-image.png') }}" alt="Leonardo Andrade" class="w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full border-4 border-amber-400 mb-6 shadow-lg">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">Olá, eu sou Leonardo Andrade</h1>
                <p class="text-sm sm:text-base md:text-lg text-gray-300 mb-8 max-w-xl md:max-w-2xl px-4 sm:px-0">
                    Eu sou um desenvolvedor de software com visão sistêmica, foco em clareza de código e soluções pensadas para durar. Conecto propósito, estratégia e prática no que construo.
                </p>
                <div class="social-icons flex space-x-5">
                    <a href="https://github.com/dev-leonzera" target="_blank" aria-label="GitHub" class="text-gray-400 hover:text-amber-400 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"> <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/> </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/leonandrade" target="_blank" aria-label="LinkedIn" class="text-gray-400 hover:text-amber-400 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"> <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/> </svg>
                    </a>
                </div>
            </section>

            <!-- About Me Section -->
            <section id="about" class="bg-[#0D1117] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto max-w-7xl">
                    <div class="text-center mb-12 md:mb-16">
                        <h2 class="text-sm font-medium uppercase tracking-widest text-amber-400 mb-2">Sobre Mim</h2>
                        <p class="text-3xl md:text-4xl font-bold text-white">Conheça Mais Sobre Mim</p>
                        <div class="w-16 h-1 bg-amber-400 mx-auto mt-3"></div>
                    </div>

                    <div class="grid md:grid-cols-5 gap-10 lg:gap-16 items-center">
                        <div class="md:col-span-2 flex justify-center md:justify-start">
                            <img src="{{ asset('img/about-image.png') }}" alt="Leonardo Andrade" class="rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm object-cover">
                        </div>

                        <div class="md:col-span-3">
                            <h3 class="text-2xl md:text-3xl font-semibold text-white mb-3">Olá! Eu sou Leonardo Andrade</h3>
                            <p class="text-amber-400 font-medium mb-5">Desenvolvedor de Software</p>
                            <p class="text-gray-400 mb-8 leading-relaxed">
                            Acredito que software bem feito nasce de boas decisões. Por isso, me dedico a escrever código limpo, arquiteturas bem definidas e experiências pensadas do início ao fim. Também compartilho o que aprendo, ajudando outros devs a crescer com clareza e foco.
                            </p>
                            <ul class="space-y-3 text-gray-300 mb-10 text-sm">
                                <li class="flex"><strong class="w-20 sm:w-24 font-semibold text-white flex-shrink-0">Telefone</strong><span class="mr-2">:</span> (84)99666-7335</li>
                                <li class="flex"><strong class="w-20 sm:w-24 font-semibold text-white flex-shrink-0">Email</strong><span class="mr-2">:</span> leonandrade22@gmail.com</li>
                                <li class="flex"><strong class="w-20 sm:w-24 font-semibold text-white flex-shrink-0">Idiomas</strong><span class="mr-2">:</span> Inglês, Espanhol</li>
                                <li class="flex"><strong class="w-20 sm:w-24 font-semibold text-white flex-shrink-0">Senioridade</strong><span class="mr-2">:</span> Pleno</li>
                                <li class="flex"><strong class="w-20 sm:w-24 font-semibold text-white flex-shrink-0">Status</strong><span class="mr-2">:</span> Disponível para vagas e prestação de serviços</li>
                            </ul>
                            <p class="text-gray-400 mb-8 leading-relaxed">
                            Saiba mais baixando o meu currículo 
                            </p>
                            <a href="https://drive.google.com/file/d/1Y5LqjJ9U-dPehFF899fWV371eK0iKaKM/view?usp=sharing" target="_blank" class="inline-block bg-amber-400 text-gray-900 font-semibold py-2.5 px-6 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D1117] focus:ring-amber-400 transition duration-300 text-sm uppercase tracking-wider">
                                Baixar Currículo
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section id="services" class="bg-[#161B22] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
                 <div class="container mx-auto max-w-7xl">
                    <div class="text-center mb-12 md:mb-16">
                        <h2 class="text-sm font-medium uppercase tracking-widest text-amber-400 mb-2">Serviços</h2>
                        <p class="text-3xl md:text-4xl font-bold text-white">O Que Eu Faço?</p>
                        <div class="w-16 h-1 bg-amber-400 mx-auto mt-3"></div>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                         <div class="bg-[#0D1117] p-4 sm:p-6 md:p-8 rounded-lg text-center transition duration-300 hover:bg-[#21262d] hover:shadow-lg">
                             <div class="inline-block text-amber-400 mb-4 sm:mb-5">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                 </svg>
                             </div>
                             <h3 class="text-base sm:text-lg font-semibold text-white mb-2 sm:mb-3">Desenvolvimento de Sistemas</h3>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Desenvolvo sistemas de alta qualidade, com foco na clareza e na eficiência.
                            </p>
                        </div>

                         <div class="bg-[#0D1117] p-4 sm:p-6 md:p-8 rounded-lg text-center transition duration-300 hover:bg-[#21262d] hover:shadow-lg">
                             <div class="inline-block text-amber-400 mb-4 sm:mb-5">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 01-2 2z" />
                                 </svg>
                             </div>
                             <h3 class="text-base sm:text-lg font-semibold text-white mb-2 sm:mb-3">Desenvolvimento de Aplicativos</h3>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Desenvolvo aplicativos de alta qualidade, com foco na clareza e na eficiência.
                            </p>
                        </div>

                         <div class="bg-[#0D1117] p-4 sm:p-6 md:p-8 rounded-lg text-center transition duration-300 hover:bg-[#21262d] hover:shadow-lg">
                             <div class="inline-block text-amber-400 mb-4 sm:mb-5">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                 </svg>
                             </div>
                             <h3 class="text-base sm:text-lg font-semibold text-white mb-2 sm:mb-3">Desenvolvimento de API</h3>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Construo APIs RESTful seguras e escaláveis, prontas para conectar múltiplas aplicações com consistência e performance.
                            </p>
                        </div>

                         <div class="bg-[#0D1117] p-4 sm:p-6 md:p-8 rounded-lg text-center transition duration-300 hover:bg-[#21262d] hover:shadow-lg">
                             <div class="inline-block text-amber-400 mb-4 sm:mb-5">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                 </svg>
                             </div>
                             <h3 class="text-base sm:text-lg font-semibold text-white mb-2 sm:mb-3">Manutenção de Sistemas</h3>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Realizo ajustes, refatorações e melhorias em sistemas existentes, garantindo estabilidade, legibilidade e evolução contínua.
                            </p>
                        </div>

                         <div class="bg-[#0D1117] p-4 sm:p-6 md:p-8 rounded-lg text-center transition duration-300 hover:bg-[#21262d] hover:shadow-lg">
                             <div class="inline-block text-amber-400 mb-4 sm:mb-5">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                 </svg>
                             </div>
                             <h3 class="text-base sm:text-lg font-semibold text-white mb-2 sm:mb-3">Modelagem de Soluções</h3>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Estruturo a base do sistema antes do código, definindo caminhos claros, tecnologias adequadas e uma arquitetura simples de manter e evoluir.
                            </p>
                        </div>

                         <div class="bg-[#0D1117] p-4 sm:p-6 md:p-8 rounded-lg text-center transition duration-300 hover:bg-[#21262d] hover:shadow-lg">
                             <div class="inline-block text-amber-400 mb-4 sm:mb-5">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                 </svg>
                             </div>
                             <h3 class="text-base sm:text-lg font-semibold text-white mb-2 sm:mb-3">Mentoria Técnica</h3>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Ajudo desenvolvedores a evoluírem na prática com orientação estratégica, revisão de código e foco em clareza e autonomia.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- My Skills Section -->
            <section id="skills" class="bg-[#0D1117] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto max-w-7xl">
                    <div class="text-center mb-12 md:mb-16">
                        <h2 class="text-sm font-medium uppercase tracking-widest text-amber-400 mb-2">Habilidades</h2>
                        <p class="text-3xl md:text-4xl font-bold text-white">Minhas Habilidades</p>
                        <div class="w-16 h-1 bg-amber-400 mx-auto mt-3"></div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-10 lg:gap-16 items-start">
                         <div class="text-gray-400 leading-relaxed">
                            <h3 class="text-xl font-semibold text-white mb-4">Aqui estão as habilidades que desenvolvi ao longo da minha jornada como desenvolvedor.</h3>
                            <p class="mb-4 text-sm">                           
                                Tenho experiência sólida em back-end com PHP e Laravel, domínio em front-end com Vue.js e Tailwind CSS, além de uma boa base em bancos de dados, versionamento de código e containers.

                                Meu foco sempre foi unir código limpo com boas práticas, entregando soluções que fazem sentido para o negócio e são fáceis de manter.
                            </p>
                        </div>

                        <div class="space-y-5">
                            {{-- Loop through skills data --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
                                @forelse ($skills as $skill)
                                    <div class="bg-[#161B22] p-2.5 sm:p-3 rounded-lg text-center hover:bg-[#21262d] transition duration-300">
                                        <span class="text-sm sm:text-base font-medium text-gray-300">{{ $skill->name }}</span>
                                    </div>
                                @empty
                                    <p class="text-gray-400 text-sm">No skills listed.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resume Section -->
            <section id="resume" class="bg-[#161B22] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
                 <div class="container mx-auto max-w-7xl">
                    <div class="text-center mb-12 md:mb-16">
                        <h2 class="text-sm font-medium uppercase tracking-widest text-amber-400 mb-2">Experiência</h2>
                        <p class="text-3xl md:text-4xl font-bold text-white">Minha Experiência</p>
                        <div class="w-16 h-1 bg-amber-400 mx-auto mt-3"></div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                        <div>
                            <h3 class="text-xl sm:text-2xl font-semibold text-white mb-6">Minha Formação</h3>
                            <div class="space-y-5">
                                @forelse ($educations as $education)
                                    <div class="bg-[#0D1117] p-4 sm:p-5 rounded-lg border-l-4 border-amber-400 shadow-md hover:bg-[#21262d] transition duration-300">
                                        <p class="text-xs sm:text-sm text-gray-400 mb-1">
                                            {{ \Carbon\Carbon::createFromDate($education->year_start, 1, 1)->format('Y') }}
                                            @if($education->year_end)
                                                - {{ \Carbon\Carbon::createFromDate($education->year_end, 1, 1)->format('Y') }}
                                    @endif
                                        </p>
                                        <h4 class="text-base sm:text-lg font-semibold text-white mb-1">{{ $education->degree }}</h4>
                                        <p class="text-amber-500 text-xs sm:text-sm font-medium mb-2">{{ $education->university }}</p>
                                        @if($education->description)
                                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                                {{ $education->description }}
                                            </p>
                        @endif
                                    </div>
                                @empty
                                    <p class="text-gray-400 text-sm">Nenhum histórico educacional disponível.</p>
                                @endforelse
                                </div>
                                        </div>

                        <div>
                            <h3 class="text-xl sm:text-2xl font-semibold text-white mb-6">Experiência Profissional</h3>
                            <div class="space-y-5">
                                @forelse ($experiences as $experience)
                                    <div class="bg-[#0D1117] p-4 sm:p-5 rounded-lg border-l-4 border-amber-400 shadow-md hover:bg-[#21262d] transition duration-300">
                                        <p class="text-xs sm:text-sm text-gray-400 mb-1">
                                            {{ \Carbon\Carbon::createFromDate($experience->year_start, $experience->start_month, 1)->locale('pt_BR')->translatedFormat('M/Y') }}
                                            @if($experience->year_end && $experience->end_month)
                                                - {{ \Carbon\Carbon::createFromDate($experience->year_end, $experience->end_month, 1)->locale('pt_BR')->translatedFormat('M/Y') }}
                                            @else
                                                - Atual
                                            @endif
                                        </p>
                                        <h4 class="text-base sm:text-lg font-semibold text-white mb-1">{{ $experience->position }}</h4>
                                        <p class="text-amber-500 text-xs sm:text-sm font-medium mb-2">{{ $experience->company }}</p>
                                        @if($experience->description)
                                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                                {{ $experience->description }}
                                            </p>
                                        @endif
                                    </div>
                                @empty
                                    <p class="text-gray-400 text-sm">Nenhuma experiência profissional disponível.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Ebook Section -->
            <section class="bg-[#0D1117] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto max-w-7xl">
                    <div class="text-center mb-12 md:mb-16">
                        <h2 class="text-sm font-medium uppercase tracking-widest text-amber-400 mb-2">Ebook</h2>
                        <p class="text-3xl md:text-4xl font-bold text-white">Desbravando o Código</p>
                        <div class="w-16 h-1 bg-amber-400 mx-auto mt-3"></div>
                                </div>

                    <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                        <div>
                            <h3 class="text-2xl md:text-3xl font-semibold text-white mb-4">Comece Sua Jornada na Programação</h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">
                                Um guia completo para quem está começando no mundo da programação. Aprenda os conceitos fundamentais, lógica de programação e dê os primeiros passos para se tornar um desenvolvedor.
                            </p>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-sm">Conceitos básicos explicados de forma clara e objetiva</span>
                                </li>
                                <li class="flex items-start text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-sm">Exercícios práticos para fixar o aprendizado</span>
                                </li>
                                <li class="flex items-start text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-sm">Guia passo a passo para iniciar na programação</span>
                                </li>
                            </ul>
                            <a href="{{ route('ebook') }}" class="inline-block bg-amber-400 text-gray-900 font-semibold py-3 px-8 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D1117] focus:ring-amber-400 transition duration-300 text-sm uppercase tracking-wider">
                                Saiba Mais Sobre o Ebook
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <div class="relative">
                                <div class="absolute -inset-1 bg-amber-400 rounded-lg blur opacity-25"></div>
                                <div class="relative bg-[#161B22] p-6 rounded-lg shadow-xl">
                                    <img src="{{ asset('img/book-cover.png') }}" alt="Capa do Ebook" class="w-full h-auto rounded shadow-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="bg-[#0D1117] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
                 <div class="container mx-auto max-w-7xl">
                    <div class="text-center mb-12 md:mb-16">
                        <h2 class="text-sm font-medium uppercase tracking-widest text-amber-400 mb-2">Contato</h2>
                        <p class="text-3xl md:text-4xl font-bold text-white">Vamos Conversar</p>
                        <div class="w-16 h-1 bg-amber-400 mx-auto mt-3"></div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                        <div class="space-y-6 sm:space-y-8">
                            <div>
                                <h3 class="text-lg sm:text-xl font-semibold text-white mb-4">Pronto para Começar um Projeto?</h3>
                                <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-6">
                                    Estou disponível para novos projetos e oportunidades. Se você busca um desenvolvedor que combine:
                                </p>
                                <ul class="space-y-4">
                                    <li class="flex items-start text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-sm">Código limpo e bem estruturado para manutenção a longo prazo</span>
                                    </li>
                                    <li class="flex items-start text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-sm">Experiência sólida em desenvolvimento web full-stack</span>
                                    </li>
                                    <li class="flex items-start text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mt-1 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-sm">Compromisso com prazos e comunicação clara</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="bg-[#161B22] p-6 rounded-lg">
                                <h4 class="text-white font-semibold mb-4">Formas de Contato</h4>
                                <div class="space-y-4">
                                    <div class="flex items-center text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-sm">leonandrade22@gmail.com</span>
                                    </div>
                                    <div class="flex items-center text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="text-sm">(84) 99666-7335</span>
                                    </div>
                                    <div class="flex items-center text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-sm">Natal, Rio Grande do Norte</span>
                                    </div>
                                </div>

                                <div class="flex space-x-4 mt-6">
                                    <a href="https://github.com/dev-leonzera" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/in/leonandrade" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </a>
                                    <a href="https://wa.me/5584996667335" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                                </div>

                        <div class="bg-[#0D1117] p-5 sm:p-6 rounded-lg">
                            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 sm:space-y-5">
                                @csrf
                                <!-- Form alerts -->
                                @if(session('success'))
                                    <div class="bg-green-500 text-white p-3 rounded-lg text-sm">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if($errors->any())
                                    <div class="bg-red-500 text-white p-3 rounded-lg text-sm">
                                        <ul class="list-disc list-inside">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Form fields com melhor espaçamento e responsividade -->
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="name" class="sr-only">Nome</label>
                                        <input type="text" name="name" id="name" placeholder="Seu Nome" required 
                                               class="w-full text-sm bg-[#161B22] border border-gray-700 rounded py-2.5 px-4 text-white focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent placeholder-gray-500 transition duration-300">
                                    </div>
                                    <div>
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Seu Email" required 
                                               class="w-full text-sm bg-[#161B22] border border-gray-700 rounded py-2.5 px-4 text-white focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent placeholder-gray-500 transition duration-300">
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="sr-only">Assunto</label>
                                    <input type="text" name="subject" id="subject" placeholder="Assunto" required 
                                           class="w-full text-sm bg-[#161B22] border border-gray-700 rounded py-2.5 px-4 text-white focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent placeholder-gray-500 transition duration-300 mb-4">
                                </div>
                                <div>
                                    <label for="message" class="sr-only">Mensagem</label>
                                    <textarea name="message" id="message" rows="4" placeholder="Sua Mensagem" required 
                                              class="w-full text-sm bg-[#161B22] border border-gray-700 rounded py-2.5 px-4 text-white focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent placeholder-gray-500 transition duration-300"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" 
                                            class="inline-block bg-amber-400 text-gray-900 font-semibold py-2.5 px-6 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D1117] focus:ring-amber-400 transition duration-300 text-sm uppercase tracking-wider">
                                        Enviar Mensagem
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="bg-[#161B22] py-12 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <!-- About Column -->
                        <div class="text-center md:text-left">
                            <h3 class="text-white text-lg font-semibold mb-4">Sobre</h3>
                            <p class="text-gray-400 text-sm mb-4">Desenvolvedor de software com foco em clareza, qualidade e soluções duradouras.</p>
                            <div class="flex justify-center md:justify-start space-x-4">
                                <a href="https://github.com/dev-leonzera" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/leonandrade" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </a>
                                <a href="mailto:leonandrade22@gmail.com" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </a>
                                <a href="https://wa.me/5584996667335" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="text-center md:text-left">
                            <h3 class="text-white text-lg font-semibold mb-4">Links Rápidos</h3>
                            <ul class="space-y-2">
                                <li><a href="#about" class="text-gray-400 hover:text-amber-400 transition duration-300 text-sm">Sobre</a></li>
                                <li><a href="#services" class="text-gray-400 hover:text-amber-400 transition duration-300 text-sm">Serviços</a></li>
                                <li><a href="#skills" class="text-gray-400 hover:text-amber-400 transition duration-300 text-sm">Habilidades</a></li>
                                <li><a href="#resume" class="text-gray-400 hover:text-amber-400 transition duration-300 text-sm">Experiência</a></li>
                                <li><a href="#contact" class="text-gray-400 hover:text-amber-400 transition duration-300 text-sm">Contato</a></li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="text-center md:text-left">
                            <h3 class="text-white text-lg font-semibold mb-4">Contato</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center justify-center md:justify-start text-gray-400 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    Natal, Rio Grande do Norte
                                </li>
                                <li class="flex items-center justify-center md:justify-start text-gray-400 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    (84) 99666-7335
                                </li>
                                <li class="flex items-center justify-center md:justify-start text-gray-400 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    leonandrade22@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="border-t border-gray-800 pt-8">
                        <p class="text-center text-gray-500 text-xs">
                            Copyright &copy; {{ date('Y') }} Leonardo Andrade. Todos os direitos reservados.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
