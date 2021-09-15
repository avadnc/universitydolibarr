<x-app-layout>
    <!-- hero -->
    <section class="bg-cover bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500"
        style="background-image: url({{ asset('image/home/hero.jpg') }});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 w:lg-1/2">
                <h1 class="text-white font-bold text-3xl">Domina los Negocios con Dolibarr</h1>
                <p class="text-white text-lg mt-2 mb-4">University Dolibarr te ofrece los mejores cursos para aprender a
                    implementar, desarrollar y adaptar Dolibarr</p>
                    @livewire('search')
            </div>
        </div>
    </section>
    <!-- ./ -->

    <!-- Contenido -->
    <section class="mt-24">
        <h2 class="text-gray-600 text-center text-3xl mb-6">{{ __('Content') }}</h2>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/computer-1373684_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Cursos para desarolladores</h3>
                    <p class="text-sm text-gray-500">Requieres un módulo para Dolibarr? nuestros cursos te brindarán la oportunidad de crear tus propios módulos y luego venderlos en el marketplace de Dolistore</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/computer-767781_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Cursos para administrativos</h3>
                    <p class="text-sm text-gray-500">Deseas aprender como utilizar Dolibarr? aquí te explicamos como hacerlo, que debes tener en cuenta a la hora de usarlo, cuales son sus herramientas para facilitar el trabajo y no tener duplicidad de documentos.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/home-office-1207834_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Cursos para integradores</h3>
                    <p class="text-sm text-gray-500">Dolibarr desde 0, aprende a implementarlo en cualquier negocio. Nuestros instructores te guiarán paso a paso en el análisis del negocio, su estudio y planificación llegando al final al despliegue en la empresa.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/keyboard-886462_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Dolibarr e-Commerce</h3>
                    <p class="text-sm text-gray-500">Aprende a conectar tu Dolibarr a un e-Commerce como Prestashop, WooCommerce, Shopify o... mucho mejor, crea tu propio e-Commerce conectado vía REST al ERP</p>
                </header>
            </article>
        </div>
    </section>
    <!-- ./ -->

    <!-- Llamado a la acción -->

    <section class="mt-24 bg-gray-700 py-12">
        <h2 class="text-center text-white text-3xl">{{ __('Check our promotions') }}</h2>
        <p class="text-center text-white">Consulta nuestras promociones mas calientes</p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index') }}"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Promociones
            </a>
        </div>
    </section>

    <!-- ./ -->

    <!-- ultimos cursos -->
    <section class="my-24">
        <h2 class="text-center text-3xl text-gray-600">{{ __('Last Courses') }}</h2>
        <p class="text-center text-gray-600 text-sm mb-6">Últimos cursos publicados</p>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                  <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>
</x-app-layout>
