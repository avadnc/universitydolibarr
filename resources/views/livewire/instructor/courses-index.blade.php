<div class="container py-8">
    <x-table-responsive>
        <div class="px-6 py-4 flex w-full">
            <div class="block relative flex-1">
                <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                        <path
                            d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                        </path>
                    </svg>
                </span>
                <input wire:model="search" wire:keydown="cleanPage" placeholder="Introduce el nombre de un curso"
                    class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />


            </div>
            <a class="btn btn-danger ml-2" href="{{ route('instructor.courses.create') }}">Crear Curso</a>
        </div>
        @if ($courses->count())
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Matriculados
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Clasificación
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        @isset($course->image)
                                             <img class="w-full h-full rounded-full object-cover object-center"
                                            src="{{ Storage::url($course->image->url) }}" alt="{{ $course->name }}" />
                                            @else
                                            <img  class="w-full h-full rounded-full object-cover object-center" src="{{ asset('image/noimage.png') }}" alt="{{ $course->name }}">
                                        @endisset

                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $course->title }}
                                        </p>
                                        <small>{{ $course->category->name }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $course->students->count() }}</p>
                                <small>Alumnos Matriculados</small>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white">
                                <div class="text-gray-900 whitespace-no-wrap text-sm flex items-center">
                                    {{ $course->rating }}

                                    <ul class="flex text-sm ml-2">
                                        <li class="mr-1"><i
                                                class="fa fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'grey' }}-400"></i>
                                        </li>
                                        <li class="mr-1"><i
                                                class="fa fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'grey' }}-400"></i>
                                        </li>
                                        <li class="mr-1"><i
                                                class="fa fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'grey' }}-400"></i>
                                        </li>
                                        <li class="mr-1"><i
                                                class="fa fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'grey' }}-400"></i>
                                        </li>
                                        <li class="mr-1"><i
                                                class="fa fa-star text-{{ $course->rating == 5 ? 'yellow' : 'grey' }}-400"></i>
                                        </li>
                                    </ul>
                                </div>
                                <small>Valoración del Curso</small>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                                @switch($course->status)
                                    @case(1)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Borrador</span>
                                        </span>
                                    @break
                                    @case(2)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                            <span class="relative">En Revisión</span>
                                        </span>
                                    @break
                                    @case(3)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Activo</span>
                                        </span>
                                    @break
                                @endswitch

                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                    href="{{ route('instructor.courses.edit', $course) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                <strong>No se encontró ningún registro... </strong>
            </div>
        @endif

        <div class="px-5 py-3">
            {{ $courses->links() }}
        </div>
    </x-table-responsive>
</div>
