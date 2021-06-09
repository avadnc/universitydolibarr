@props(['course'])
<article class="card">
    <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image['url']) }}">
    <div class="card-body">
        <h3 class="text-xl text-gray-700 mb2 leading-6">{{ Str::limit($course->title, 40) }}</h3>
        <p class="card-title">Prof: {{ $course->teacher->name }}</p>
        <div class="flex">
            <ul class="flex text-sm">
                <li class="mr-1"><i class="fa fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'grey' }}-400"></i>
                </li>
                <li class="mr-1"><i class="fa fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'grey' }}-400"></i>
                </li>
                <li class="mr-1"><i class="fa fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'grey' }}-400"></i>
                </li>
                <li class="mr-1"><i class="fa fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'grey' }}-400"></i>
                </li>
                <li class="mr-1"><i class="fa fa-star text-{{ $course->rating == 5 ? 'yellow' : 'grey' }}-400"></i>
                </li>
            </ul>
            <p class="text-sm text-gray-700 ml-auto">
                <i class="fa fa-user"></i>
                ( {{ $course->students_count }} )
            </p>
        </div>
        <a href="{{ route('courses.show', $course) }}"
            class="btn-block mt-4 btn btn-primary">
            {{ __('Access to course') }}
        </a>
    </div>
</article>
