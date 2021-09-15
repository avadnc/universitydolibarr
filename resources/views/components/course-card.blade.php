@props(['course'])
<article class="card flex flex-col">
    @isset($course->image)
        <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image['url']) }}" alt="{{ $course->title }}">
    @else
        <img class="h-36 w-full object-cover" src="{{ asset('image/noimage.png') }}" alt="{{ $course->title }}">
    @endisset

    <div class="card-body flex-1 flex flex-col">
        <h3 class="card-title">{{ Str::limit($course->title, 40) }}</h3>
        <p class="text-gray-500 text-sm mb-2 mt-auto">Prof: {{ $course->teacher->name }}</p>
        <div class="flex">
            <ul class="flex text-sm">
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
            <p class="text-sm text-gray-700 ml-auto">
                <i class="fa fa-user"></i>
                ( {{ $course->students_count }} )
            </p>

        </div>
        @if ($course->price->value == 0)
         <p class="my-2 text-green-800 font-bold"> Gratis!! </p>
            @else
             <p class="my-2 text-gray-500 font-bold"> {{ $course->price->value }} $USD </p>
        @endif

        <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
            {{ __('Access to course') }}
        </a>
    </div>
</article>
