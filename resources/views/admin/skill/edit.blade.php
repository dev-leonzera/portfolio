<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Habilidade') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.skills.update', $skill) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nome -->
                            <div class="md:col-span-2">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" name="name" id="name" class="form-input" value="{{ old('name', $skill->name) }}" required>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Porcentagem -->
                            <div>
                                <label for="percentage" class="form-label">Porcentagem</label>
                                <input type="number" name="percentage" id="percentage" class="form-input" value="{{ old('percentage', $skill->percentage) }}" min="0" max="100" required>
                                <p class="text-sm text-gray-500 mt-1">Valor entre 0 e 100</p>
                                @error('percentage')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Ordem -->
                            <div>
                                <label for="order" class="form-label">Ordem de Exibição</label>
                                <input type="number" name="order" id="order" class="form-input" value="{{ old('order', $skill->order) }}" min="0" required>
                                <p class="text-sm text-gray-500 mt-1">Número que define a ordem de exibição (menor = primeiro)</p>
                                @error('order')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <a href="{{ route('admin.skills.index') }}" class="btn-secondary mr-3">
                                Cancelar
                            </a>
                            <button type="submit" class="btn-primary">
                                Atualizar Habilidade
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 