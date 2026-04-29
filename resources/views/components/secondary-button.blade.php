<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-6 py-3 bg-white/5 border border-white/10 rounded-xl font-bold text-[10px] text-gray-400 uppercase tracking-[0.2em] hover:bg-white/10 hover:text-white transition duration-300 disabled:opacity-25']) }}>
    {{ $slot }}
</button>
