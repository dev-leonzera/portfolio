<x-admin-layout>
    <x-slot name="header">
        Novo Post
    </x-slot>

    <div class="max-w-5xl">
        <div class="glass-card p-10">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <div>
                    <label for="title" class="form-label-premium">Título do Artigo</label>
                    <input type="text" name="title" id="title" class="form-input-premium" value="{{ old('title') }}" placeholder="Um título impactante para o seu post" required>
                    @error('title')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="form-label-premium">Conteúdo (Markdown suportado)</label>
                    <textarea name="content" id="content" rows="15" class="form-input-premium" placeholder="Escreva seu artigo aqui..." required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="image" class="form-label-premium">Imagem de Capa</label>
                        <div class="relative group/file">
                            <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*">
                            <div class="w-full bg-white/5 border border-white/5 border-dashed rounded-xl py-6 px-6 text-center group-hover/file:border-gold-accent/30 transition duration-300">
                                <div class="text-gold-accent mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <p class="text-[10px] text-gray-400">Selecionar Capa</p>
                            </div>
                        </div>
                        @error('image')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="published_at" class="form-label-premium">Data de Publicação</label>
                        <input type="datetime-local" name="published_at" id="published_at" class="form-input-premium py-3" value="{{ old('published_at', date('Y-m-d\TH:i')) }}">
                        @error('published_at')
                            <p class="text-red-500 text-[10px] uppercase font-bold mt-2 ml-1 tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-white/5">
                    <a href="{{ route('admin.posts.index') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="btn-premium py-4 px-10 text-xs">
                        Publicar Artigo
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>