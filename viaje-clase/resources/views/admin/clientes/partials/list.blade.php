<div>
    <table class="w-full bg-white shadow-lg">
        <thead>
        <tr class="border-b-2 border-orange-500 py-4 uppercase">
            <th class="py-2">Nif</th>
            <th class="py-2 text-left">Nombre</th>
            <th class="py-2 w-32">Alta</th>
            <th class="py-2 w-32">Foto</th>
            <th class="py-2 w-32">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr class="even:bg-gray-100 odd:bg-white">
                <td class="py-1 px-2 text-center">{{$cliente->nif}}</td>
                <td class="py-1 px-2">
                    {{$cliente->apellido1}} {{$cliente->apellido2}}, {{$cliente->nombre}}
                </td>
                <td class="py-1 px-2 text-center">{{date('d/m/Y',strtotime($cliente->created_at))}}</td>
                <td class="py-1 px-2 text-center align-middle">
                    FOTO
                </td>
                <td class="py-1 px-2 text-center">
                    <a href="{{route('admin.clientes.show',$cliente->id)}}">
                        <x-buttons.button-table action="show"/>
                    </a>
                    <a href="{{route('admin.clientes.edit',$cliente->id)}}">
                        <x-buttons.button-table action="update"/>
                    </a>
                    <x-share.confirm-delete :open="false" :url="route('admin.clientes.destroy',$cliente->id)">

                        <p>¿Confirme el borrado del cliente de nif {{ $cliente->nif }}.</p>

                    </x-share.confirm-delete>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
