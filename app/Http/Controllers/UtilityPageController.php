<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilityPageController extends Controller
{
    public function upcoming()
    {
        return view('pages.coming-soon');
    }
}
