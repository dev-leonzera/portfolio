<section class="space-y-6">
    <header>
        <h2 class="text-xl font-bold text-white font-outfit uppercase tracking-wider">
            {{ __('Excluir Conta') }}
        </h2>

        <p class="mt-2 text-sm text-gray-500 font-light">
            {{ __('Uma vez que sua conta seja excluída, todos os seus recursos e dados serão excluídos permanentemente.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Excluir Minha Conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('admin.profile.destroy') }}" class="p-10">
            @csrf
            @method('delete')

            <h2 class="text-xl font-bold text-white font-outfit">
                {{ __('Tem certeza que deseja excluir sua conta?') }}
            </h2>

            <p class="mt-4 text-sm text-gray-500">
                {{ __('Por favor, insira sua senha para confirmar que deseja excluir permanentemente sua conta.') }}
            </p>

            <div class="mt-8">
                <x-input-label for="password" value="{{ __('Senha') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Sua Senha') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-8 flex justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button>
                    {{ __('Confirmar Exclusão') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
