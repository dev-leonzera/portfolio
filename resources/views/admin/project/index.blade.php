<x-admin-layout>
    <x-slot name="header">
        Projetos
    </x-slot>

    @if (session('success'))
        <div class="glass-card border-green-500/30 text-green-400 px-6 py-4 rounded-xl mb-8 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-bold uppercase tracking-widest">{{ session('success') }}</span>
        </div>
    @endif

    <div class="glass-card overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-bold font-outfit">Vitrine de Projetos</h3>
                <a href="{{ route('admin.projects.create') }}" class="btn-premium py-2 px-6 text-[10px]">
                    Novo Projeto
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Preview</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Título</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Tecnologias</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Ordem</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse ($projects as $project)
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="px-6 py-4">
                                    @if($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="h-12 w-20 rounded-lg object-cover border border-white/10 group-hover:border-gold-accent/30 transition-colors">
                                    @else
                                        <div class="h-12 w-20 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
                                            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm font-bold text-white">{{ $project->title }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-1">
                                        @foreach(explode(',', $project->technologies) as $tech)
                                            <span class="text-[9px] uppercase font-bold px-2 py-0.5 bg-white/5 text-gray-400 rounded-md">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs text-gray-500 font-medium">{{ $project->order }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end space-x-4">
                                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-gray-400 hover:text-gold-accent transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir este projeto?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-400 hover:text-red-500 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-20 text-center">
                                    <p class="text-gray-500 italic">Nenhum projeto cadastrado.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>