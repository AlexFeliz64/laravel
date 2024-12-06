<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>{{ config('app.name', 'MoviesAlecs') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-900 text-white flex flex-col min-h-screen">

<!-- Contenedor Principal -->
<div class="flex-grow flex flex-col">
    <!-- Menú principal -->
    <x-menus.menu-main/>


    <header>
    <!-- Encabezado -->
    @if (isset($header))
        <header class="bg-gray-800 shadow-lg">
            <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

        <x-alerts.alert-success>{{session('alertSuccess')??null}}</x-alerts.alert-success>
        <x-alerts.alert-error>{{session('alertError')??null}}</x-alerts.alert-error>
    </header>

    <!-- Contenido principal -->
    <main class="flex-grow">
        {{ $slot }}
    </main>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Contenido del footer -->
        <div class="flex justify-between items-center">
            <!-- Links -->
            <div class="flex space-x-6">
                <a href="" class="text-sm text-gray-400 hover:text-teal-400">Acerca de</a>
                <a href="" class="text-sm text-gray-400 hover:text-teal-400">Licencia</a>
            </div>

            <!-- Social Media Icons -->
            <div class="flex space-x-6">
                <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-teal-400">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
                <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-teal-400">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-teal-400">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
            </div>

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-teal-400 hover:text-teal-300">
                    <x-share.application-logo-notxt class="block h-9 w-auto fill-current text-teal-800" />
                </a>
            </div>
        </div>

        <div class="mt-6 text-left text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'MoviesAlecs') }}. Todos los derechos reservados.
        </div>
    </div>
</footer>

@stack('modals')

@livewireScripts
</body>
</html>
