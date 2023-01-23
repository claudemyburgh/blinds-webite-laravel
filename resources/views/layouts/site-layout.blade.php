<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', config('app.name')) }} | @yield('title', config('app.slogan'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,400;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
</head>
<body class="font-serif antialiased h-full flex flex-col bg-gray-50 overflow-x-hidden overflow-y-scroll">

<a href="#main" class="sr-only">Skip to main</a>

@include('layouts.partials._nav')

<!-- Page Heading -->
@if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <x-wrapper class="py-6">
            {{ $header }}
        </x-wrapper>
    </header>
@endif


<!-- Page Content -->
<main id="main">
    {{ $slot }}
</main>

{{--@include('layouts.partials._stats')--}}

<x-contact-us/>

@include('layouts.partials._footer')
@include('layouts.partials._scroll-top')

<div aria-hidden="true" class="h-full w-full fixed top-0 left-0 blur-3xl -z-10 pointer-events-none opacity-40">
    <div class="absolute h-1/2 -left-12 -top-12 rounded-full w-1/2 bg-primary-500/30  "></div>
    <div class="absolute h-1/2 bottom-0 right-0 rounded-full w-1/2 bg-amber-500/5  "></div>
</div>

@livewireScripts
</body>
</html>
