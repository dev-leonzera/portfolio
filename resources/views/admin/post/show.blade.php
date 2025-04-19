<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.post.edit', $post) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Editar
                            </a>
                            <form action="{{ route('admin.post.destroy', $post) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
                                    onclick="return confirm('Tem certeza que deseja excluir este post?')">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-gray-600">
                            <strong>Data de Publicação:</strong> 
                            {{ $post->published_at ? $post->published_at->format('d/m/Y H:i') : 'Não publicado' }}
                        </p>
                    </div>

                    @if($post->image)
                        <div class="mb-6">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="max-w-full h-auto rounded-lg">
                        </div>
                    @endif

                    <div class="prose max-w-none">
                        {!! nl2br(e($post->content)) !!}
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.post.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Voltar para Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout> 