<x-app-layout>
    <!-- hero -->
    <section class="bg-cover bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500"
        style="background-image: url({{ asset('image/home/hero.jpg') }});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 w:lg-1/2">
                <h1 class="text-white font-bold text-3xl">Domina los Negocios con Dolibarr</h1>
                <p class="text-white text-lg mt-2 mb-4">Univerity Dolibarr te ofrece los mejores cursos para aprender a
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
                    <h3 class="text-center text-xl text-gray-700">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                        maxime aliquid eius eaque quisquam minima expedita quis dolore iusto nesciunt illum
                        reprehenderit</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/computer-767781_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                        maxime aliquid eius eaque quisquam minima expedita quis dolore iusto nesciunt illum
                        reprehenderit</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/home-office-1207834_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                        maxime aliquid eius eaque quisquam minima expedita quis dolore iusto nesciunt illum
                        reprehenderit</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-35 w-full object-cover"
                        src="{{ asset('image/home/keyboard-886462_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h3 class="text-center text-xl text-gray-700">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                        maxime aliquid eius eaque quisquam minima expedita quis dolore iusto nesciunt illum
                        reprehenderit</p>
                </header>
            </article>
        </div>
    </section>
    <!-- ./ -->

    <!-- Llamado a la acción -->

    <section class="mt-24 bg-gray-700 py-12">
        <h2 class="text-center text-white text-3xl">{{ __('Check our promotions') }}</h2>
        <p class="text-center text-white">Lorem ipsum dolor sit.</p>
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
        <p class="text-center text-gray-600 text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Odio, obcaecati!</p>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                  <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>
</x-app-layout>
