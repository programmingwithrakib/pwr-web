<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Models\Bookmark;
use App\Models\CourseTopic;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile(){
        return view('pages.account.profile');
    }

    public function updateProfile(Request $request){
        $data = collect($request->validate([
            'name' => 'required',
            'phone' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'required' => 'আপডেট করার সময় নামের ঘরটি পূরণ করুন',
        ]))->merge([
            'image' => Helper::FileUpload(request_key: 'image', path: 'files'),
        ]);

        $user = auth()->user();
        if($data['image']){
            Helper::RemoveFile($user->image);
        }
        try {
            $user->update($data->filter()->toArray());
            return redirect()->route('account.profile')->with('success', 'সফলভাবে আপনার প্রফাইল আপডেট হয়েছে।');
        }
        catch (\Exception $exception){
            return redirect()->route('account.profile')->with('error', 'দঃখিত! আপনার প্রফাইল আপডেট ব্যর্থ হয়েছে।');
        }

    }

    public function reads(){
        $read_history =  auth()->user()->read_history()->with('course_topic')->orderBy('last_visited_time', 'desc')->paginate(5);
        return view('pages.account.reads', compact('read_history'));
    }
    public function bookmarks(){
        $bookmarks =  auth()->user()->bookmarks()->with('course_topic')->orderBy('id', 'desc')->paginate(5);
        return view('pages.account.bookmarks', compact('bookmarks'));
    }
    public function importances(){
        $importances =  auth()->user()->importances()->with('course_topic')->orderBy('id', 'desc')->paginate(5);
        return view('pages.account.importances', compact('importances'));
    }


    /**
     * @param $topic_id
     * @return int
     * response 0 = removed from bookmarks
     * response 1 = added in bookmarks
     */
    public function actionBookmark($topic_id)
    {
        $course_topic = CourseTopic::where('id', $topic_id)->first();
        $bookmark = auth()?->user()?->bookmarks()->where('course_topic_id', $topic_id)->first();
        if($bookmark){
            $bookmark->delete();
            return 0;
        }
        else{
            $bookmark = auth()?->user()?->bookmarks()->create([
                'course_topic_id' => $topic_id,
                'course_id' => $course_topic->course_id,
            ]);
            return 1;
        }
    }

    /**
     * @param $topic_id
     * @return int
     * response 0 = removed from bookmarks
     * response 1 = added in bookmarks
     */
    public function actionImportance($topic_id)
    {
        $course_topic = CourseTopic::where('id', $topic_id)->first();
        $importance = auth()?->user()?->importances()->where('course_topic_id', $topic_id)->first();
        if($importance){
            $importance->delete();
            return 0;
        }
        else{
            $importance = auth()?->user()?->importances()->create([
                'course_topic_id' => $topic_id,
                'course_id' => $course_topic->course_id,
            ]);
            return 1;
        }
    }
}
