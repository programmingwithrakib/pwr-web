<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\UtilityPageController;
Route::get('/', [HomePageController::class, 'page'])->name('home');
Route::get('/course/{course_slug}/{topic_slug?}', [CourseDetailsController::class, 'page'])->name('course-details');
Route::get('/curriculum', [UtilityPageController::class, 'upcoming'])->name('curriculum');
Route::get('/quick-tips', [UtilityPageController::class, 'upcoming'])->name('quick-tips');
Route::get('/roadmap', [UtilityPageController::class, 'upcoming'])->name('roadmap');
Route::get('/pricing', [UtilityPageController::class, 'upcoming'])->name('pricing');
Route::get('/login', [UtilityPageController::class, 'upcoming'])->name('login');


