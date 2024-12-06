@props(['genero', 'submit' => true])

<div class="mx-auto px-8">

    <div class="w-full border p-2 bg-white shadow-lg rounded-lg grid grid-cols-12 gap-2">
        <div class="col-span-12 p-1 bg-gray-300 uppercase tracking-widest font-semibold text-lg text-center">
            {{ $title }}
        </div>

        <!-- Campo: Nombre del Género -->
        <div class="col-span-12">
            <x-inputs.input-text-label id="nombre" name="nombre" label="Nombre del genero"
                                       :item="$genero->nombre"/>
        </div>

        @if($submit)
            <div class="col-span-12 text-right p-1 bg-gray-300">
                <x-buttons.button-form-save/>
            </div>
        @endif
    </div>
</div>
