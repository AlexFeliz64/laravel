<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-center">ADMINISTRACIÓN DE EMPLEADOS</h1>
    </x-slot>

    <a href="{{ route('admin.empleados.create') }}" class="flex justify-center">
        <x-button.new-button/>
    </a>

    <div class="m-4 p-8 rounded shadow border border-blue-600 bg-sky-100">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md table-striped">
            <thead>
            <tr class="bg-blue-200 text-black">
                <th class="py-2 px-4 text-left">NIF</th>
                <th class="py-2 px-4 text-left">Nombre</th>
                <th class="py-2 px-4 text-left">Apellido 1</th>
                <th class="py-2 px-4 text-left">Apellido 2</th>
                <th class="py-2 px-4 text-left">Fecha de Nacimiento</th>
                <th class="py-2 px-4 text-left">Activo</th>
                <th class="py-2 px-4 text-left">Foto</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $empleado->nif }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $empleado->nombre }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $empleado->apellido1 }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $empleado->apellido2 ?? '-' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">{{ $empleado->fecha_nacimiento ?? '-' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">
                        @if ($empleado->activo)
                            <span class="text-green-600">Sí</span>
                        @else
                            <span class="text-red-600">No</span>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200 text-left">Sin foto</td>
                    <td><a href="{{ route('admin.empleados.edit', $empleado->id) }}">
                            <x-button.edit-table-button/>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.empleados.destroy', $empleado->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <x-button.delete-table-button/>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin.empleados.show', $empleado->id) }}">
                            <x-button.show-table-button/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="10" class="p-8 text-gray-700 descripcion-cell">
                        <div>
                            <p><span class="font-semibold">Observaciones:</span> {{ $empleado->observaciones ?? 'Sin observaciones' }}</p>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
