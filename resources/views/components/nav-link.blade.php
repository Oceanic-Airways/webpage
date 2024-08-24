@props(['active'])

@php
$classes = ($active ?? false)
? 'font-bold text-blue-700 underline-offset-2 hover:text-blue-700 border-b-4 rounded border-[#1f7be7]
focus:outline-none'
: 'font-bold text-slate-700 underline-offset-2 hover:text-blue-700 hover:border-b-4 hover:rounded hover:border-[#1f7be7]
focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>