<x-admin-layout>
    <x-slot name="header">
        Visão Geral
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card de Habilidades -->
        <div class="glass-card p-8 group">
            <div class="flex items-center justify-between mb-6">
                <div class="w-12 h-12 bg-gold-accent/10 rounded-xl flex items-center justify-center text-gold-accent group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <a href="{{ route('admin.skills.index') }}" class="text-gray-500 hover:text-gold-accent transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 font-outfit">Habilidades</h3>
            <p class="text-gray-500 text-sm mb-8 leading-relaxed">Gerencie as tecnologias e competências exibidas no seu portfólio.</p>
            <a href="{{ route('admin.skills.create') }}" class="btn-premium w-full text-center py-4 text-xs">
                Nova Habilidade
            </a>
        </div>

        <!-- Card de Projetos -->
        <div class="glass-card p-8 group">
            <div class="flex items-center justify-between mb-6">
                <div class="w-12 h-12 bg-gold-accent/10 rounded-xl flex items-center justify-center text-gold-accent group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <a href="{{ route('admin.projects.index') }}" class="text-gray-500 hover:text-gold-accent transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 font-outfit">Projetos</h3>
            <p class="text-gray-500 text-sm mb-8 leading-relaxed">Adicione, edite ou remova os trabalhos realizados da vitrine principal.</p>
            <a href="{{ route('admin.projects.create') }}" class="btn-premium w-full text-center py-4 text-xs">
                Novo Projeto
            </a>
        </div>

        <!-- Card de Experiências -->
        <div class="glass-card p-8 group">
            <div class="flex items-center justify-between mb-6">
                <div class="w-12 h-12 bg-gold-accent/10 rounded-xl flex items-center justify-center text-gold-accent group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <a href="{{ route('admin.experiences.index') }}" class="text-gray-500 hover:text-gold-accent transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 font-outfit">Carreira</h3>
            <p class="text-gray-500 text-sm mb-8 leading-relaxed">Mantenha sua trajetória profissional e acadêmica sempre atualizada.</p>
            <a href="{{ route('admin.experiences.create') }}" class="btn-premium w-full text-center py-4 text-xs">
                Nova Experiência
            </a>
        </div>

        <!-- Card de Blog -->
        <div class="glass-card p-8 group">
            <div class="flex items-center justify-between mb-6">
                <div class="w-12 h-12 bg-gold-accent/10 rounded-xl flex items-center justify-center text-gold-accent group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
                <a href="{{ route('admin.posts.index') }}" class="text-gray-500 hover:text-gold-accent transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 font-outfit">Blog</h3>
            <p class="text-gray-500 text-sm mb-8 leading-relaxed">Escreva novos artigos e compartilhe conhecimento com sua rede.</p>
            <a href="{{ route('admin.posts.create') }}" class="btn-premium w-full text-center py-4 text-xs">
                Novo Post
            </a>
        </div>

        <!-- Card de Contatos -->
        <div class="glass-card p-8 group">
            <div class="flex items-center justify-between mb-6">
                <div class="w-12 h-12 bg-gold-accent/10 rounded-xl flex items-center justify-center text-gold-accent group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <a href="{{ route('admin.contacts.index') }}" class="text-gray-500 hover:text-gold-accent transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 font-outfit">Mensagens</h3>
            <p class="text-gray-500 text-sm mb-8 leading-relaxed">Visualize os contatos recebidos através do seu formulário.</p>
            <a href="{{ route('admin.contacts.index') }}" class="btn-premium w-full text-center py-4 text-xs">
                Ver Mensagens
            </a>
        </div>

        <!-- Card de Perfil -->
        <div class="glass-card p-8 group">
            <div class="flex items-center justify-between mb-6">
                <div class="w-12 h-12 bg-gold-accent/10 rounded-xl flex items-center justify-center text-gold-accent group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <a href="{{ route('admin.profile.edit') }}" class="text-gray-500 hover:text-gold-accent transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <h3 class="text-xl font-bold text-white mb-2 font-outfit">Perfil</h3>
            <p class="text-gray-500 text-sm mb-8 leading-relaxed">Atualize suas informações de acesso e credenciais do sistema.</p>
            <a href="{{ route('admin.profile.edit') }}" class="btn-premium w-full text-center py-4 text-xs">
                Editar Perfil
            </a>
        </div>
    </div>
</x-admin-layout>