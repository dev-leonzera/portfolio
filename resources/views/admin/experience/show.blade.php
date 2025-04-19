<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes da Experiência Profissional') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Cargo -->
                        <div class="md:col-span-2">
                            <h3 class="text-lg font-semibold mb-2">Cargo</h3>
                            <p class="text-gray-700">{{ $experience->position }}</p>
                        </div>

                        <!-- Empresa -->
                        <div class="md:col-span-2">
                            <h3 class="text-lg font-semibold mb-2">Empresa</h3>
                            <p class="text-gray-700">{{ $experience->company }}</p>
                        </div>

                        <!-- Descrição -->
                        <div class="md:col-span-2">
                            <h3 class="text-lg font-semibold mb-2">Descrição</h3>
                            <p class="text-gray-700">{{ $experience->description }}</p>
                        </div>

                        <!-- Período -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Ano de Início</h3>
                            <p class="text-gray-700">{{ $experience->year_start }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-2">Ano de Término</h3>
                            <p class="text-gray-700">
                                @if($experience->year_end)
                                    {{ $experience->year_end }}
                                @else
                                    Atual
                                @endif
                            </p>
                        </div>

                        <!-- Ordem -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Ordem de Exibição</h3>
                            <p class="text-gray-700">{{ $experience->order }}</p>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn-primary">
                            Editar
                        </a>
                        <a href="{{ route('admin.experiences.index') }}" class="btn-secondary">
                            Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 