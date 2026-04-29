<x-admin-layout>
    <x-slot name="header">
        Mensagens
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
            <h3 class="text-xl font-bold font-outfit mb-8 text-white uppercase tracking-wider">Contatos Recebidos</h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Remetente</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Assunto</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Data</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse ($contacts as $item)
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-bold text-white">{{ $item->name }}</span>
                                        <span class="text-[10px] text-gray-500 lowercase">{{ $item->email }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm text-gray-400">{{ $item->subject }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs text-gray-500">{{ $item->created_at->format('d/m/Y H:i') }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end space-x-4">
                                        <a href="{{ route('admin.contacts.show', $item) }}" class="text-gray-400 hover:text-gold-accent transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.contacts.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir este contato?')">
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
                                <td colspan="4" class="px-6 py-20 text-center">
                                    <p class="text-gray-500 italic">Nenhuma mensagem recebida.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($contacts->hasPages())
                <div class="mt-8">
                    {{ $contacts->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>