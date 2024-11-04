@props(['itemName', 'itemValue', 'placeholder', 'readonly'])

<input type="text"
       name="{{ $itemName }}"
       placeholder="{{ $placeholder }}"
       class="w-full px-2 py-1"
       value="{{ $itemValue }}"
       @if($readonly ?? false) readonly @endif
>
