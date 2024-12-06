<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administracion de Generos') }} - {{ __('NUEVO GENERO') }}
            </h2>
            <div class="flex space-x-2"> <!-- Cambia el espaciado aquí -->
                <a href="{{route('admin.generos.index')}}"
                   class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                    <i class="fa-solid fa-house"></i>
                </a>
                <a href="{{route('admin.generos.create')}}"
                   class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                    <i class="fa-solid fa-plus fa-lg"></i>
                </a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.generos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.generos.partials.form',
        ['title'=> __('Nuevo Genero'),
        'submit'=>true])
    </form>

</x-app-layout>
