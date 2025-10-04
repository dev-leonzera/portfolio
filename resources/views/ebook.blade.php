<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desbravando o Código - Ebook</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Embedded Styles (Minimal) -->
    <style>
        body {
            background-color: #0D1117;
            color: #C9D1D9;
            font-family: 'Poppins', sans-serif;
        }
         ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #161B22;
        }
        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #FBBF24;
        }
    </style>
</head>
<body class="antialiased">
    <div>
        <!-- Header -->
        <header class="bg-[#161B22] shadow-md">
             <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <div class="text-xl font-bold text-amber-400">
                    <a href="/">Voltar ao Portfolio</a>
                </div>
                <a href="https://pay.hotmart.com/V99221042V" target="_blank" class="inline-block bg-amber-400 text-gray-900 font-semibold py-2 px-5 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#161B22] focus:ring-amber-400 transition duration-300 text-sm uppercase tracking-wider">
                    Comprar Agora
                </a>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="bg-[#0D1117] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-5xl">
                <!-- Grid container com ordem flexível para mobile -->
                <div class="flex flex-col-reverse md:grid md:grid-cols-2 gap-10 lg:gap-16 items-center">
                    <!-- Text Content -->
                    <div class="text-center md:text-left mt-8 md:mt-0">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-5 leading-tight">Desbravando o Código</h1>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            Descubra os segredos da programação moderna e desbloqueie seu potencial como desenvolvedor. Este ebook é seu guia completo para dominar as técnicas e práticas essenciais de desenvolvimento de software.
                        </p>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            Do básico ao avançado, você aprenderá conceitos fundamentais, padrões de projeto e melhores práticas que farão a diferença em sua jornada como programador.
                        </p>
                        <a href="https://pay.hotmart.com/V99221042V" target="_blank" class="inline-block bg-amber-400 text-gray-900 font-bold py-3 px-8 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D1117] focus:ring-amber-400 transition duration-300 text-lg uppercase tracking-wider">
                            Quero Começar Agora!
                        </a>
                        <p class="text-xs text-gray-500 mt-4">Pagamento seguro | Acesso imediato ao conteúdo</p>
                    </div>

                    <!-- Ebook Image -->
                    <div class="flex justify-center w-full max-w-sm mx-auto md:max-w-none">
                        <img src="{{ asset('img/book-cover.png') }}" alt="Capa do Ebook Desbravando o Código" class="rounded-lg shadow-xl w-full max-w-[280px] md:max-w-sm">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="bg-[#161B22] py-16 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-5xl">
                <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-12">O que você vai aprender</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Fundamentos Sólidos</h3>
                        <p class="text-gray-400">Conceitos essenciais de programação explicados de forma clara e objetiva.</p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Direcionamento Profissional</h3>
                        <p class="text-gray-400">Entenda como escolher sua área, como aprender de forma mais eficaz e evitar os erros mais comuns da jornada.</p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Primeiros Passos com Segurança</h3>
                        <p class="text-gray-400">Saiba por onde começar, como estudar com consistência e estruturar sua rotina de aprendizado sem se perder.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-[#161B22] py-16 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-12">O que dizem quem já leu</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4 italic">"Finalmente entendi os conceitos básicos de programação! O ebook é muito didático e me ajudou a dar os primeiros passos com confiança."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-gray-900 font-bold text-sm">C</div>
                            <div class="ml-3">
                                <p class="text-white font-semibold">Carlos Silva</p>
                                <p class="text-gray-400 text-sm">Estudante</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4 italic">"Excelente material! As explicações são claras e os exercícios práticos me ajudaram muito. Recomendo para qualquer pessoa que queira aprender programação."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-gray-900 font-bold text-sm">M</div>
                            <div class="ml-3">
                                <p class="text-white font-semibold">Mariana Costa</p>
                                <p class="text-gray-400 text-sm">Desenvolvedora Júnior</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4 italic">"O melhor investimento que fiz na minha carreira! Em poucos meses consegui uma vaga como desenvolvedor graças ao conhecimento adquirido neste ebook."</p>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-gray-900 font-bold text-sm">R</div>
                            <div class="ml-3">
                                <p class="text-white font-semibold">Roberto Lima</p>
                                <p class="text-gray-400 text-sm">Desenvolvedor Pleno</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="bg-[#0D1117] py-16 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-12">Perguntas Frequentes</h2>
                <div class="space-y-4">
                    <div class="bg-[#161B22] rounded-lg">
                        <button class="w-full px-6 py-4 text-left text-white font-semibold flex justify-between items-center hover:bg-[#21262d] transition duration-300" onclick="toggleFAQ(this)">
                            <span>O ebook é adequado para iniciantes?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 text-gray-400 hidden">
                            <p>Sim! O ebook foi desenvolvido especialmente para quem está começando na programação. Ele aborda desde os conceitos mais básicos até técnicas intermediárias, sempre com explicações claras e exemplos práticos.</p>
                        </div>
                    </div>
                    
                    <div class="bg-[#161B22] rounded-lg">
                        <button class="w-full px-6 py-4 text-left text-white font-semibold flex justify-between items-center hover:bg-[#21262d] transition duration-300" onclick="toggleFAQ(this)">
                            <span>Quanto tempo levo para ler o ebook?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 text-gray-400 hidden">
                            <p>O ebook tem aproximadamente 150 páginas e pode ser lido em 4-6 horas. No entanto, recomendamos que você leia com calma, pratique os exercícios e absorva o conteúdo gradualmente para obter o máximo proveito.</p>
                        </div>
                    </div>
                    
                    <div class="bg-[#161B22] rounded-lg">
                        <button class="w-full px-6 py-4 text-left text-white font-semibold flex justify-between items-center hover:bg-[#21262d] transition duration-300" onclick="toggleFAQ(this)">
                            <span>Preciso ter conhecimento prévio em programação?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 text-gray-400 hidden">
                            <p>Não! O ebook foi pensado para pessoas que nunca programaram antes. Ele começa do zero, explicando conceitos básicos de lógica e programação de forma didática e acessível.</p>
                        </div>
                    </div>
                    
                    <div class="bg-[#161B22] rounded-lg">
                        <button class="w-full px-6 py-4 text-left text-white font-semibold flex justify-between items-center hover:bg-[#21262d] transition duration-300" onclick="toggleFAQ(this)">
                            <span>Posso ter reembolso se não gostar?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 text-gray-400 hidden">
                            <p>Sim! Oferecemos garantia de 7 dias. Se você não ficar satisfeito com o conteúdo, devolvemos 100% do seu dinheiro, sem perguntas.</p>
                        </div>
                    </div>
                    
                    <div class="bg-[#161B22] rounded-lg">
                        <button class="w-full px-6 py-4 text-left text-white font-semibold flex justify-between items-center hover:bg-[#21262d] transition duration-300" onclick="toggleFAQ(this)">
                            <span>Como recebo o ebook após a compra?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 text-gray-400 hidden">
                            <p>Após a confirmação do pagamento, você receberá um email com o link para download do ebook em PDF. O acesso é imediato e você pode baixar quantas vezes quiser.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="comprar" class="bg-[#161B22] py-16 px-4 sm:px-6 lg:px-8 text-center">
            <div class="container mx-auto max-w-3xl">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-6">Comece sua jornada hoje!</h2>
                <p class="text-gray-400 mb-8">
                    Invista em seu futuro como desenvolvedor e tenha acesso a um conteúdo completo e atualizado.
                </p>
                <div class="bg-[#161B22] p-8 rounded-lg mb-8">
                    <div class="mb-6">
                        <p class="text-xl text-gray-400 line-through mb-2">De R$ 97,00</p>
                        <p class="text-3xl md:text-4xl font-bold text-amber-400 mb-2">Por apenas R$ 47,90</p>
                        <p class="text-sm text-amber-400 font-semibold uppercase tracking-wider mb-4">Promoção de Lançamento</p>
                        
                        <!-- Countdown Timer -->
                        <div class="bg-red-600 text-white p-4 rounded-lg mb-6 text-center">
                            <p class="text-sm font-semibold mb-2">⏰ OFERTA LIMITADA!</p>
                            <p class="text-lg font-bold">Termina em: <span id="countdown" class="text-2xl">23:59:59</span></p>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <p class="text-white font-semibold mb-4">Comprando hoje você também leva:</p>
                        <div class="space-y-4 text-left max-w-md mx-auto">
                            <div class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-amber-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-400"><span class="text-white font-medium">Modelo de Currículo ATS:</span> Template otimizado para passar nos sistemas de triagem automatizada</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-amber-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-400"><span class="text-white font-medium">Guia do LinkedIn:</span> Estratégias comprovadas para se destacar na rede profissional</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-amber-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-400"><span class="text-white font-medium">Guia Rápido de Git:</span> Domine os comandos essenciais do controle de versão</p>
                            </div>
                        </div>
                    </div>

                    <a href="https://pay.hotmart.com/V99221042V" target="_blank" class="inline-block bg-amber-400 text-gray-900 font-bold py-3 px-8 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D1117] focus:ring-amber-400 transition duration-300 text-lg uppercase tracking-wider">
                        Comprar Agora
                    </a>
                </div>
                <p class="text-sm text-gray-500">Garantia de 7 dias ou seu dinheiro de volta</p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-[#161B22] py-12 px-4 sm:px-6 lg:px-8 text-center">
             <div class="container mx-auto max-w-4xl">
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-white mb-4">Ainda tem dúvidas?</h3>
                    <p class="text-gray-400 text-sm">Entre em contato por <a href="mailto:leonandrade22@gmail.com" class="text-amber-400 hover:text-amber-500">leonandrade22@gmail.com</a></p>
                </div>
                
                <div class="border-t border-gray-800 pt-8">
                    <div class="flex flex-wrap justify-center gap-4 mb-6">
                        <a href="/" class="text-gray-400 hover:text-amber-400 text-sm">Portfólio</a>
                        <a href="https://github.com/dev-leonzera" target="_blank" class="text-gray-400 hover:text-amber-400 text-sm">GitHub</a>
                        <a href="https://www.linkedin.com/in/leonandrade" target="_blank" class="text-gray-400 hover:text-amber-400 text-sm">LinkedIn</a>
                    </div>
                    <p class="text-gray-500 text-xs">&copy; {{ date('Y') }} Leonardo Andrade. Todos os direitos reservados.</p>
                    <p class="text-gray-500 text-xs mt-2">🔒 Pagamento 100% seguro via Hotmart</p>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- JavaScript for FAQ and Countdown -->
    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
        
        // Countdown Timer
        function startCountdown() {
            const countdownElement = document.getElementById('countdown');
            if (!countdownElement) return;
            
            const endTime = new Date().getTime() + (24 * 60 * 60 * 1000); // 24 hours from now
            
            function updateCountdown() {
                const now = new Date().getTime();
                const distance = endTime - now;
                
                if (distance < 0) {
                    countdownElement.innerHTML = "Oferta Expirada!";
                    return;
                }
                
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                countdownElement.innerHTML = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }
            
            updateCountdown();
            setInterval(updateCountdown, 1000);
        }
        
        document.addEventListener('DOMContentLoaded', startCountdown);
    </script>
</body>
</html>