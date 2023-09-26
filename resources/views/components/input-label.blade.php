@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-sm text-white']) }}>
    {{ $value ?? $slot }}
</label>
