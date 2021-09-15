<?php

namespace App\Http\Controllers\Student;

use App\Models\User;
use App\Models\Course;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Leer Cursos')->only('index');

    }
    public function profile()
    {


        $user = User::find(auth()->user()->id);
        $user = $user->courses_enrolled;

        return view('student.courses.index')->with('courses',  $user);
    //   dd($user);
    }
}
