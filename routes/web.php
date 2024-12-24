<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
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

Route::get('/sign-in', [AuthController::class, 'login'])->name('login');

Route::get('/auth/github/redirect', [AuthController::class, 'loginWithGithub'])->name('login.github');
Route::get('/auth/github', [AuthController::class, 'loginWithGithubAction']);

Route::get('/auth/google/redirect', [AuthController::class, 'loginWithGoogle'])->name('login.google');
Route::get('/auth/google/callback', [AuthController::class, 'loginWithGoogleAction']);


Route::post('/sign-in', [AuthController::class, 'loginAction'])->name('login');
Route::post('/sign-out', [AuthController::class, 'logout'])->name('logout');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('signup');
Route::post('/sign-up', [AuthController::class, 'signupAction'])->name('signup');


Route::prefix('account')->name('account.')->group(function () {
   Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
   Route::get('/reads', [AccountController::class, 'reads'])->name('reads');
});


