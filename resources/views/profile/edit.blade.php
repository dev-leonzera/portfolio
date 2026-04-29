<x-admin-layout>
    <x-slot name="header">
        Perfil
    </x-slot>

    <div class="space-y-12">
        <div class="glass-card p-10">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="glass-card p-10">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="glass-card p-10 border-red-500/10">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-admin-layout>
