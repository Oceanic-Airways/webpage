@props(['active'])

@php
$classes = ($active ?? false)
? 'w-full text-lg font-bold text-blue-700 focus:underline'
: 'w-full text-lg font-medium text-slate-700 focus:underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>