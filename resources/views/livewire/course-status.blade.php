<div class="mt-8">

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Video Course Section -->
        <div class="lg:col-span-2 ">
            <div class="embedded-responsive">
                {!! $current->iframe !!}
            </div>

            <h1 class="text-3xl text-gray-600 font-bold mt-4">
                {{ $current->name }}
            </h1>

            @if ($current->description)
                <div class="text-gary-600">
                    {{ $current->description->name }}
                </div>
            @endif

            <!-- marcar como terminado -->
            <div class="flex justify-between mt-4">
                <div class="flex items-center mt-4 cursor-pointer">

                    <label for="toggleB" class="flex items-center cursor-pointer">
                        <!-- toggle -->
                        <div class="relative">
                            <!-- input -->
                            <input type="checkbox" id="toggleB" class="sr-only" wire:click="completed"
                                @if ($current->completed) checked @endif>
                            <!-- line -->
                            <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
                            <!-- dot -->
                            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                        </div>
                        <!-- label -->
                        <div class="ml-3 text-gray-700 font-medium">
                            Marcar como terminada
                        </div>
                    </label>

                </div>
                @if ($current->resource)
                    <div class="flex items-center mt-4 cursor-pointer" wire:click="download">
                        <i style="font-size:35px" class="fa fa-download text-gray-600"></i>
                        <p class="ml-4">Descargar recurso</p>
                    </div>
                @endif

            </div>

            <!-- ./ -->

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    @if ($this->previous)
                        <a wire:click="changeLesson({{ $this->previous }})" class="cursor-pointer"><i
                                class="fa fa-angle-left mr-2 font-bold text-2xl"></i>Tema Anterior</a>
                    @endif

                    @if ($this->next)
                        <a wire:click="changeLesson({{ $this->next }})" class="ml-auto cursor-pointer">Tema
                            Siguiente
                            <i class="fa fa-angle-right ml-2 font-bold text-2xl"></i></a>
                    @endif

                </div>
            </div>
        </div>

        <!-- ./ -->

        <!-- Lessons Section -->
        <div class="card">
            <div class="card-body">
                <h2 class="text-2xl leading-8 text-center mb-4 font-bold">{{ $course->title }}</h2>

                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 object-cover rounded-full mr-4"
                            src="{{ $course->teacher->profile_photo_url }}" alt="">
                    </figure>
                    <div class="ml-3">
                        <p>{{ $course->teacher->name }}</p>
                        <a class="text-blue-500 text-sm"
                            href="{{ Str::slug($course->teacher->name, '') }}">{{ '@' . Str::slug($course->teacher->name, '') }}</a>
                    </div>
                </div>

                <span class="text-gray-600 text-sm inline-block mt-5">{{ $this->advance . '%' }} completado</span>

                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                        <div style="width:{{ $this->advance . '%' }}; transition:width .5s ease;"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">

                        </div>
                    </div>
                </div>

                <ul>
                    @foreach ($course->sections as $section)
                        <li class="text-gray-600 mb-4">
                            <a class="font-bold text-base inline-block mb-4">{{ $section->name }}</a>


                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li class="flex">
                                        <div>
                                            @if ($lesson->completed)
                                                @if ($current->id == $lesson->id)
                                                    <span
                                                        class="inline-block w-4 h-4 border-2 border-yellow-300 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span
                                                        class="inline-block w-4 h-4 bg-yellow-300 rounded-full mr-2 mt-1"></span>
                                                @endif


                                            @else

                                                @if ($current->id == $lesson->id)
                                                    <span
                                                        class="inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span
                                                        class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @endif

                                        </div>
                                        <a class="cursor-pointer" wire:click="changeLesson({{ $lesson }})">


                                            {{ $lesson->name }}
                                            {{-- @if ($lesson->completed)
                                               <i class="fa fa-check-circle text-green-500 ml-2"></i>
                                            @endif --}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <!-- ./ -->
    </div>
</div>
