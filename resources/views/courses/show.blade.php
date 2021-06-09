<x-app-layout>

    <!-- Seccion Header -->
    <section class="bg-gray-700 py-12">

        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{ Storage::url($course->image['url']) }}">
            </figure>

            <div class="text-white">
                <h2 class="text-4xl">{{ $course->title }}</h2>
                <h3 class="text-xl mb-2">{{ $course->subtitle }}</h3>
                <p class="mb-2"><i class="fa fa-bar-chart"></i> {{ __('Level') }}: {{ $course->level->name }}</p>
                <p class="mb-2"><i class="fa fa-tags"></i> {{ __('Category') }}: {{ $course->category->name }}</p>
                <p class="mb-2"><i class="fa fa-users"></i> {{ __('Inscribed') }}: {{ $course->students_count }}</p>
                <p><i class="fa fa-star"></i> {{ $course->rating }}</p>
            </div>
        </div>

    </section>

    <!-- Section Description -->


    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 mt-12 mb-12">

        <div class="order-2 lg:col-span-2 lg:order-1">
            <!-- Goals -->
            <section class="card mb-12">
                <div class="card-body">
                    <h4 class="font-bold text-2xl mb-2">Lo que aprenderás</h4>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fa fa-check text-gray-600 mr-2"></i>
                                {{ $goal->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
            <!-- temary -->
            <section>
                <h4 class="font-bold text-3xl mb-2">Temario</h4>

                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow"
                    @if ($loop->first)
                        x-data="{ open: true }"
                    @else
                        x-data="{ open: false }"
                    @endif
                    >
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200"
                            x-on:click="open = !open">
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
                @endforeach
            </section>

            <!-- Requirements -->

            <section class="mt-12 mb-8">
                <h4 class="font-bold text-3xl">Requisitos</h4>
                <ul class="list-disc list-inside">
                    @foreach ($course->requirements as $requirement)
                        <li class="text-gray-700 text-base">{{ $requirement->name }}</li>
                    @endforeach
                </ul>
            </section>

            <!-- Description -->

            <section>
                <h4 class="font-bold text-3xl">Descripción</h4>

                <div class="text-gray-700 text-base">
                    {{ $course->description }}
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

                    @can('enrolled', $course)
                        <a class="btn btn-danger btn-block mt-4" href="{{ route('courses.status',$course) }}">Continuar con el curso</a>
                    @else
                        <form action="{{ route('courses.enrolled', $course) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-block mt-4">Adquirir este curso</button>
                        </form>
                    @endcan

                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach ($similars as $similar)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{ Storage::url($similar->image['url']) }}" alt=""
                            srcset="">
                        <div class="ml-3">
                            <h4>
                                <a class="font-bold text-gray-500 mb-3"
                                    href="{{ route('courses.show', $similar) }}">{{ Str::limit($similar->title, 40) }}</a>
                            </h4>
                            <div class="flex items-center mb-2">
                                <img class="h-8 w-8 object-cover rounded-full shadow-lg"
                                    src="{{ $similar->teacher->profile_photo_url }}"
                                    alt="{{ $similar->teacher->name }}">
                                <p class="text-gray-700 text-sm ml-2">{{ $similar->teacher->name }}</p>
                            </div>
                            <p class="text-sm"><i class="fa fa-star text-yellow-400 mr-2"></i>{{ $similar->rating }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </aside>
        </div>

    </div>


</x-app-layout>
