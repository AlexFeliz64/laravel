@props(['itemName', 'itemValue', 'placeholder', 'readonly'])

<div>
    <input type="text"
           name="{{ $itemName }}"
           placeholder="{{ $placeholder }}"
           class="w-full px-2 py-1
           @error($itemName) border border-red-500 @enderror"
           value="{{ old($itemName,$itemValue ) }}"
           @if($readonly ?? false) readonly @endif
    >
    @error($itemName)
        <div class="bg-red-500 text-xs">
            {!! $message !!}
        </div>
    @enderror
</div>
