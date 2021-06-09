<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use Livewire\Component;

use Livewire\WithPagination;

class CourseIndex extends Component
{
    use WithPagination;
    public $category_id;
    public $level_id;

    public function render()
    {
        $courses = Course::where('status', 3)
            ->category($this->category_id)
            ->level($this->level_id)
            ->latest('id')
            ->paginate(8);
        $categories = Category::all();
        $levels = Level::all();

        return view('livewire.course-index')
            ->with('courses', $courses)
            ->with('categories', $categories)
            ->with('levels', $levels);
    }

    public function resetFilters()
    {
        $this->reset('category_id', 'level_id');
        // Will only reset the search property.

    }

}
