<x-guest-layout>
    <x-slot name="header">
        ZONA DE ADMINISTRACIÓN
    </x-slot>

    <a href="{{route("admin.proveedores.create")}}"
    class="border border-teal-800 bg-teal-400 rounded hover:ring-2 hover:ring-amber-600 px-2">Nuevo</a>

    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <table class="w-full">
            <thead>
                <tr>
                    <th>NIF</th>
                    <th class="text-left">Nombre</th>
                    <th>Pais</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td class="text-center">
                            {{$proveedor->nif}}
                        </td>
                        <td class="">
                            {{$proveedor->nombre}}
                        </td>
                        <td class="text-center">
                            {{$proveedor->pais}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</x-guest-layout>
