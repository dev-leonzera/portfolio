<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="seu@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-white/10 bg-white/5 text-gold-accent shadow-sm focus:ring-gold-accent/30 focus:ring-offset-0 transition-colors" name="remember">
                <span class="ms-2 text-[10px] font-bold uppercase tracking-widest text-gray-500 group-hover:text-gray-300 transition-colors">{{ __('Lembrar de mim') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-[10px] font-bold uppercase tracking-widest text-gray-500 hover:text-gold-accent transition-colors" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha?') }}
                </a>
            @endif
        </div>

        <div class="pt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
