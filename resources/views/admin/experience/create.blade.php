<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Experiência Profissional') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.experiences.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Cargo -->
                            <div class="md:col-span-2">
                                <label for="position" class="form-label">Cargo</label>
                                <input type="text" name="position" id="position" class="form-input" required>
                                @error('position')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Empresa -->
                            <div class="md:col-span-2">
                                <label for="company" class="form-label">Empresa</label>
                                <input type="text" name="company" id="company" class="form-input" required>
                                @error('company')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Descrição -->
                            <div class="md:col-span-2">
                                <label for="description" class="form-label">Descrição</label>
                                <textarea name="description" id="description" rows="4" class="form-input"></textarea>
                                @error('description')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Início -->
                            <div>
                                <label class="form-label">Data de Início</label>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="start_month" class="block text-sm text-gray-600">Mês</label>
                                        <select name="start_month" id="start_month" class="form-input" required>
                                            <option value="">Selecione</option>
                                            <option value="01">Janeiro</option>
                                            <option value="02">Fevereiro</option>
                                            <option value="03">Março</option>
                                            <option value="04">Abril</option>
                                            <option value="05">Maio</option>
                                            <option value="06">Junho</option>
                                            <option value="07">Julho</option>
                                            <option value="08">Agosto</option>
                                            <option value="09">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                        @error('start_month')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="start_year" class="block text-sm text-gray-600">Ano</label>
                                        <input type="number" name="year_start" id="start_year" class="form-input" required min="1900" max="2100">
                                        @error('year_start')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Término -->
                            <div>
                                <label class="form-label">Data de Término</label>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="end_month" class="block text-sm text-gray-600">Mês</label>
                                        <select name="end_month" id="end_month" class="form-input">
                                            <option value="">Selecione</option>
                                            <option value="01">Janeiro</option>
                                            <option value="02">Fevereiro</option>
                                            <option value="03">Março</option>
                                            <option value="04">Abril</option>
                                            <option value="05">Maio</option>
                                            <option value="06">Junho</option>
                                            <option value="07">Julho</option>
                                            <option value="08">Agosto</option>
                                            <option value="09">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                        @error('end_month')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="end_year" class="block text-sm text-gray-600">Ano</label>
                                        <input type="number" name="year_end" id="end_year" class="form-input" min="1900" max="2100">
                                        @error('year_end')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">Deixe em branco se ainda estiver trabalhando</p>
                            </div>

                            <!-- Ordem -->
                            <div>
                                <label for="order" class="form-label">Ordem de Exibição</label>
                                <input type="number" name="order" id="order" class="form-input" required>
                                <p class="text-sm text-gray-500 mt-1">Número que define a ordem de exibição (menor = primeiro)</p>
                                @error('order')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <a href="{{ route('admin.experiences.index') }}" class="btn-secondary mr-3">
                                Cancelar
                            </a>
                            <button type="submit" class="btn-primary">
                                Salvar Experiência
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 