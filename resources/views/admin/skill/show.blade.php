<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes da Habilidade') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold">{{ $skill->name }}</h3>
                        <div class="flex space-x-4">
                            <a href="{{ route('admin.skills.edit', $skill) }}" class="btn-primary">
                                Editar
                            </a>
                            <a href="{{ route('admin.skills.index') }}" class="btn-secondary">
                                Voltar
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Nível de Habilidade -->
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Nível de Habilidade</h4>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-2">{{ $skill->percentage }}%</p>
                        </div>

                        <!-- Ordem de Exibição -->
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Ordem de Exibição</h4>
                            <p class="text-gray-700">{{ $skill->order }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 