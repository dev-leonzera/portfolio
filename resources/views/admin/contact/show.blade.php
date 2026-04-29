<x-admin-layout>
    <x-slot name="header">
        Detalhes da Mensagem
    </x-slot>

    <div class="max-w-5xl">
        <div class="glass-card overflow-hidden">
            <div class="p-10">
                <div class="flex justify-between items-center mb-10 pb-6 border-b border-white/5">
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gold-accent/10 flex items-center justify-center text-gold-accent mr-4">
                            <span class="text-xl font-bold font-outfit">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-white font-outfit">{{ $contact->name }}</h2>
                            <p class="text-xs text-gray-500 font-medium">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.contacts.index') }}" class="text-[10px] font-bold uppercase tracking-widest text-gray-500 hover:text-white transition-colors">
                            Voltar
                        </a>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir esta mensagem?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-[10px] font-bold uppercase tracking-widest text-red-500 hover:text-white transition-colors">
                                Excluir
                            </button>
                        </form>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="md:col-span-1 space-y-8">
                        <div>
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-1">Assunto</label>
                            <p class="text-sm text-gold-accent font-bold">{{ $contact->subject }}</p>
                        </div>
                        <div>
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-1">Data de Envio</label>
                            <p class="text-sm text-white font-medium">{{ $contact->created_at->format('d/M/Y — H:i') }}</p>
                        </div>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-4">Conteúdo da Mensagem</label>
                        <div class="bg-white/5 border border-white/5 rounded-2xl p-8 min-h-[200px]">
                            <p class="text-gray-300 text-sm leading-relaxed whitespace-pre-wrap">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>