<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\QuickTip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuickTipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            $title = fake()->sentence();
            QuickTip::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => fake()->paragraphs(8, true),
                'description_type' => fake()->randomElement(['md', 'text']),
                'course_id' => fake()->randomElement(Course::all()->pluck('id')->toArray()),
            ]);
        }
    }
}
