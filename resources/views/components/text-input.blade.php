@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-white/5 border border-white/5 rounded-xl py-4 px-6 text-white focus:outline-none focus:border-gold-accent/30 transition duration-300 placeholder:text-gray-700']) }}>
