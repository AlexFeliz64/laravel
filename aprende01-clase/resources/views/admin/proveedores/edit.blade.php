<x-app-layout>
    <x-slot name="header">
        ADMINISTRACIÓN DE PROVEEDORES - NUEVO PROVEEDOR
    </x-slot>
    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <form action="{{ route('admin.proveedores.update', $proveedor->id) }}">
            @method('PUT')
            @csrf
                @include('admin.proveedores.partials.form')
            <x-button.save-form-button title="Guardar" />

        </form>
    </div>

</x-app-layout>

