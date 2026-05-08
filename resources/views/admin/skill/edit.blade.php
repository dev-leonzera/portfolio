<x-admin-layout>
    <x-slot name="header">
        Editar Habilidade
    </x-slot>

    <div class="max-w-3xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="form-label-premium">Nome da Habilidade</label>
                    <input type="text" name="name" id="name" class="form-input-premium" value="{{ old('name', $skill->name) }}" placeholder="Ex: PHP, Laravel, Vue.js..." required>
                    @error('name')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="icon" class="form-label-premium">Ícone (Slug ou URL)</label>
                    <input type="text" name="icon" id="icon" class="form-input-premium" value="{{ old('icon', $skill->icon) }}" placeholder="Ex: php, laravel, ou https://exemplo.com/icon.svg">
                    <p class="text-[9px] text-gray-600 mt-2 ml-1 uppercase tracking-tighter">Use o slug do <a href="https://simpleicons.org/" target="_blank" class="text-gold-accent hover:underline">Simple Icons</a> ou uma URL direta para o ícone.</p>
                    @error('icon')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category" class="form-label-premium">Categoria</label>
                    <input type="text" name="category" id="category" class="form-input-premium" value="{{ old('category', $skill->category) }}" placeholder="Ex: Linguagens, Frameworks, Soft Skills..." list="categories" required>
                    <datalist id="categories">
                        <option value="Linguagens">
                        <option value="Frameworks">
                        <option value="Bibliotecas">
                        <option value="Banco de Dados">
                        <option value="DevOps">
                        <option value="Ferramentas">
                        <option value="Soft Skills">
                    </datalist>
                    @error('category')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="percentage" class="form-label-premium">Nível de Domínio (%)</label>
                        <input type="number" name="percentage" id="percentage" class="form-input-premium" value="{{ old('percentage', $skill->percentage) }}" min="0" max="100" required>
                        <p class="text-[9px] text-gray-600 mt-2 ml-1 uppercase tracking-tighter">Valor entre 0 e 100</p>
                        @error('percentage')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="order" class="form-label-premium">Ordem de Exibição</label>
                        <input type="number" name="order" id="order" class="form-input-premium" value="{{ old('order', $skill->order) }}" min="0" required>
                        <p class="text-[9px] text-gray-600 mt-2 ml-1 uppercase tracking-tighter">Define a posição na lista (menor = primeiro)</p>
                        @error('order')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.skills.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Atualizar Habilidade
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>