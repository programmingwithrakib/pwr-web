<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pricings')->truncate();
        DB::table('pricings')->insert([
            [
                'name' => "এক মাসের জন্য",
                'price' => 50,
                'discount' => 0,
                'duration_in_months' => 1,
                'sequence' => 1
            ],
            [
                'name' => "তিন মাসের জন্য",
                'price' => 100,
                'discount' => 0,
                'duration_in_months' => 3,
                'sequence' => 2
            ],
            [
                'name' => "ছয় মাসের জন্য",
                'price' => 200,
                'discount' => 0,
                'duration_in_months' => 6,
                'sequence' => 3
            ],
            [
                'name' => "এক মাসের জন্য",
                'price' => 350,
                'discount' => 0,
                'duration_in_months' => 12,
                'sequence' => 4
            ],
        ]);
    }
}
