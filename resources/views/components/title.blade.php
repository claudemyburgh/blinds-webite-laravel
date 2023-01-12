@props(['type' =>'h1', 'class' => ''])
@php
    switch ($type) {
        case 'h1':
            $classType = 'font-black text-5xl md:text-6xl tracking-tight';
            break;
        case 'h2':
            $classType = 'font-semibold text-3xl md:text-4xl';
            break;
        case 'h3':
            $classType = 'font-semibold text-xl md:text-2xl';
            break;
        case 'h4':
            $classType = 'font-semibold text-lg md:text-xl';
            break;
        default:
            $classType = 'font-bold text-5xl';
            break;
    }
@endphp

<{{$type}} @class(['tracking-tight text-black leading-tight ', $classType, $class])">
{{ $slot }}
</{{$type}}>

