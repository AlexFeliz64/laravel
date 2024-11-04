<div class="m-4 p-8 rounded shadow border bg-amber-200">
    @csrf
    NIF: <x-input.input-text itemName="nif"
                             :itemValue="$proveedor->nif"
                             placeholder="nif"
                             :readonly="isset($readonly) && $readonly">
    </x-input.input-text>
    Nombre: <input type="text" name="nombre" placeholder="Nombre" class="w-full px-2 py-1"
                   value="{{$proveedor-> nombre}}">
    Razón Social: <input type="text" name="razon_social" placeholder="Razon Social" class="w-full px-2 py-1"
                         value="{{$proveedor-> razon_social}}">
    Dirección: <input type="text" name="direccion" placeholder="Dirección" class="w-full px-2 py-1"
                      value="{{$proveedor-> direccion}}">
    Telefono: <input type="text" name="tlf" placeholder="Telefono" class="w-full px-2 py-1"
                     value="{{$proveedor-> telefono}}">
    ¿Autónomo? <input type="checkbox" name="autonomo" value="SI" class="px-2 py-1"
                      value="{{$proveedor-> autonomo ? 'Checked' : ''}}"> <br>
</div>
