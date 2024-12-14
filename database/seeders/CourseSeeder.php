<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $courses = [
            [
                'name' => 'জাভাস্ক্রিপ্ট ফর বিগিনার',
                'video_count' => '৬০ টি ভিডিও',
                'word_count' => '২.৩ হাজার ওয়ার্ড',
                'publish_date' => '২৪ মার্চ, ২০২৪',
                'image' => 'https://cdn.ostad.app/course/cover/2024-12-02T13-50-19.298Z-Course-Thumbnail-04.jpg',
                'is_paid' => false,
                'slug' => 'javascript-for-beginner'
            ],
            [
              'name' => 'লারাভেল ইলেভেন স্টাকচার প্রজেক্ট ',
              'video_count' => '২৪ টি ভিডিও',
              'word_count' => '১.৩ হাজার ওয়ার্ড',
              'publish_date' => '২৪ মার্চ, ২০২৪',
              'image' => 'https://laraveldaily.com/storage/841/conversions/900-600-laravel-(29)-front_large.jpg',
              'is_paid' => false,
                'slug' => 'laravel-11-structure-project'
            ],
            [
              'name' => 'মেশিন লার্নিং এন্ড ডাটা সাইন্স',
              'video_count' => '২৪ টি ভিডিও',
              'word_count' => '১.৩ হাজার ওয়ার্ড',
              'publish_date' => '২৪ মার্চ, ২০২৪',
              'image' => 'https://cdn.ostad.app/course/cover/2024-11-07T13-34-17.205Z-Untitled-1%20(18).jpg',
              'is_paid' => false,
                'slug' => 'machine-learning-and-data-science'
            ],
            [
              'name' => 'পাইথন ফর বিগিনার',
              'video_count' => '২৪ টি ভিডিও',
              'word_count' => '১.৩ হাজার ওয়ার্ড',
              'publish_date' => '২৪ মার্চ, ২০২৪',
              'image' => 'https://www.nexerb.xyz/python.png',
              'is_paid' => false,
                'slug' => 'python-for-beginners'
            ],
            [
              'name' => 'চ্যাট জিপিটি প্রমট ই্জিনিয়ার',
              'video_count' => '৬০ টি ভিডিও',
              'word_count' => '২.৩ হাজার ওয়ার্ড',
              'publish_date' => '২৪ মার্চ, ২০২৪',
              'image' => 'https://cdn.ostad.app/course/cover/2024-12-02T13-50-19.298Z-Course-Thumbnail-04.jpg',
              'is_paid' => false,
                'slug' => 'chat-gpt-promt-engineers'
            ],
            [
              'name' => 'লারাভেল মিড লেভেল জার্নি',
              'video_count' => '২৪ টি ভিডিও',
              'word_count' => '১.৩ হাজার ওয়ার্ড',
              'publish_date' => '২৪ মার্চ, ২০২৪',
              'image' => 'https://laraveldaily.com/storage/841/conversions/900-600-laravel-(29)-front_large.jpg',
              'is_paid' => false,
                'slug' => 'laravel-mid-label-journey'
            ]
        ];
        DB::table('courses')->insert($courses);
    }
}
