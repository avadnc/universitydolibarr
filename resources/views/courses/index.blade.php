<x-app-layout>

    <!-- hero -->
    <section class="bg-cover bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500"
        style="background-image: url({{ asset('image/home/hero-cursos.jpg') }});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 w:lg-1/2">
                <h1 class="text-white font-bold text-3xl">Los Mejores Cursos Orientados a Negocios</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, culpa excepturi ratione mollitia quod pariatur.</p>
                @livewire('search')
            </div>
        </div>
    </section>
    <!-- ./ -->

    @livewire('course-index')

</x-app-layout>
