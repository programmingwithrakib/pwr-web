<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\QuickTipsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\UtilityPageController;
Route::get('/', [HomePageController::class, 'page'])->name('home');
Route::get('/course/{course_slug}/{topic_slug?}', [CourseDetailsController::class, 'page'])->name('course-details');
Route::get('/curriculum', [UtilityPageController::class, 'upcoming'])->name('curriculum');
Route::get('/quick-tips', [QuickTipsController::class, 'index'])->name('quick-tips');
Route::get('/quick-tips/search', [QuickTipsController::class, 'search'])->name('quick-tips.search');


Route::get('/quick-tips/{slug}', [QuickTipsController::class, 'details'])->name('quick-tips.details');
Route::get('/roadmap', [UtilityPageController::class, 'upcoming'])->name('roadmap');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

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
   Route::post('/update-profile', [AccountController::class, 'updateProfile'])->name('update_profile');
   Route::get('/reads', [AccountController::class, 'reads'])->name('reads');
   Route::get('/bookmarks', [AccountController::class, 'bookmarks'])->name('bookmarks');
   Route::get('/importances', [AccountController::class, 'importances'])->name('importances');


   Route::post('action-bookmark/{topic_id}', [AccountController::class, 'actionBookmark'])->name('action_bookmark');
   Route::post('action-importance/{topic_id}', [AccountController::class, 'actionImportance'])->name('action_importance');
});


Route::get('privacy-policy', [UtilityPageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('terms-and-condition', [UtilityPageController::class, 'privacyPolicy'])->name('terms-and-condition');
Route::get('copyright-policy', [UtilityPageController::class, 'privacyPolicy'])->name('copyright-policy');
Route::get('code-of-conduct', [UtilityPageController::class, 'privacyPolicy'])->name('code-of-conduct');


