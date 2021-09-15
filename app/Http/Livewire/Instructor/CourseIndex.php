<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class CourseIndex extends Component
{
    use WithPagination;
    public $search, $sortField = 'title', $sortDirection = 'ASC';

    public function render()
    {
        $courses = Course::where('title', 'LIKE', '%' . $this->search . '%')
            ->where('user_id', auth()->user()->id)
            ->orderBy($this->sortField, $this->sortDirection)
            ->latest('id')
            ->paginate(8);

        return view('livewire.instructor.courses-index')
            ->with('courses', $courses);
    }

    public function cleanPage()
    {
        $this->reset('page');
    }
}
