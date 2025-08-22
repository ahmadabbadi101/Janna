@php
    $classes ='object-contain';
@endphp

<img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Janna" {{ $attributes(["class" => $classes]) }}>
