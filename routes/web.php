<?php

use App\Models\Course;
use App\Http\Livewire\CourseStatus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Contract\ContractController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', HomeController::class)->name('home');
Route::get('sitemap.xml',[ SitemapController::class,'index']);
Route::get('sitemap/courses.xml', [SitemapController::class, 'courses']);
Route::get('sitemap/categories.xml', [SitemapController::class, 'categories']);
Route::get('contract/privacy-policy', [ContractController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('contract/terms-conditions', [ContractController::class, 'termsconditions']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('courses', [CourseController::class,'index'])->name('courses.index');
Route::get('courses/{course}', [CourseController::class,'show'])->name('courses.show');
Route::post('courses/{course}/enrolled',[CourseController::class,'enrolled'])->middleware('auth')->name('courses.enrolled');
Route::get('course-status/{course}', CourseStatus::class)->middleware('auth')->name('courses.status');


