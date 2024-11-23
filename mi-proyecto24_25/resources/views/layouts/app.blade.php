<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('adminicon.ico') }}">
        <title>{{ config('app.name', 'Zona Administración') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">

        <x-menus.menu-admin/>

        <header>
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            {{-- Mensajes flash--}}

            <x-alerts.alert-success>{{session('alertSuccess')??null}}</x-alerts.alert-success>
            <x-alerts.alert-error>{{session('alertError')??null}}</x-alerts.alert-error>
            <x-alerts.alert-warning>{{session('alertWarning')??null}}</x-alerts.alert-warning>
            <x-alerts.alert-info>{{session('alertInfo')??null}}</x-alerts.alert-info>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    </body>
</html>
