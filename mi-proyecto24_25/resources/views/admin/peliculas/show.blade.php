<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administracion de Peliculas') }} - {{ __('CONSULTA PELICULA') }}
            </h2>
            <div class="flex space-x-2"> <!-- Cambia el espaciado aquí -->
                <a href="{{route('admin.peliculas.index')}}"
                   class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                    <i class="fa-solid fa-house"></i>
                </a>
                <a href="{{route('admin.peliculas.create')}}"
                   class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                    <i class="fa-solid fa-plus fa-lg"></i>
                </a>
            </div>
        </div>
    </x-slot>

    @include('admin.peliculas.partials.form',
        ['title'=> __('Consulta Pelicula'),
        'readonly'=>true,
        'submit'=>false])

</x-app-layout>
