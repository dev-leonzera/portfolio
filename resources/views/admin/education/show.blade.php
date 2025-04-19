<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">{{ $education->degree }}</h2>
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.educations.edit', $education) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Editar
                            </a>
                            <form action="{{ route('admin.educations.destroy', $education) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
                                    onclick="return confirm('Tem certeza que deseja excluir esta formação?')">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Universidade</h3>
                            <p class="text-gray-600">{{ $education->university }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-2">Período</h3>
                            <p class="text-gray-600">
                                {{ $education->year_start }} - {{ $education->year_end ? $education->year_end : 'Atual' }}
                            </p>
                        </div>

                        <div class="md:col-span-2">
                            <h3 class="text-lg font-semibold mb-2">Descrição</h3>
                            <p class="text-gray-600 whitespace-pre-line">{{ $education->description }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-2">Ordem de Exibição</h3>
                            <p class="text-gray-600">{{ $education->order }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.educations.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Voltar para Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 