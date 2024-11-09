@php
$classes = "p-4 bg-black/5 flex rounded-xl border border-black/20 hover:border-blue-800 group transition-colors duration-300";
@endphp

<div {{$attributes->merge(['class' => $classes])}}>
    {{ $slot }}
</div>