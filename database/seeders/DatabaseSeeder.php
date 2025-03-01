<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            GamesCategoriesSeeder::class,
            BestScenarioQuestionsSeeder::class,
            BestScenarioChoicesSeeder::class,
            TriviaQuestionsSeeder::class,
            TriviaChoicesSeeder::class,
            TrueorFalseQuestionsSeeder::class,
            TrueorFalseChoicesSeeder::class,
            EmailQuestionsTableSeeder::class,
            SMSQuestionsTableSeeder::class,
            PostTestAssessmentSeeder::class,
            PreTestAssessmentSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
