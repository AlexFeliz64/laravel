<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                {{ __('Administracion de Generos') }}
            </h2>
            <a href="{{route('admin.generos.create')}}"
               class="px-2 py-1 bg-cyan-500 text-white rounded hover:bg-cyan-300">
                <i class="fa-solid fa-plus fa-lg"></i>
            </a>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg p-4">

                @include('admin.generos.partials.list')

            </div>
        </div>
    </div>

</x-app-layout>
