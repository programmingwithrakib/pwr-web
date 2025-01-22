<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\ContentReadingCount;
use App\Models\Course;
use App\Models\Importance;
use App\Models\ReadHistory;
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

        // Add To Read This Topics
        if(auth()->check()){
            $read_history = ReadHistory::where(['user_id' => auth()->id(), 'course_topic_id' => $active_topic->id])->first();
            if($read_history){
                $read_history->last_visited_time = date('Y-m-d H:i:s');
                $read_history->count_of_read = $read_history->count_of_read + 1;
                $read_history->save();
            }
            else{
                $read_history = new ReadHistory();
                $read_history->user_id = auth()->id();
                $read_history->course_topic_id = $active_topic->id;
                $read_history->count_of_read = 1;
                $read_history->last_visited_time = date('Y-m-d H:i:s');
                $read_history->save();
            }

        }


        //Check Bookmarks And Importance
        $has_in_bookmarks = false;
        $has_in_importance = false;
        if (auth()->check()) {
            $has_in_bookmarks = (bool)Bookmark::where('user_id', auth()->id())->where('course_topic_id', $active_topic->id)->exists();
            $has_in_importance = (bool)Importance::where('user_id', auth()->id())->where('course_topic_id', $active_topic->id)->exists();
        }

        ContentReadingCount::Read($active_topic->id, $active_topic::class);

        return view('pages.course-details', compact(
    'course',
    'topics',
            'active_topic',
            'prev_topic',
            'next_topic',
            'prev_topic',
            'active_topic_docs',
            'resources',
            'has_in_bookmarks',
            'has_in_importance'
        ));
    }
}
