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
                                    <p><strong>Género:</strong> {{ $pelicula->genero }}</p>
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
                        </div>
                    </x-share.window-view>
                </div>

            </div>
        @endforeach
    </div>
    <!-- Paginación -->
    <div class="mt-6">
        {{ $peliculas->links() }}
    </div>
</div>
