<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white text-center" >
            {{ __('Lista de deseados') }}
        </h2>
    </x-slot>

    <div class="shadow-xl p-4">
        @include('deseados.partials.list')
    </div>

</x-guest-layout>
