<x-app-layout>
    <x-slot name="header">
        NUEVO ARTICULO
    </x-slot>

    <a href="{{ route('admin.articulos.create')  }}"> Nuevo </a>

    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <form action="{{route('admin.articulos.store')}}" method="POST">
            @csrf
            Referencia:
            <input type="text" placeholder="referencia" name="ref" class="w-full px-2 py-1">
            Descripcion:
            <input type="text" placeholder="descripcion" name="descripcion" class="w-full px-2 py-1">
            Precio:
            <input type="text" placeholder="precio" name="precio" class="w-full px-2 py-1">
            Observaciones:
            <textarea id="observaciones" name="observaciones" class="w-full px-2 py-1" rows="5"
                      placeholder="observaciones del articulo" required>
            </textarea>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded"
                    type="submit"> Aceptar
            </button>
        </form>
    </div>


</x-app-layout>
