<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class UtilityPageController extends Controller
{
    public function upcoming()
    {
        return view('pages.coming-soon');
    }

    public function privacyPolicy()
    {
        $page_data = Page::where('slug', 'privacy-policy')->first();
        return view('pages.page-link', compact('page_data'));
    }
}
