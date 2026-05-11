<x-admin-layout>
    <x-slot name="header">
        Nova Experiência
    </x-slot>

    <div class="max-w-4xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.experiences.store') }}" method="POST" class="space-y-8">
                @csrf
                
                @if ($errors->any())
                    <div class="glass-card border-red-500/30 p-4 mb-8">
                        <ul class="list-disc list-inside text-red-500 text-[10px] uppercase font-bold tracking-widest space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="position" class="form-label-premium">Cargo / Título (PT)</label>
                        <input type="text" name="position" id="position" class="form-input-premium" value="{{ old('position') }}" placeholder="Ex: Desenvolvedor Senior" required>
                        @error('position')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="position_en" class="form-label-premium">Job Title (EN)</label>
                        <input type="text" name="position_en" id="position_en" class="form-input-premium" value="{{ old('position_en') }}" placeholder="Ex: Senior Developer">
                        @error('position_en')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="md:col-span-2">
                        <label for="company" class="form-label-premium">Empresa / Instituição</label>
                        <input type="text" name="company" id="company" class="form-input-premium" value="{{ old('company') }}" placeholder="Ex: Google, Microsoft..." required>
                        @error('company')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="description" class="form-label-premium">Descrição das Atividades (PT)</label>
                        <textarea name="description" id="description" rows="5" class="form-input-premium" placeholder="Descreva suas responsabilidades...">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description_en" class="form-label-premium">Activities Description (EN)</label>
                        <textarea name="description_en" id="description_en" rows="5" class="form-input-premium" placeholder="Describe your responsibilities...">{{ old('description_en') }}</textarea>
                        @error('description_en')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Início -->
                    <div class="space-y-4">
                        <label class="form-label-premium">Período de Início</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <select name="start_month" id="start_month" class="form-input-premium py-3" required>
                                    <option value="" class="bg-deep-black">Mês</option>
                                    @foreach(['01'=>'Jan','02'=>'Fev','03'=>'Mar','04'=>'Abr','05'=>'Mai','06'=>'Jun','07'=>'Jul','08'=>'Ago','09'=>'Set','10'=>'Out','11'=>'Nov','12'=>'Dez'] as $val => $label)
                                        <option value="{{ $val }}" {{ old('start_month') == $val ? 'selected' : '' }} class="bg-deep-black">{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input type="number" name="year_start" id="start_year" class="form-input-premium py-3" value="{{ old('year_start', date('Y')) }}" required min="1900" max="2100" placeholder="Ano">
                            </div>
                        </div>
                    </div>

                    <!-- Término -->
                    <div class="space-y-4">
                        <label class="form-label-premium">Período de Término</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <select name="end_month" id="end_month" class="form-input-premium py-3">
                                    <option value="" class="bg-deep-black">Mês (Atual)</option>
                                    @foreach(['01'=>'Jan','02'=>'Fev','03'=>'Mar','04'=>'Abr','05'=>'Mai','06'=>'Jun','07'=>'Jul','08'=>'Ago','09'=>'Set','10'=>'Out','11'=>'Nov','12'=>'Dez'] as $val => $label)
                                        <option value="{{ $val }}" {{ old('end_month') == $val ? 'selected' : '' }} class="bg-deep-black">{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input type="number" name="year_end" id="end_year" class="form-input-premium py-3" value="{{ old('year_end') }}" min="1900" max="2100" placeholder="Ano">
                            </div>
                        </div>
                        @error('end_date')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="order" class="form-label-premium">Ordem de Exibição</label>
                    <input type="number" name="order" id="order" class="form-input-premium" value="{{ old('order', 0) }}" min="0" required>
                    @error('order')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.experiences.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Salvar Experiência
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>