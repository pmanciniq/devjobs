@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-xs text-gray-500 dark:text-gray-300 uppercase']) }}>
    {{ $value ?? $slot }}
</label>
