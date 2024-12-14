<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    function page($course_slug, $topic_slug = null)
    {
        $course = Course::where('slug', $course_slug)->firstOrFail();
        $topics = $course->topics;


        $active_topic_index =  $topics->search(function ($topic) use ($topic_slug) {
            return $topic->slug === $topic_slug;
        });

        // Get previous topic
        $prev_topic = $active_topic_index > 0
            ? $topics->get($active_topic_index - 1)
            : null; // No previous topic if this is the first

        // Get next topic
        $next_topic = $active_topic_index < $topics->count() - 1
            ? $topics->get($active_topic_index + 1)
            : null; // No next topic if this is the last

        if($topic_slug){
            $active_topic = $topics->where('slug', $topic_slug)->firstOrFail();
        }
        else{
            $active_topic = $topics->first();
        }

        $active_topic_docs = $active_topic->topic_data;
        $resources = $active_topic->resources;


        return view('pages.course-details', compact(
    'course',
    'topics',
            'active_topic',
            'prev_topic',
            'next_topic',
            'prev_topic',
            'active_topic_docs',
            'resources'
        ));
    }
}
