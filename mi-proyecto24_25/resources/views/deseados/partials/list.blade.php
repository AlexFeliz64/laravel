<div>
    <table class="w-full bg-white shadow-lg text-black">
        <thead>
        <tr class="border-b-2 border-orange-500 py-4 uppercase">
            <th class="py-2 w-32">Portada</th>
            <th class="py-2 w-32">Titulo</th>
            <th class="py-2 w-32">Genero</th>
            <th class="py-2 w-32">Lanzamiento</th>
            <th class="py-2 w-12">Duración</th>
            <th class="py-2 w-32">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($peliculas as $pelicula)
            <tr class="even:bg-gray-100 odd:bg-white">
                <!-- Portada -->
                <td class="py-1 px-2 text-center align-middle">
                    @if(!empty($pelicula->portada))
                        <img title="{{$pelicula->titulo}}"
                             class="object-scale-down h-32 w-32 mx-auto"
                             src="{{ route('images.show', ['fileType'=>'PELICULA-PORTADA', 'fileName'=>$pelicula->portada]) }}">
                    @else
                        <img title="{{$pelicula->titulo}}"
                             class="object-scale-down h-32 w-32 mx-auto"
                             src="{{asset('images/imagen_no_disponible.png')}}">
                    @endif
                </td>
                <!-- Título -->
                <td class="py-1 px-2">
                    {{$pelicula->titulo}}
                </td>

                <!-- Género -->
                <td class="py-1 px-2 text-center">
                    {{$pelicula->genero}}
                </td>

                <!-- Fecha de lanzamiento -->
                <td class="py-1 px-2 text-center">
                    {{date('d/m/Y', strtotime($pelicula->fecha_lanzamiento))}}
                </td>

                <!-- Duración -->
                <td class="py-1 px-2 text-center">
                    {{$pelicula->duracion}} mins
                </td>

                <!-- Acciones (mostrar, borrar) -->
                <td class="py-1 px-2 text-center">
                    <!-- Eliminar de los deseados -->
                    <x-share.confirm-delete :open="false"
                                            :url="route('deseados.destroy', $pelicula->id)">

                        <p>¿Seguro que quieres eliminar "{{ $pelicula->titulo }}" de tu lista de deseados?</p>

                    </x-share.confirm-delete>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $peliculas->links() }}
</div>
