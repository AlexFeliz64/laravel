<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-center">ADMINISTRACIÓN DE VIAJES</h1>
    </x-slot>

    <a href="{{ route('admin.viajes.create') }}" class="flex justify-center">
        <x-button.new-button/>
    </a>

    <div class="m-4 p-8 rounded shadow border border-blue-600 bg-sky-100">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md table-striped">
            <thead>
            <tr class="bg-blue-200 text-black">
                <th class="py-2 px-4 text-left">Referencia</th>
                <th class="py-2 px-4 text-left">Título</th>
                <th class="py-2 px-4 text-left">Slug</th>
                <th class="py-2 px-4 text-left">Precio</th>
                <th class="py-2 px-4 text-left">Participantes</th>
                <th class="py-2 px-4 text-left">Salida</th>
                <th class="py-2 px-4 text-left">Llegada</th>
                <th class="py-2 px-4 text-left">Activo</th>
                <th class="py-2 px-4 text-left">Foto</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($viajes as $viaje)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->referencia }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->titulo }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->slug }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->precio ?? '-' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->participantes ?? '0' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->salida ?? 'Sin fecha de salida' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $viaje->llegada ?? 'Sin fecha de llegada' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">
                        @if ($viaje->activo)
                            <span class="text-green-600">Sí</span>
                        @else
                            <span class="text-red-600">No</span>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">Sin foto</td>
                    <td><a href="{{ route('admin.viajes.edit', $viaje->id) }}">
                            <x-button.edit-table-button/>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.viajes.destroy', $viaje->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <x-button.delete-table-button/>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin.viajes.show', $viaje->id) }}">
                            <x-button.show-table-button/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="12" class="p-8 text-gray-700 descripcion-cell">
                        <div>
                            <p><span class="font-semibold">Descripción:</span> {{ $viaje->descripcion ?? 'Sin descripción' }}</p>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
