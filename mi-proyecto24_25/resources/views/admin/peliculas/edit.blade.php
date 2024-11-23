<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                {{ __('Administracion de Peliculas') }} - {{ __('ACTUALIZAR PELICULA') }}
            </h2>
            <a href="{{route('admin.peliculas.create')}}"
               class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                <i class="fa-solid fa-plus fa-lg"></i>
            </a>
        </div>
    </x-slot>

    <form action="{{ route('admin.peliculas.update', $pelicula->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('admin.peliculas.partials.form',
        ['title'=> __('Actualizar Pelicula'),
        'readonly'=>false,
        'submit'=>true])
    </form>

    <div class="bg-white shadow-xl rounded-lg rounded-r-lg p-4 mt-4">

        @include('admin.peliculas.partials.list')

    </div>

</x-app-layout>
