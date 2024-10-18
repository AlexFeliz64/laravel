<x-guest-layout>
    <x-slot name="header">
        ZONA DE ADMINISTRACIÓN DE NUEVOS ARTICULOS
    </x-slot>

    <div class="m-4 p-8">

        <form action="{{route('admin.proveedores.store')}}" method="post">
            NIF:
            <input type="text" placeholder="NIF" name="nif"
                    class="w-full px-2 py-1">
            Nombre:
            <input type="text" placeholder="Nombre" name="nombre"
                   class="w-full px-2 py-1">
            País:
            <input type="text" placeholder="País" name="pais"
                   class="w-full px-2 py-1">
            Productos:
            <textarea id="productos" name="productos" class="w-full px-2 py-1" rows="5" placeholder="todos los productos del proveedor" required></textarea>
            <button class="">
                Aceptar
            </button>
        </form>
    </div>

    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <ul>
            @foreach($articulos as $articulo)
                <li>{{$articulo->ref}} - {{$articulo->descripcion}}</li>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
