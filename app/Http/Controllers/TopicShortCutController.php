<?php

namespace App\Http\Controllers;

use App\Models\ContentReadingCount;
use App\Models\TopicShortCut;
use Illuminate\Http\Request;

class TopicShortCutController extends Controller
{
    public function index(){

    }

    public function details($slug)
    {
        $short_cut = TopicShortCut::where('slug', $slug)->firstOrFail();

        ContentReadingCount::Read($short_cut->id, $short_cut::class);

        return view('pages.shortcuts.details', compact('short_cut'));
    }
}
