@props(['size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 px-3 font-bold py-1 rounded-xl text-2xs transition-colors duration-300';

    if ($size === 'base') {
        $classes .= 'px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= 'px-3 py-1 text-2xs';
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>
