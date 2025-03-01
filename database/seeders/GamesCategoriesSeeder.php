<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('trivia_categories')->insert([
            ['name' => 'cyber-threat'],
            ['name' => 'security-best-practice'],
            ['name' => 'data-privacy'],
            // Add more categories as needed
        ]);

        DB::table('trueorfalse_categories')->insert([
            ['name' => 'password-security'],
            ['name' => 'social-engineering'],
            ['name' => 'phishing'],
            // Add more categories as needed
        ]);

        DB::table('bestscenario_categories')->insert([
            ['name' => 'incident-response'],
            ['name' => 'device-security'],
            ['name' => 'workplace-security'],
            // Add more categories as needed
        ]);
    }
}
