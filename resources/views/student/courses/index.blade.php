<x-app-layout>
    <div>

        <nav
            class=" bg-gray-800 text-white font-bold w-full flex relative justify-center items-center mx-auto px-8 h-20 mb-6">
            <div class="hidden sm:block flex-shrink flex-grow-0  px-2">
                <div class="inline-block">
                    <ul class="inline-flex items-center max-w-full">
                        <li class="mr-4">Mis cursos</li>
                        <li class="mr-4">Mis datos personales</li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mx-auto mt-8 md:mt-0 md:space-x-10 md:grid grid-cols-3 justify-center md:py-4">
            <div class="mt-8 md:mt-0 lg:justify-end col-span-2">
                <h1 class="text-4xl text-gray-800 text-center md:text-left font-bold mb-6">Lo que estoy aprendiendo:
                </h1>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">



            @foreach ($courses as $course)
                <x-course-card :course="$course"></x-course-card>
            @endforeach

        </div>
    </div>

</x-app-layout>
