@props(['pelicula', 'submit' => true, 'readonly' => false])

<div class="mx-auto px-8">

    <div class="w-full border p-2 bg-white shadow-lg rounded-lg grid grid-cols-12 gap-2">
        <div class="col-span-12 p-1 bg-gray-300 uppercase tracking-widest font-semibold text-lg text-center">
            {{ $title }}
        </div>

        <!-- Primera fila: Portada -->
        <div class="col-span-12 md:col-span-6">
            <x-inputs.input-image-label id="portada" name="portada" label="Portada"
                                        :item="$pelicula->portada" readonly="{{$readonly}}"/>
        </div>

        <!-- Segunda fila: Título, Género -->
        <div class="col-span-12 md:col-span-6">
            <x-inputs.input-text-label id="titulo" name="titulo" label="Título"
                                       :item="$pelicula->titulo" readonly="{{$readonly}}"/>
        </div>
        <div class="col-span-12 md:col-span-6">
            <x-inputs.input-text-label id="genero" name="genero" label="Género"
                                       :item="$pelicula->genero->nombre" readonly="{{$readonly}}"/>
        </div>

        <!-- Tercera fila: Fecha de lanzamiento, Duración -->
        <div class="col-span-12 md:col-span-6">
            <x-inputs.input-date-label id="fechaLanzamiento" name="fecha_lanzamiento" label="Fecha de Lanzamiento"
                                       :item="$pelicula->fecha_lanzamiento" readonly="{{$readonly}}"/>
        </div>
        <div class="col-span-12 md:col-span-6">
            <x-inputs.input-number-label id="duracion" name="duracion" label="Duración (minutos)"
                                       :item="$pelicula->duracion" readonly="{{$readonly}}"/>
        </div>

        <!-- Cuarta fila: Director -->
        <div class="col-span-12 md:col-span-6">
            <x-inputs.input-text-label id="director" name="director" label="Director"
                                       :item="$pelicula->director" readonly="{{$readonly}}"/>
        </div>

        <!-- Quinta fila: Sinopsis -->
        <div class="col-span-12">
            <x-inputs.textarea-label id="sinopsis" name="sinopsis" label="Sinopsis"
                                     :item="$pelicula->sinopsis" :readonly="$readonly"/>
        </div>

        @if($submit)
            <div class="col-span-12 text-right p-1 bg-gray-300">
                <x-buttons.button-form-save/>
            </div>
        @endif
    </div>
</div>
