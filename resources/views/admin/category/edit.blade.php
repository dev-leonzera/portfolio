<x-admin-layout>
    <x-slot name="header">
        Editar Categoria
    </x-slot>

    <div class="max-w-2xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="form-label-premium">Nome da Categoria (PT)</label>
                    <input type="text" name="name" id="name" class="form-input-premium" value="{{ old('name', $category->name) }}" placeholder="Ex: Laravel, Design, Carreira" required>
                    @error('name')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="name_en" class="form-label-premium">Category Name (EN)</label>
                    <input type="text" name="name_en" id="name_en" class="form-input-premium" value="{{ old('name_en', $category->name_en) }}" placeholder="Ex: Development, Strategy">
                    @error('name_en')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.categories.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Atualizar Categoria
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
