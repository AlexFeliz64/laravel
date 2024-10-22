<x-guest-layout>
    <x-slot name="header">
        HOLA
    </x-slot>

    <div class="m-4 p-8 rounded shadow border-fuchsia-600 bg-amber-200">
        <ul>
            @foreach($proveedores as $proveedor)
                <li>{{$proveedor->nif}} - {{$proveedor->nombre}}</li>
            @endforeach
        </ul>
    </div>

    <x-slot name="footer">
        &copy: I.E.S Castelar
    </x-slot>

</x-guest-layout>
