@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#f7a317]']) }}>
    {{ $value ?? $slot }}
</label>
