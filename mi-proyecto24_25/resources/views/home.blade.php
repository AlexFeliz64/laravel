<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-200 text-black shadow-xl sm:rounded-lg p-6 text-center mb-8">
                <h3 class="text-3xl font-semibold">Bienvenido a MoviesAlecs</h3>
                <p class="mt-4 text-lg">En MoviesAlecs, te ofrecemos una plataforma única para explorar un vasto catálogo de películas. Desde los grandes clásicos hasta los últimos estrenos, podrás encontrar todo lo que necesitas para una noche de cine perfecta. Nos apasiona el cine y queremos compartir esa pasión contigo.</p>
                <p class="mt-4 text-lg">Ya sea que te gusten las películas de acción, comedias, dramas o documentales, en MoviesAlecs tienes acceso a contenido exclusivo y recomendaciones personalizadas. ¡Aquí siempre encontrarás algo que te sorprenderá!</p>
                <p class="mt-4 text-lg">¿Estás listo para descubrir tus nuevas películas favoritas? Entonces, ¡es hora de comenzar!</p>
            </div>

            <div class="flex justify-center mb-8">
                <a href="/peliculas" class="bg-blue-600 text-white py-3 px-8 rounded-lg shadow-md hover:bg-blue-700 transition duration-200 text-xl">
                    Explorar las Películas
                </a>
            </div>

            <!-- Aparece cuando no esta registrado -->
            @guest
                <div class="bg-red-950 text-white shadow-xl sm:rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-semibold">¿Te gusta lo que ves?</h3>
                    <p class="mt-4 text-lg">Si te encanta lo que hemos preparado para ti, regístrate en nuestra plataforma y disfruta de todos los beneficios exclusivos. Crea tu cuenta, guarda tus películas favoritas, y accede a contenido especial solo para miembros.</p>
                    <p class="mt-4 text-lg">¡No pierdas la oportunidad de ser parte de nuestra comunidad de cinéfilos!</p>
                    <div class="flex justify-center mt-6">
                        <a href="/register" class="bg-green-600 text-white py-3 px-8 rounded-lg shadow-md hover:bg-green-700 transition duration-200 text-xl">
                            Regístrate Ahora
                        </a>
                    </div>
                </div>
            @endguest

            <!-- Aparece cuando esta registrado -->
            @auth
                <div class="bg-emerald-300 text-black shadow-xl sm:rounded-lg p-6 text-center mt-8">
                    <h3 class="text-2xl font-semibold">Tu Lista de Deseos</h3>
                    <p class="mt-4 text-lg">¡Descubre y guarda las películas que te gustaría ver más tarde! Accede a tu lista de deseos para explorar todas tus opciones de forma rápida y sencilla.</p>
                    <div class="flex justify-center mt-6">
                        <a href="/deseados" class="bg-yellow-600 text-white py-3 px-8 rounded-lg shadow-md hover:bg-yellow-700 transition duration-200 text-xl">
                            Ver Lista de Deseos
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>

</x-guest-layout>
