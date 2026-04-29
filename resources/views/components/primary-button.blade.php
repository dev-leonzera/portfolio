<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn-premium py-4 px-10 text-xs text-center']) }}>
    {{ $slot }}
</button>
