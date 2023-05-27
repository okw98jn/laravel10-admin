<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/scss/admin.scss', 'resources/js/app.js'])
</head>

<body class="body-color">
    <x-admin.app.side />
    <div class="w-full">
        <x-admin.app.header />
        <div class="container px-4 pt-2 sm:px-6 md:px-8 lg:pl-72">
            {{ $slot }}
            @if (session()->has('message'))
                <x-layouts.alert-message message="{{ session('message') }}" />
            @endif
        </div>
    </div>
</body>

</html>
