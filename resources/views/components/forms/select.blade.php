@props(['label', 'name'])

@php
$defaults = [
'id' => $name,
'name' => $name,
'class' => 'rounded-xl bg-black/5 border border-black/20 px-5 py-4 w-full'
];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>