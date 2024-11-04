<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-center text-fuchsia-700">ADMINISTRACIÓN DE CLIENTES</h1>
        <h2 class="text-xl font-semibold text-center text-gray-700">MOSTRAR CLIENTE</h2>
    </x-slot>
    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">

        @include('admin.clientes.partials.form', ['readonly'=>true])

    </div>

</x-app-layout>
