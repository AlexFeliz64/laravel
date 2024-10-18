<x-guest-layout>
    <x-slot name="header">
        ZONA DE ADMINISTRACIÓN
    </x-slot>

    <a href="{{route("admin.articulos.create")}}"
    class="border border-teal-800 bg-teal-400 rounded hover:ring-2 hover:ring-amber-600 px-2">Nuevo</a>

    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <table class="w-full">
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th class="text-left">Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articulos as $articulo)
                    <tr>
                        <td class="text-center">
                            {{$articulo->ref}}
                        </td>
                        <td class="">
                            {{$articulo->descripcion}}
                        </td>
                        <td class="text-center">
                            {{$articulo->precio}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</x-guest-layout>
