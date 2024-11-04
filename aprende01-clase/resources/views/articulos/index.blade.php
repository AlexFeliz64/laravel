<x-guest-layout>
    <x-slot name="header">
        ARTICULOS
    </x-slot>
    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <ul>
            @foreach ($articulos as $articulos)
                <li>{{ $articulos->ref }} - {{$articulos->descripcion}}</li>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
