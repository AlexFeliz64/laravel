<div class="form">
    @csrf

    <div class="form-div">
        <label for="nif">NIF:</label>
        <x-input.input-text itemName="nif"
                            :itemValue="$cliente->nif ?? ''"
                            placeholder="NIF"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="nombre">Nombre:</label>
        <x-input.input-text itemName="nombre"
                            :itemValue="$cliente->nombre ?? ''"
                            placeholder="Nombre"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="apellido1">Apellido 1:</label>
        <x-input.input-text itemName="apellido1"
                            :itemValue="$cliente->apellido1 ?? ''"
                            placeholder="Primer apellido"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="apellido2">Apellido 2:</label>
        <x-input.input-text itemName="apellido2"
                            :itemValue="$cliente->apellido2 ?? ''"
                            placeholder="Segundo apellido"
                            :readonly="isset($readonly) && $readonly"
                            class="form-input"/>
    </div>

    <div class="form-div">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="{{ isset($readonly) ? 'text' : 'date' }}" name="fecha_nacimiento" class="form-input"
               value="{{ $cliente->fecha_nacimiento ?? '' }}" {{ isset($readonly) ? 'readonly' : '' }}>
    </div>

    <div class="form-div">
        <label for="foto">Foto:</label>
    </div>

    <div class="form-div">
        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones" placeholder="Observaciones" class="form-input" {{ isset($readonly) ? 'readonly' : '' }}>{{ isset($cliente) ? $cliente->observaciones : '' }}</textarea>
    </div>

    <div class="form-div">
        <label for="activo">
            <input type="checkbox" name="activo" value="1" class="form-checkbox" {{ isset($cliente) && $cliente->activo ? 'checked' : '' }} {{ isset($readonly) ? 'disabled' : '' }}>
            <span class="ml-2">¿Activo?</span>
        </label>
    </div>
</div>
