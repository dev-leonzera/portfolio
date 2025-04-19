<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Projeto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Título -->
                            <div class="md:col-span-2">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $project->title) }}" required>
                                @error('title')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Descrição -->
                            <div class="md:col-span-2">
                                <label for="description" class="form-label">Descrição</label>
                                <textarea name="description" id="description" rows="4" class="form-input" required>{{ old('description', $project->description) }}</textarea>
                                @error('description')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Imagem -->
                            <div class="md:col-span-2">
                                <label for="image" class="form-label">Imagem</label>
                                @if($project->image)
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-32 w-32 object-cover rounded-lg">
                                    </div>
                                @endif
                                <input type="file" name="image" id="image" class="form-input" accept="image/*">
                                <p class="text-sm text-gray-500 mt-1">Formatos aceitos: JPEG, PNG, JPG, GIF. Tamanho máximo: 2MB</p>
                                @error('image')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Link do Projeto -->
                            <div>
                                <label for="project_link" class="form-label">Link do Projeto</label>
                                <input type="url" name="project_link" id="project_link" class="form-input" value="{{ old('project_link', $project->project_link) }}">
                                @error('project_link')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Link do GitHub -->
                            <div>
                                <label for="github_link" class="form-label">Link do GitHub</label>
                                <input type="url" name="github_link" id="github_link" class="form-input" value="{{ old('github_link', $project->github_link) }}">
                                @error('github_link')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tecnologias -->
                            <div class="md:col-span-2">
                                <label for="technologies" class="form-label">Tecnologias</label>
                                <input type="text" name="technologies" id="technologies" class="form-input" value="{{ old('technologies', $project->technologies) }}" required>
                                <p class="text-sm text-gray-500 mt-1">Separe as tecnologias por vírgula</p>
                                @error('technologies')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Ordem -->
                            <div>
                                <label for="order" class="form-label">Ordem de Exibição</label>
                                <input type="number" name="order" id="order" class="form-input" value="{{ old('order', $project->order) }}" required>
                                <p class="text-sm text-gray-500 mt-1">Número que define a ordem de exibição (menor = primeiro)</p>
                                @error('order')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <a href="{{ route('admin.projects.index') }}" class="btn-secondary mr-3">
                                Cancelar
                            </a>
                            <button type="submit" class="btn-primary">
                                Atualizar Projeto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 