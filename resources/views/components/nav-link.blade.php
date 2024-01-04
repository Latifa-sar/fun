@props(['active' , 'navigate'])

@php
$classes = $active ?? false
            ? 'inline-flex items-center items-center hover:text-yellow-500 text-lg  text-blue-500 '
            : 'inline-flex items-center hover:text-yellow-500 text-lg text-blue-500 '
@endphp

<a {{ ($navigate ?? true ? 'wire:navigate' : '')}} wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
