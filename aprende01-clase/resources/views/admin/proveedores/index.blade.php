<x-guest-layout>
    <x-slot name="header">
        ZONA DE ADMINISTRACIÓN
    </x-slot>

    <a href="{{route("admin.proveedores.create")}}"
    class="border border-teal-800 bg-teal-400 rounded hover:ring-2 hover:ring-amber-600 px-2">Nuevo</a>

    <div class="m-4 p-8 rounded shadow border border-fuchsia-600 bg-amber-200">
        <table class="table-striped w-full">
            <thead>
                <tr>
                    <th>NIF</th>
                    <th class="">Razón Social/Nombre</th>
                    <th class="">Autonomo</th>
                    <th class="text-center">Telefono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td class="text-center">
                            {{$proveedor->nif}}
                        </td>
                        <td class="">
                            @if($proveedor->autonomo)
                                <span class="text-amber-700" title="Persona fisica">
                                    [PF]
                                    {{$proveedor->nombre}}{{$proveedor->apellido1}}{{$proveedor->apellido2}}
                                </span>
                            @else
                                <span class="text-amber-700" title="Persona jurídica">
                                    [PJ]
                                    {{$proveedor->razon_social}}
                                </span>
                            @endif
                        </td>
                        <td class="text-center px-2 py-1 rounded">
                            @if($proveedor->autonomo)
                                <span class="bg-amber-700" title="Persona fisica">
                                    SI
                                </span>
                            @else
                                <span class="text-teal-700" title="Persona jurídica">
                                    NO
                                </span>
                            @endif
                        </td>
                        <td class="text-center">
                            {{$proveedor->telefono}}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                        <div>
                            <span class="font-semibold">Dirección</span>
                            {{$proveedor->direccion}}
                            <br>
                            <span class="font-semibold">Observaciones</span>
                            {{$proveedor->observaciones}}
                        </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</x-guest-layout>
