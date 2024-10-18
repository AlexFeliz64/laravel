<x-guest-layout>
    <x-slot name="header">
        ZONA DE ADMINISTRACIÓN
    </x-slot>

    <a href="{{route("admin.articulos.create")}}"
    class="border border-teal-800 bg-teal-400 rounded hover:ring-2 hover:ring-amber-600 px-2">Nuevo</a>
    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <ul>
            @foreach($articulos as $articulo)
                <li>{{$articulo->ref}} - {{$articulo->descripcion}}</li>
            @endforeach
        </ul>
    </div>


</x-guest-layout>
