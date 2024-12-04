<div class="mb-6 bg-amber-500 border-4 border-red-500">
    <h1>Formulario de Géneros</h1> <!-- Para verificar que se está cargando la vista -->
    <form method="GET" action="{{ route('peliculas') }}">
        <div class="flex items-center space-x-4">
            <!-- Select de géneros -->
            <select name="genero_id" class="border rounded p-2">
                <option value="">Todos los géneros</option>
                @foreach($generos as $genero)
                    <option value="{{ $genero->id }}" {{ request('genero_id') == $genero->id ? 'selected' : '' }}>
                        {{ $genero->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Filtrar
            </button>
        </div>
    </form>
</div>


<div class="container mx-auto mt-6 px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($peliculas as $pelicula)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Portada -->
                <div class="relative h-64">
                    @if(!empty($pelicula->portada))
                        <img src="{{ route('images.show', ['fileType'=>'PELICULA-PORTADA', 'fileName'=>$pelicula->portada]) }}"
                             alt="{{ $pelicula->titulo }}"
                             class="object-cover w-full h-full">
                    @else
                        <img src="{{asset('images/imagen_no_disponible.png')}}"
                             alt="{{ $pelicula->titulo }}"
                             class="object-cover w-full h-full">
                    @endif
                </div>
                <!-- Ventana emergente con la info de la pelicula -->
                <div class="p-4">
                    <x-share.window-view title="{{ $pelicula->titulo }}">
                        <div class="w-full mx-auto bg-white rounded-lg p-6">
                            <div class="flex">
                                <!-- Portada -->
                                <div class="w-1/3">
                                    @if(!empty($pelicula->portada))
                                        <img src="{{ route('images.show', ['fileType'=>'PELICULA-PORTADA', 'fileName'=>$pelicula->portada]) }}"
                                             alt="{{ $pelicula->titulo }}"
                                             class="object-cover w-full h-full">
                                    @else
                                        <img src="{{asset('images/imagen_no_disponible.png')}}"
                                             alt="{{ $pelicula->titulo }}"
                                             class="object-cover w-full h-full">
                                    @endif
                                </div>

                                <!-- Información -->
                                <div class="w-2/3 pl-6">
                                    <h2 class="text-3xl font-bold mb-4">{{ $pelicula->titulo }}</h2>
                                    <p><strong>Género:</strong> {{ $pelicula->genero->nombre }}</p>
                                    <p><strong>Duración:</strong> {{ $pelicula->duracion }} minutos</p>
                                    <p><strong>Lanzamiento:</strong> {{ date('d/m/Y', strtotime($pelicula->fecha_lanzamiento)) }}</p>
                                    <p><strong>Director:</strong> {{ $pelicula->director }}</p>
                                </div>
                            </div>

                            <!-- Sinopsis -->
                            <div class="mt-6">
                                <h3 class="text-xl font-bold mb-2">Sinopsis</h3>
                                <p class="text-gray-700 leading-relaxed">{{ $pelicula->sinopsis }}</p>
                            </div>
                            @auth
                                <div class="mt-4 flex justify-end space-x-3">
                                    <x-share.deseados-confirm
                                        :open="false"
                                        :url="route('deseados.store')"
                                        :pelicula="$pelicula"
                                    />
                                </div>
                            @endauth
                        </div>
                    </x-share.window-view>
                </div>

            </div>
        @endforeach
    </div>
</div>
