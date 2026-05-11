<x-admin-layout>
    <x-slot name="header">
        Editar Projeto
    </x-slot>

    <div class="max-w-4xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="title" class="form-label-premium">Título do Projeto (PT)</label>
                        <input type="text" name="title" id="title" class="form-input-premium" value="{{ old('title', $project->title) }}" placeholder="Nome do seu grande projeto" required>
                        @error('title')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="title_en" class="form-label-premium">Project Title (EN)</label>
                        <input type="text" name="title_en" id="title_en" class="form-input-premium" value="{{ old('title_en', $project->title_en) }}" placeholder="Project title in English">
                        @error('title_en')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="description" class="form-label-premium">Descrição Detalhada (PT)</label>
                        <textarea name="description" id="description" rows="5" class="form-input-premium" placeholder="Descreva os desafios..." required>{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description_en" class="form-label-premium">Detailed Description (EN)</label>
                        <textarea name="description_en" id="description_en" rows="5" class="form-input-premium" placeholder="Describe challenges in English...">{{ old('description_en', $project->description_en) }}</textarea>
                        @error('description_en')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="form-label-premium">Thumbnail Atual</label>
                    @if($project->image)
                        <div class="mb-6 relative inline-block group">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-40 w-64 object-cover rounded-xl border border-white/10 group-hover:border-gold-accent/30 transition-colors">
                            <div class="absolute inset-0 bg-black/40 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-[10px] uppercase font-bold tracking-widest text-white">Imagem Atual</span>
                            </div>
                        </div>
                    @endif

                    <label for="image" class="form-label-premium mt-4">Substituir Imagem</label>
                    <div class="relative group/file">
                        <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*">
                        <div class="w-full bg-white/5 border border-white/5 border-dashed rounded-xl py-8 px-6 text-center group-hover/file:border-gold-accent/30 transition duration-300">
                            <div class="text-gold-accent mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-xs text-gray-400">Clique para selecionar ou arraste uma nova imagem</p>
                            <p class="text-[9px] text-gray-600 mt-1 uppercase">JPEG, PNG, JPG (Máx. 2MB)</p>
                        </div>
                    </div>
                    @error('image')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="project_link" class="form-label-premium">Link da Demo (URL)</label>
                        <input type="url" name="project_link" id="project_link" class="form-input-premium" value="{{ old('project_link', $project->project_link) }}" placeholder="https://demo.meuprojeto.com">
                        @error('project_link')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="github_link" class="form-label-premium">Link do Repositório (URL)</label>
                        <input type="url" name="github_link" id="github_link" class="form-input-premium" value="{{ old('github_link', $project->github_link) }}" placeholder="https://github.com/usuario/projeto">
                        @error('github_link')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="technologies" class="form-label-premium">Tecnologias (separadas por vírgula)</label>
                        <input type="text" name="technologies" id="technologies" class="form-input-premium" value="{{ old('technologies', $project->technologies) }}" placeholder="Ex: Laravel, Vue.js, MySQL" required>
                        @error('technologies')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="order" class="form-label-premium">Ordem de Exibição</label>
                        <input type="number" name="order" id="order" class="form-input-premium" value="{{ old('order', $project->order) }}" min="0" required>
                        @error('order')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.projects.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Atualizar Projeto
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>