<x-admin-layout>
    <x-slot name="header">
        Nova Formação
    </x-slot>

    <div class="max-w-4xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.educations.store') }}" method="POST" class="space-y-8">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="university" class="form-label-premium">Universidade / Instituição</label>
                        <input type="text" name="university" id="university" class="form-input-premium" value="{{ old('university') }}" placeholder="Ex: USP, MIT, Rocketseat..." required>
                        @error('university')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="degree" class="form-label-premium">Grau / Curso</label>
                        <input type="text" name="degree" id="degree" class="form-input-premium" value="{{ old('degree') }}" placeholder="Ex: Bacharelado em CC" required>
                        @error('degree')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="year_start" class="form-label-premium">Ano de Início</label>
                        <input type="number" name="year_start" id="year_start" class="form-input-premium" value="{{ old('year_start', date('Y')) }}" min="1900" max="{{ date('Y') + 10 }}" required>
                        @error('year_start')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="year_end" class="form-label-premium">Ano de Conclusão</label>
                        <input type="number" name="year_end" id="year_end" class="form-input-premium" value="{{ old('year_end') }}" min="1900" max="{{ date('Y') + 10 }}" placeholder="Deixe vazio se em curso">
                        @error('year_end')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="description" class="form-label-premium">Descrição / Conquistas</label>
                    <textarea name="description" id="description" rows="5" class="form-input-premium" placeholder="Descreva o que aprendeu ou projetos relevantes...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="order" class="form-label-premium">Ordem de Exibição</label>
                    <input type="number" name="order" id="order" class="form-input-premium" value="{{ old('order', 0) }}" min="0" required>
                    @error('order')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.educations.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Salvar Formação
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>