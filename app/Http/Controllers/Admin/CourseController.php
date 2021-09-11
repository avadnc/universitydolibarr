<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApprovedCourse;
use App\Mail\RejectCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', 2)->paginate();
        return view('admin.courses.index')->with('courses', $courses);
    }

    public function show(Course $course = null)
    {

        $this->authorize('revision', $course);
        return view('admin.courses.show')->with('course', $course);

    }
    public function approved(Course $course = null)
    {
        $this->authorize('revision', $course);

        if (!$course->lessons || !$course->goals || !$course->requirements || !$course->image) {

            return back()->with('info', 'El curso está incompleto');

        }
        $course->status = 3;
        $course->save();

        //enviar correo electronico

        $mail = new ApprovedCourse($course);
        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info', $course->title . ' publicado con éxito');

    }

    public function observation(Course $course = null)
    {
        return view('admin.courses.observation')->with('course', $course);
    }

    public function reject(Request $request, Course $course)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $course->observation()->create($request->all());
        $course->status = 1;
        $course->save();

        $mail = new RejectCourse($course);
        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('error', $course->title . ' rechazado con éxito');

    }
}
