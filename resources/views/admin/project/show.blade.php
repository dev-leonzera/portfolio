<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Projeto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">{{ $project->title }}</h2>
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Editar
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
                                    onclick="return confirm('Tem certeza que deseja excluir este projeto?')">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Imagem do Projeto -->
                        <div class="md:col-span-2">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" 
                                     alt="{{ $project->title }}" 
                                     class="w-full h-64 object-cover rounded-lg shadow-lg">
                            @else
                                <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <svg class="h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Descrição -->
                        <div class="md:col-span-2">
                            <h4 class="text-lg font-semibold mb-2">Descrição</h4>
                            <p class="text-gray-700">{{ $project->description }}</p>
                        </div>

                        <!-- Links -->
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Links</h4>
                            <div class="space-y-2">
                                @if($project->link)
                                    <div>
                                        <span class="font-medium">Projeto:</span>
                                        <a href="{{ $project->link }}" target="_blank" class="text-blue-600 hover:text-blue-800 ml-2">
                                            {{ $project->link }}
                                        </a>
                                    </div>
                                @endif
                                @if($project->github)
                                    <div>
                                        <span class="font-medium">GitHub:</span>
                                        <a href="{{ $project->github }}" target="_blank" class="text-blue-600 hover:text-blue-800 ml-2">
                                            {{ $project->github }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Tecnologias e Ordem -->
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Detalhes</h4>
                            <div class="space-y-2">
                                <div>
                                    <span class="font-medium">Tecnologias:</span>
                                    <span class="text-gray-700 ml-2">{{ $project->technologies }}</span>
                                </div>
                                <div>
                                    <span class="font-medium">Ordem de Exibição:</span>
                                    <span class="text-gray-700 ml-2">{{ $project->order }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 