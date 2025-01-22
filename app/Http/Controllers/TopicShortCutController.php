<?php

namespace App\Http\Controllers;

use App\Models\TopicShortCut;
use Illuminate\Http\Request;

class TopicShortCutController extends Controller
{
    public function index(){

    }

    public function details($slug)
    {
        $short_cut = TopicShortCut::where('slug', $slug)->first();
        return view('pages.shortcuts.details', compact('short_cut'));
    }
}
