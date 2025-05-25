<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Método com Propósito - Mentoria</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                <a href="#comprar" class="inline-block bg-amber-400 text-gray-900 font-semibold py-2 px-5 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#161B22] focus:ring-amber-400 transition duration-300 text-sm uppercase tracking-wider">
                    Quero ser Mentorando
                </a>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="bg-[#0D1117] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-5xl">
                <div class="flex flex-col-reverse md:grid md:grid-cols-2 gap-10 lg:gap-16 items-center">
                    <!-- Text Content -->
                    <div class="text-center md:text-left mt-8 md:mt-0">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-5 leading-tight">Método com Propósito</h1>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            Uma mentoria individual para quem quer clareza, foco e resultados reais na carreira ou vida pessoal. Descubra o método que já ajudou dezenas de pessoas a encontrarem propósito e conquistarem seus objetivos.
                        </p>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            Acompanhamento personalizado, plano de ação exclusivo, ferramentas práticas e suporte direto para você sair do lugar e avançar com confiança.
                        </p>
                        <a href="#comprar" class="inline-block bg-amber-400 text-gray-900 font-bold py-3 px-8 rounded hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D1117] focus:ring-amber-400 transition duration-300 text-lg uppercase tracking-wider">
                            Quero ser Mentorando
                        </a>
                        <p class="text-xs text-gray-500 mt-4">Vagas limitadas | Atendimento individual</p>
                    </div>

                    <!-- Mentoria Image (pode trocar por uma imagem de mentoria se desejar) -->
                    <div class="flex justify-center w-full max-w-sm mx-auto md:max-w-none">
                        <img src="{{ asset('img/logo-ccp.png') }}" alt="Mentoria Método com Propósito" class="rounded-lg shadow-xl w-full max-w-[280px] md:max-w-sm">
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Identificação: Principais Problemas de Aprendizado -->
        <section class="bg-[#161B22] py-16 px-4 sm:px-6 lg:px-8 border-b border-gray-800">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-bold text-center text-amber-400 mb-10">Você se identifica com algum desses problemas?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center bg-[#0D1117] rounded-lg p-6 shadow">
                        <svg class="w-10 h-10 text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-gray-300 text-center">Falta de clareza sobre o que estudar e por onde começar</p>
                    </div>
                    <div class="flex flex-col items-center bg-[#0D1117] rounded-lg p-6 shadow">
                        <svg class="w-10 h-10 text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 21m6-4l.75 4M9 21h6M4 4h16M4 8h16M4 12h16M4 16h16" />
                        </svg>
                        <p class="text-gray-300 text-center">Dificuldade em manter a motivação e a disciplina nos estudos</p>
                    </div>
                    <div class="flex flex-col items-center bg-[#0D1117] rounded-lg p-6 shadow">
                        <svg class="w-10 h-10 text-amber-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                        <p class="text-gray-300 text-center">Sensação de estagnação, mesmo estudando e se esforçando</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção Quem será seu mentor -->
        <section class="bg-[#0D1117] py-16 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-4xl flex flex-col md:flex-row items-center gap-10">
                <div class="flex-shrink-0 flex justify-center md:justify-start w-full md:w-auto mb-8 md:mb-0">
                    <img src="{{ asset('img/hero-image.png') }}" alt="Leonardo Andrade" class="rounded-full shadow-lg w-40 h-40 object-cover border-4 border-amber-400">
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-amber-400 mb-4">Quem será seu mentor?</h2>
                    <h3 class="text-xl font-semibold text-white mb-2">Leonardo Andrade</h3>
                    <p class="text-gray-300 mb-4">Desenvolvedor, mentor e apaixonado por ajudar pessoas a encontrarem propósito e resultados reais na carreira e na vida. Com mais de 10 anos de experiência em tecnologia, já ajudei dezenas de profissionais a conquistarem seus objetivos com clareza, estratégia e ação.</p>
                    <ul class="list-disc list-inside text-gray-400 space-y-1 mb-4">
                        <li>+10 anos de experiência em desenvolvimento e mentoria</li>
                        <li>Especialista em transição e crescimento de carreira</li>
                        <li>Foco em autoconhecimento, produtividade e resultados</li>
                    </ul>
                    <p class="text-gray-400">Meu propósito é te ajudar a sair do lugar, superar bloqueios e avançar com confiança, seja qual for seu objetivo.</p>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="bg-[#161B22] py-16 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-5xl">
                <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-12">O que você recebe na mentoria</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Mentoria Individual</h3>
                        <p class="text-gray-400">Encontros 1:1 para entender sua realidade e traçar um plano de ação personalizado.</p>
                    </div>
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Plano de Ação Exclusivo</h3>
                        <p class="text-gray-400">Estratégias e passos práticos para você aplicar imediatamente e avançar com clareza.</p>
                    </div>
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Ferramentas e Exercícios</h3>
                        <p class="text-gray-400">Materiais de apoio, exercícios e ferramentas para autoconhecimento e produtividade.</p>
                    </div>
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Suporte Direto</h3>
                        <p class="text-gray-400">Tire dúvidas e ajuste sua jornada com acompanhamento próximo durante todo o processo.</p>
                    </div>
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Foco em Resultados</h3>
                        <p class="text-gray-400">Acompanhamento para garantir que você avance e conquiste seus objetivos.</p>
                    </div>
                    <div class="bg-[#0D1117] p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-amber-400 mb-3">Comunidade Exclusiva</h3>
                        <p class="text-gray-400">Acesso a uma rede de mentorandos para trocar experiências e crescer junto.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tabela de Preços -->
        <section id="comprar" class="bg-[#0D1117] py-16 px-4 sm:px-6 lg:px-8 border-t border-gray-800">
            <div class="container mx-auto max-w-5xl">
                <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-12">Escolha o melhor plano para você</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Plano de Ação -->
                    <div class="bg-[#161B22] rounded-lg shadow-lg p-8 flex flex-col items-center border-2 border-amber-400">
                        <h3 class="text-xl font-bold text-amber-400 mb-4">Plano de Ação</h3>
                        <p class="text-gray-300 mb-6 text-center">Diagnóstico e plano de ação individualizado com base no objetivo do aluno e o tempo que quer alcançá-lo.</p>
                        <span class="text-3xl font-bold text-amber-400 mb-2">R$ 297,00</span>
                        <span class="text-gray-500 mb-6">Pagamento único</span>
                        <a href="#" class="mt-auto inline-block bg-amber-400 text-gray-900 font-bold py-2 px-6 rounded hover:bg-amber-500 transition">Quero este plano</a>
                    </div>
                    <!-- Plano de Ação + Acompanhamento -->
                    <div class="bg-[#161B22] rounded-lg shadow-lg p-8 flex flex-col items-center border-2 border-amber-400">
                        <h3 class="text-xl font-bold text-amber-400 mb-4">Plano de Ação + Acompanhamento</h3>
                        <p class="text-gray-300 mb-6 text-center">Inclui o plano de ação + sessões ao vivo para acompanhamento, ideal para quem dispõe de tempo para encontros individuais.</p>
                        <span class="text-3xl font-bold text-amber-400 mb-2">R$ 497,00</span>
                        <span class="text-gray-500 mb-6">Pagamento único</span>
                        <a href="#" class="mt-auto inline-block bg-amber-400 text-gray-900 font-bold py-2 px-6 rounded hover:bg-amber-500 transition">Quero este plano</a>
                    </div>
                    <!-- Plano de Ação + Vídeo aulas -->
                    <div class="bg-[#161B22] rounded-lg shadow-lg p-8 flex flex-col items-center border-2 border-amber-400">
                        <h3 class="text-xl font-bold text-amber-400 mb-4">Plano de Ação + Vídeo aulas</h3>
                        <p class="text-gray-300 mb-6 text-center">Inclui o plano de ação + vídeo aulas complementares, ideal para quem não tem tempo para sessões ao vivo.</p>
                        <span class="text-3xl font-bold text-amber-400 mb-2">R$ 397,00</span>
                        <span class="text-gray-500 mb-6">Pagamento único</span>
                        <a href="#" class="mt-auto inline-block bg-amber-400 text-gray-900 font-bold py-2 px-6 rounded hover:bg-amber-500 transition">Quero este plano</a>
                    </div>
                </div>
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
</body>
</html>
