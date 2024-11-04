<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-center text-fuchsia-700">ADMINISTRACIÓN DE EMPLEADOS</h1>
        <h2 class="text-xl font-semibold text-center text-gray-700">CREACIÓN DE EMPLEADOS</h2>
    </x-slot>
    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <form action="{{ route('admin.empleados.store') }}" method="post">
            @csrf
            @include('admin.empleados.partials.form')
            <div class="flex justify-center">
                <x-button.save-form-button title="Guardar" class="bt-guardar"/>
            </div>

        </form>
    </div>

</x-app-layout>

