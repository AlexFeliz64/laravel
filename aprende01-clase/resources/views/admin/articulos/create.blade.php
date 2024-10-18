<x-guest-layout>
    <x-slot name="header">
        ZONA DE ADMINISTRACIÓN DE NUEVOS ARTICULOS
    </x-slot>

    <div class="m-4 p-8">

        <form action="{{route('admin.articulos.store')}}" method="post">
            Referencia:
            <input type="text" placeholder="referencia" name="ref"
                    class="w-full px-2 py-1">
            Descripcion:
            <input type="text" placeholder="descripcion" name="descripcion"
                   class="w-full px-2 py-1">
            Precio:
            <input type="text" placeholder="precio" name="precio"
                   class="w-full px-2 py-1">
            Observaciones:
            <textarea id="observaciones" name="obvservaciones" class="w-full px-2 py-1" rows="5" placeholder="observaciones sobre articulo" required></textarea>
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
