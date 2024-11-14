<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administración de Clientes') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="mx-auto sm:px-6">
            <div class="bg-white shadow-xl sm:rounded-lg px-4">
                @include('admin.clientes.partials.list')
            </div>
        </div>
    </div>

</x-app-layout>
