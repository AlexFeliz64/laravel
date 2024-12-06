<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-200 text-black shadow-xl sm:rounded-lg p-6 text-center mb-8">
                <h3 class="text-3xl font-semibold">Bienvenido al Panel de Control de MoviesAlecs</h3>
                <p class="mt-4 text-lg">Como administrador, tienes el control total de la plataforma.</p>
                <p class="mt-4 text-lg">Aquí podrás añadir nuevos contenidos, actualizar información existente y realizar ajustes a la plataforma según sea necesario.</p>
            </div>

            <div class="flex justify-center mb-8">
                <a href="{{route('admin.peliculas.index')}}" class="bg-blue-600 text-white py-3 px-8 rounded-lg shadow-md hover:bg-blue-700 transition duration-200 text-xl">
                    Gestionar Películas
                </a>
            </div>
            <div class="bg-emerald-300 text-black shadow-xl sm:rounded-lg p-6 text-center mt-8">
                <h3 class="text-2xl font-semibold">Accede a los Generos</h3>
                <p class="mt-4 text-lg">Realiza ajustes y gestiona los generos de MoviesAlecs.</p>
                <div class="flex justify-center mt-6">
                    <a href="{{route('admin.generos.index')}}" class="bg-yellow-600 text-white py-3 px-8 rounded-lg shadow-md hover:bg-yellow-700 transition duration-200 text-xl">
                        Gestionar Generos
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
