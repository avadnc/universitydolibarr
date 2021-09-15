<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;

class SitemapController extends Controller
{
    public function index()
    {

        return response()->view('sitemap.index', [
        ])->header('Content-Type', 'text/xml');
    }

    public function courses()
    {
        $courses = Course::latest()->take(5)->get();
        return response()->view('sitemap.courses', [
            'courses' => $courses])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {

        $categories = Category::latest()->take(5)->get();

        return response()->view('sitemap.categories', [
            'categories' => $categories])->header('Content-Type', 'text/xml');
    }
}
