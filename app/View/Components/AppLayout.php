<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{


    public $course;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->course = "esto es un curso";
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
