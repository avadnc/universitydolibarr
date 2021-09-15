<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $courses = Course::where('status',3)->count();
        $users = User::all()->count();

        return view('admin.index')
        ->with('courses', $courses)
        ->with('users',$users);
    }
}
