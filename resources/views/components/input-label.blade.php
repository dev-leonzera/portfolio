@props(['value'])

<label {{ $attributes->merge(['class' => 'text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-1 mb-2 block']) }}>
    {{ $value ?? $slot }}
</label>
