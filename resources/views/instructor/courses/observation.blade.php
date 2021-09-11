<x-instructor-layout :course="$course">
    <div class="card-body">
        <h2 class="text-2xl font-bold">Información del curso</h2>
        <hr class="mt-2 mb-6">

        {!! $course->observation->body !!}
    </div>
</x-instructor-layout>
