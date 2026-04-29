<x-admin-layout>
    <x-slot name="header">
        Experiências
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
                <h3 class="text-xl font-bold font-outfit">Experiências Profissionais</h3>
                <a href="{{ route('admin.experiences.create') }}" class="btn-premium py-2 px-6 text-[10px]">
                    Nova Experiência
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Cargo</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Empresa</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Período</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500">Ordem</th>
                            <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-bold text-gray-500 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse ($experiences as $item)
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="px-6 py-4">
                                    <span class="text-sm font-bold text-white">{{ $item->position }}</span>
                                    @if($item->current)
                                        <span class="ml-2 px-2 py-0.5 bg-gold-accent/10 text-gold-accent text-[8px] font-black uppercase rounded-full">Atual</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm text-gray-400 font-medium">{{ $item->company }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs text-gray-500 uppercase tracking-tighter">
                                        {{ \Carbon\Carbon::createFromDate($item->year_start, $item->start_month, 1)->format('M/Y') }} — 
                                        @if($item->year_end && $item->end_month)
                                            {{ \Carbon\Carbon::createFromDate($item->year_end, $item->end_month, 1)->format('M/Y') }}
                                        @else
                                            Atual
                                        @endif
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs text-gray-600">{{ $item->order }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end space-x-4">
                                        <a href="{{ route('admin.experiences.edit', $item) }}" class="text-gray-400 hover:text-gold-accent transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.experiences.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir esta experiência?')">
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
                                    <p class="text-gray-500 italic">Nenhuma experiência cadastrada.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>