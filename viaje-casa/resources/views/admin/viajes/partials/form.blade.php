<div class="form">
    @csrf

    <div class="form-div">
        <label for="referencia">Referencia:</label>
        <x-input.input-text itemName="referencia"
                            :itemValue="$viaje->referencia ?? ''"
                            placeholder="Referencia"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="titulo">Título:</label>
        <x-input.input-text itemName="titulo"
                            :itemValue="$viaje->titulo ?? ''"
                            placeholder="Título"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="slug">Slug:</label>
        <x-input.input-text itemName="slug"
                            :itemValue="$viaje->slug ?? ''"
                            placeholder="Slug"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="precio">Precio:</label>
        <x-input.input-text itemName="precio"
                            :itemValue="$viaje->precio ?? ''"
                            placeholder="Precio"
                            type="number" min="0"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="participantes">Participantes:</label>
        <x-input.input-text itemName="participantes"
                            :itemValue="$viaje->participantes ?? ''"
                            placeholder="Número de participantes"
                            type="number" min="0"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="salida">Fecha de Salida:</label>
        <input type="{{ isset($readonly) ? 'text' : 'datetime-local' }}" name="salida" class="form-input"
               value="{{ $viaje->salida ?? '' }}" {{ isset($readonly) ? 'readonly' : '' }}>
    </div>

    <div class="form-div">
        <label for="llegada">Fecha de Llegada:</label>
        <input type="{{ isset($readonly) ? 'text' : 'datetime-local' }}" name="llegada" class="form-input"
               value="{{ $viaje->llegada ?? '' }}" {{ isset($readonly) ? 'readonly' : '' }}>
    </div>

    <div class="form-div">
        <label for="foto">Foto:</label>
    </div>

    <div class="form-div">
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" placeholder="Descripción" class="form-input" {{ isset($readonly) ? 'readonly' : '' }}>{{ $viaje->descripcion ?? '' }}</textarea>
    </div>

    <div class="form-div">
        <label for="activo" class="inline-flex items-center">
            <input type="checkbox" name="activo" value="1" class="form-checkbox" {{ isset($viaje) && $viaje->activo ? 'checked' : '' }} {{ isset($readonly) ? 'disabled' : '' }}>
            <span class="ml-2">¿Activo?</span>
        </label>
    </div>
</div>
