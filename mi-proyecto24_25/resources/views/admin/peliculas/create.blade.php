<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                {{ __('Administracion de Peliculas') }} - {{ __('NUEVA PELICULA') }}
            </h2>
            <a href="{{route('admin.peliculas.create')}}"
               class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                <i class="fa-solid fa-plus fa-lg"></i>
            </a>
        </div>
    </x-slot>

    <form action="{{ route('admin.peliculas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.peliculas.partials.form',
        ['title'=> __('Nueva Pelicula'),
        'readonly'=>false,
        'submit'=>true])
    </form>

</x-app-layout>
