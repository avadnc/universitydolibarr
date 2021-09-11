<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Leer Cursos')->only('index');
        $this->middleware('can:Crear Cursos')->only('create', 'store');
        $this->middleware('can:Actualizar Cursos')->only('edit', 'update', 'goals');
        $this->middleware('can:Eliminar Cursos')->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('instructor.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id');
        $levels = Level::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');

        return view('instructor.courses.create')

            ->with('categories', $categories)
            ->with('levels', $levels)
            ->with('prices', $prices);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',

        ]);

        $course = Course::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/courses', $request->file('file'));

            $course->image()->create([
                'url' => $url,
            ]);
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('instructor.courses.show')
            ->with('course', $course);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $this->authorize('dictated', $course);
        $categories = Category::pluck('name', 'id');
        $levels = Level::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');



        return view('instructor.courses.edit')
            ->with('course', $course)
            ->with('categories', $categories)
            ->with('levels', $levels)
            ->with('prices', $prices);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->authorize('dictated', $course);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses,slug,' . $course->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image',

        ]);

        $course->update($request->all());

        if ($request->file('file')) {
            $url = Storage::putFile('public/courses', $request->file('file'));

            if ($course->image) {
                Storage::delete($course->image->url);

                $course->image->update([
                    'url' => $url,
                ]);
            } else {
                $course->image()->create([
                    'url' => $url,
                ]);
            }
        }

        return redirect()->route('instructor.courses.edit', $course);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function goals(Course $course)
    {
        $this->authorize('dictated', $course);

        return view('instructor.courses.goals')->with('course', $course);
    }

    public function status(Course $course)
    {
        $course->status = 2;
        $course->save();
        if ($course->observation) {
            $course->observation->delete();
        }
        return redirect()->route('instructor.courses.edit', $course);
    }

    public function observation(Course $course)
    {
        return view('instructor.courses.observation')->with('course', $course);
    }
}
