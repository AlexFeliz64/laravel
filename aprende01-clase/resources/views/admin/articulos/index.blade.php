<x-app-layout>
    <x-slot name="header">
        ARTICULOS ADMIN
    </x-slot>

    <a class="border border-teal-800 bg-teal-400 rounded shadow px-2"
       href="{{ route('admin.articulos.create')  }}"> Nuevo </a>

    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <table class="w-full text-left">
            <thead>
            <tr>
                <th>Referencia</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>
                        {{ $articulo->ref }}
                    </td>
                    <td>
                        {{ $articulo->descripcion }}
                    </td>
                    <td>
                        {{ $articulo->precio }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
