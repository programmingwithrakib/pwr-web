<?php

namespace App\Http\Controllers;

use App\Models\ContentReadingCount;
use App\Models\Course;
use App\Models\QuickTip;
use Illuminate\Http\Request;

class QuickTipsController extends Controller
{
    public function index()
    {
        $quick_tips = $this->quickTipsQuery()->get();
        return view('pages.quick-tips.index', compact('quick_tips'));
    }


    public function search(Request $request)
    {
        $quick_tips = $this->quickTipsQuery()->get();
        return view('pages.quick-tips.data', compact('quick_tips'));
    }

    public function quickTipsQuery()
    {
        $q = \request()->q;
        $course = \request()->course;

        $query = QuickTip::query();



        if($course){
            $query->whereHas('course', function ($course_query) use ($course) {
                $course_query->where('slug', $course);
            });
        }

        if($q){
            $query->where(function($query) use ($q){
                $query->where('title', 'like', '%'.$q.'%');
                $query->orWhere('description', 'like', '%'.$q.'%');
            });
        }

        return $query;

    }


    public function details($slug)
    {
        $quick_tip = QuickTip::where('slug', $slug)->firstOrFail();
        $course_wise_quick_tips = QuickTip::where('course_id', $quick_tip->course_id)->where('id', '!=', $quick_tip->id)->get();

        ContentReadingCount::Read($quick_tip->id, $quick_tip::class);

        return view('pages.quick-tips.details', compact('quick_tip', 'course_wise_quick_tips'));
    }
}
