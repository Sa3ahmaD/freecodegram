@props(['active'])

@php
$classes = 'inline-flex items-center px-1 pt-1 text-m font-bold leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
