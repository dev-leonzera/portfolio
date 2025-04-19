<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Experiência Profissional') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.experiences.update', $experience) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Cargo -->
                            <div class="md:col-span-2">
                                <label for="position" class="form-label">Cargo</label>
                                <input type="text" name="position" id="position" class="form-input" value="{{ old('position', $experience->position) }}" required>
                                @error('position')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Empresa -->
                            <div class="md:col-span-2">
                                <label for="company" class="form-label">Empresa</label>
                                <input type="text" name="company" id="company" class="form-input" value="{{ old('company', $experience->company) }}" required>
                                @error('company')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Descrição -->
                            <div class="md:col-span-2">
                                <label for="description" class="form-label">Descrição</label>
                                <textarea name="description" id="description" rows="4" class="form-input">{{ old('description', $experience->description) }}</textarea>
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
                                            <option value="01" {{ old('start_month', substr($experience->year_start, 5, 2)) == '01' ? 'selected' : '' }}>Janeiro</option>
                                            <option value="02" {{ old('start_month', substr($experience->year_start, 5, 2)) == '02' ? 'selected' : '' }}>Fevereiro</option>
                                            <option value="03" {{ old('start_month', substr($experience->year_start, 5, 2)) == '03' ? 'selected' : '' }}>Março</option>
                                            <option value="04" {{ old('start_month', substr($experience->year_start, 5, 2)) == '04' ? 'selected' : '' }}>Abril</option>
                                            <option value="05" {{ old('start_month', substr($experience->year_start, 5, 2)) == '05' ? 'selected' : '' }}>Maio</option>
                                            <option value="06" {{ old('start_month', substr($experience->year_start, 5, 2)) == '06' ? 'selected' : '' }}>Junho</option>
                                            <option value="07" {{ old('start_month', substr($experience->year_start, 5, 2)) == '07' ? 'selected' : '' }}>Julho</option>
                                            <option value="08" {{ old('start_month', substr($experience->year_start, 5, 2)) == '08' ? 'selected' : '' }}>Agosto</option>
                                            <option value="09" {{ old('start_month', substr($experience->year_start, 5, 2)) == '09' ? 'selected' : '' }}>Setembro</option>
                                            <option value="10" {{ old('start_month', substr($experience->year_start, 5, 2)) == '10' ? 'selected' : '' }}>Outubro</option>
                                            <option value="11" {{ old('start_month', substr($experience->year_start, 5, 2)) == '11' ? 'selected' : '' }}>Novembro</option>
                                            <option value="12" {{ old('start_month', substr($experience->year_start, 5, 2)) == '12' ? 'selected' : '' }}>Dezembro</option>
                                        </select>
                                        @error('start_month')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="start_year" class="block text-sm text-gray-600">Ano</label>
                                        <input type="number" name="year_start" id="start_year" class="form-input" value="{{ old('year_start', substr($experience->year_start, 0, 4)) }}" required min="1900" max="2100">
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
                                            <option value="01" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '01' ? 'selected' : '' }}>Janeiro</option>
                                            <option value="02" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '02' ? 'selected' : '' }}>Fevereiro</option>
                                            <option value="03" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '03' ? 'selected' : '' }}>Março</option>
                                            <option value="04" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '04' ? 'selected' : '' }}>Abril</option>
                                            <option value="05" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '05' ? 'selected' : '' }}>Maio</option>
                                            <option value="06" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '06' ? 'selected' : '' }}>Junho</option>
                                            <option value="07" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '07' ? 'selected' : '' }}>Julho</option>
                                            <option value="08" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '08' ? 'selected' : '' }}>Agosto</option>
                                            <option value="09" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '09' ? 'selected' : '' }}>Setembro</option>
                                            <option value="10" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '10' ? 'selected' : '' }}>Outubro</option>
                                            <option value="11" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '11' ? 'selected' : '' }}>Novembro</option>
                                            <option value="12" {{ old('end_month', $experience->year_end ? substr($experience->year_end, 5, 2) : '') == '12' ? 'selected' : '' }}>Dezembro</option>
                                        </select>
                                        @error('end_month')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="end_year" class="block text-sm text-gray-600">Ano</label>
                                        <input type="number" name="year_end" id="end_year" class="form-input" value="{{ old('year_end', $experience->year_end ? substr($experience->year_end, 0, 4) : '') }}" min="1900" max="2100">
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
                                <input type="number" name="order" id="order" class="form-input" value="{{ old('order', $experience->order) }}" required>
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
                                Atualizar Experiência
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 