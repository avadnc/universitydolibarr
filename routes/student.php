<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\CourseController;


Route::get('profile', [CourseController::class, 'profile'])->middleware('auth')->name('profile');
