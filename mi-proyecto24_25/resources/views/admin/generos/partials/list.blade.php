<div>
    <table class="w-full bg-white shadow-lg">
        <thead>
        <tr class="border-b-2 border-orange-500 py-4 uppercase">
            <th class="py-2 w-32">ID</th>
            <th class="py-2 w-32">Nombre</th>
            <th class="py-2 w-32">Fecha Creación</th>
            <th class="py-2 w-32">Última Actualización</th>
            <th class="py-2 w-32">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($generos as $genero)
            <tr class="even:bg-gray-100 odd:bg-white">
                <!-- ID -->
                <td class="py-1 px-2 text-center align-middle">
                    {{ $genero->id }}
                </td>

                <!-- Nombre -->
                <td class="py-1 px-2 text-center">
                    {{ $genero->nombre }}
                </td>

                <!-- Fecha de creación -->
                <td class="py-1 px-2 text-center">
                    {{ date('d/m/Y', strtotime($genero->created_at)) }}
                </td>

                <!-- Última actualización -->
                <td class="py-1 px-2 text-center">
                    {{ date('d/m/Y', strtotime($genero->updated_at)) }}
                </td>

                <!-- Acciones (mostrar, borrar, editar) -->
                <td class="py-1 px-2 text-center">
                    <a href="{{ route('admin.generos.edit', $genero->id) }}">
                        <x-buttons.button-table action="update"/>
                    </a>
                    <x-share.confirm-delete :open="false"
                                            :url="route('admin.generos.destroy', $genero->id)">

                        <p>¿Confirma el borrado del género "{{ $genero->nombre }}"?</p>

                    </x-share.confirm-delete>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $generos->links() }}
</div>
