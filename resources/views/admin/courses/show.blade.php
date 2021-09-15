<x-app-layout>

    <!-- Seccion Header -->
    <section class="bg-gray-700 py-12">

        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover"
                    src="{{ $course->image ? Storage::url($course->image['url']) : asset('image/noimage.png') }}">
            </figure>

            <div class="text-white">
                <h2 class="text-4xl">{{ $course->title }}</h2>
                <h3 class="text-xl mb-2">{{ $course->subtitle }}</h3>
                <p class="mb-2"><i class="fa fa-bar-chart"></i> {{ __('Level') }}:
                    {{ $course->level->name }}</p>
                <p class="mb-2"><i class="fa fa-tags"></i> {{ __('Category') }}:
                    {{ $course->category->name }}</p>
                <p class="mb-2"><i class="fa fa-users"></i> {{ __('Inscribed') }}:
                    {{ $course->students_count }}</p>
                <p><i class="fa fa-star"></i> {{ $course->rating }}</p>
            </div>
        </div>

    </section>

    <!-- Section Description -->


    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 mt-12 mb-12">

        @if (session('info'))
            <div class="lg:col-span-3" x-data={open:true} x-show="open">
                <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                    <p><strong>Error: </strong>{{ session('info') }}</p>
                    <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                        <svg x-on:click="open =!open" class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                            <path
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
            </div>
        @endif

        <div class="order-2 lg:col-span-2 lg:order-1">
            <!-- Goals -->
            <section class="card mb-12">
                <div class="card-body">
                    <h4 class="font-bold text-2xl mb-2">Lo que aprenderás</h4>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @forelse ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fa fa-check text-gray-600 mr-2"></i>
                                {{ $goal->name }}</li>
                        @empty
                            <li class="text-gray-700 text-base">
                                Este curso no tiene asignadas metas</li>
                        @endforelse

                    </ul>
                </div>
            </section>
            <!-- temary -->
            <section>
                <h4 class="font-bold text-3xl mb-2">Temario</h4>

                @forelse ($course->sections as $section)
                    <article class="mb-4 shadow" @if ($loop->first)
                        x-data="{ open: true }"
                    @else
                        x-data="{ open: false }"
                @endif
                >
                <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                    <h5 class="font-bold text-lg text-gray-600  mb-2 ">{{ $section->name }}</h5>
                </header>
                <div class="bg-white py-2 px-4 w-full" x-show="open">
                    <ul class="grid grid-cols-1 gap-2 ">
                        @foreach ($section->lessons as $lesson)
                            <li class="text-gray-600 text-base mb-2"><i
                                    class="fa fa-play-circle mr-2 text-gray-600"></i>{{ $lesson->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                </article>

            @empty
                <article class="card">
                    <div class="card-body">
                        Este curso no tiene secciones asignadas
                    </div>
                </article>
                @endforelse
            </section>

            <!-- Requirements -->

            <section class="mt-12 mb-8">
                <h4 class="font-bold text-3xl">Requisitos</h4>
                <ul class="list-disc list-inside">
                    @forelse ($course->requirements as $requirement)
                        <li class="text-gray-700 text-base">{{ $requirement->name }}</li>

                    @empty
                        <li class="text-gray-700 text-base">No tiene requerimientos asignados</li>
                    @endforelse
                </ul>
            </section>

            <!-- Description -->

            <section>
                <h4 class="font-bold text-3xl">Descripción</h4>

                <div class="text-gray-700 text-base">
                    {!! $course->description !!}
                </div>

            </section>
        </div>

        <!-- aside -->
        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover shadow-lg" src="{{ $course->teacher->profile_photo_url }}"
                            alt="{{ $course->teacher->name }}">
                        <div>
                            <h4 class="ml-5 font-bold text-gray-500 text-lg"><span>Prof:
                                </span>{{ $course->teacher->name }}</h4>
                            <a class="text-blue-400 text-sm font-bold ml-5"
                                href="{{ Str::slug($course->teacher->name, '') }}">{{ '@' . $course->teacher->name }}</a>
                        </div>
                    </div>

                    <form class="mt-4" action="{{ route('admin.courses.approved', $course) }}"
                        method="POST">
                        @csrf
                        <button class="btn btn-primary w-full" type="submit">Aprobar este curso</button>
                        <a class="btn btn-danger w-full mt-4 block text-center" href="{{ route('admin.courses.observation',$course) }}">Observaciones del Curso</a>
                    </form>

                </div>
            </section>
        </div>

    </div>


</x-app-layout>
