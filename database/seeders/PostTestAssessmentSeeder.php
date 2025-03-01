<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trivia\Question as TriviaQuestion;
use App\Models\TrueOrFalse\Question as TrueOrFalseQuestion;
use App\Models\BestScenario\Question as BestScenarioQuestion;
use App\Models\PostTestAssessment\Question as PosttestQuestion;
use App\Models\PostTestAssessment\Choice as PosttestChoice;

class PostTestAssessmentSeeder extends Seeder
{
    public function run(): void
    {
        // Add Trivia Questions
        $triviaQuestions = TriviaQuestion::with('choices')->get();
        foreach ($triviaQuestions as $question) {
            $assessment = PosttestQuestion::create([
                'question_text' => $question->question_text,
                'type' => 'trivia',
                'original_question_id' => $question->id,
                'reason' => $question->reason,
            ]);

            foreach ($question->choices as $choice) {
                PosttestChoice::create([
                    'choice_text' => $choice->choice_text,
                    'is_correct' => $choice->is_correct,
                    'assessment_question_id' => $assessment->id,
                ]);
            }
        }

        // Add True or False Questions
        $trueOrFalseQuestions = TrueOrFalseQuestion::with('choices')->get();
        foreach ($trueOrFalseQuestions as $question) {
            $assessment = PosttestQuestion::create([
                'question_text' => $question->question_text,
                'type' => 'true_or_false',
                'original_question_id' => $question->id,
                'reason' => $question->reason,
            ]);

            foreach ($question->choices as $choice) {
                PosttestChoice::create([
                    'choice_text' => $choice->choice_text,
                    'is_correct' => $choice->is_correct,
                    'assessment_question_id' => $assessment->id,
                ]);
            }
        }

        // Add Best Scenario Questions
        $bestScenarioQuestions = BestScenarioQuestion::with('choices')->get();
        foreach ($bestScenarioQuestions as $question) {
            $assessment = PosttestQuestion::create([
                'question_text' => $question->question_text,
                'type' => 'best_scenario',
                'original_question_id' => $question->id,
                'reason' => $question->reason,
            ]);

            foreach ($question->choices as $choice) {
                PosttestChoice::create([
                    'choice_text' => $choice->choice_text,
                    'is_correct' => $choice->is_correct,
                    'assessment_question_id' => $assessment->id,
                ]);
            }
        }
    }
}
