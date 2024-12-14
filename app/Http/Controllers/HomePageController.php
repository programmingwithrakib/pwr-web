<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function page()
    {
        $courses = Course::get();
        return view('pages.home', compact('courses'));
    }
}
