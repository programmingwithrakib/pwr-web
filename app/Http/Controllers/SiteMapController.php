<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\QuickTip;
use App\Models\TopicShortCut;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class SiteMapController extends Controller
{
    function index()
    {
        $path = public_path('sitemap.xml');


        $sitemap_generator = SitemapGenerator::create('https://programmingwithrakib.com')->getSitemap();
        $courses = Course::pluck('slug');

        $notes = TopicShortCut::pluck('slug');
        $quick_tips = QuickTip::pluck('slug');

        $courses->each(function ($course) use ($sitemap_generator) {
            $sitemap_generator->add(
                Url::create("https://programmingwithrakib.com/course/{$course}")
                    ->setPriority(0.8)
                    ->setChangeFrequency('weekly')
            );
        });

        $notes->each(function ($note) use ($sitemap_generator) {
            $sitemap_generator->add( Url::create("https://programmingwithrakib.com/notes/{$note}")
                ->setPriority(0.8)
                ->setChangeFrequency('weekly'));
        });


        $quick_tips->each(function ($quick_tip) use ($sitemap_generator) {
            $sitemap_generator->add(Url::create("https://programmingwithrakib.com/quick-tips/{$quick_tip}")
                ->setPriority(0.8)
                ->setChangeFrequency('weekly'));
        });

        $sitemap_generator->writeToFile($path);
    }
}
