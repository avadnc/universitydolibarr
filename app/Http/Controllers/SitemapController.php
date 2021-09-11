<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;

class SitemapController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();


        return response()->view('sitemap.index', [
            'courses' => $courses,
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
