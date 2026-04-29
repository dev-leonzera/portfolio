<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-red-500/10 border border-red-500/20 rounded-xl font-bold text-[10px] text-red-500 uppercase tracking-[0.2em] hover:bg-red-500 hover:text-white transition duration-300']) }}>
    {{ $slot }}
</button>
