<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trivia\Question as TriviaQuestion;
use App\Models\TrueOrFalse\Question as TrueOrFalseQuestion;
use App\Models\BestScenario\Question as BestScenarioQuestion;
use App\Models\PreTestAssessment\Question as PretestQuestion;
use App\Models\PreTestAssessment\Choice as PretestChoice;

class PreTestAssessmentSeeder extends Seeder
{
    public function run(): void
    {
        // Add Trivia Questions
        $triviaQuestions = TriviaQuestion::with('choices')->get();
        foreach ($triviaQuestions as $question) {
            $assessment = PretestQuestion::create([
                'question_text' => $question->question_text,
                'type' => 'trivia',
                'original_question_id' => $question->id,
                'reason' => $question->reason,
            ]);

            foreach ($question->choices as $choice) {
                PretestChoice::create([
                    'choice_text' => $choice->choice_text,
                    'is_correct' => $choice->is_correct,
                    'assessment_question_id' => $assessment->id,
                ]);
            }
        }

        // Add True or False Questions
        $trueOrFalseQuestions = TrueOrFalseQuestion::with('choices')->get();
        foreach ($trueOrFalseQuestions as $question) {
            $assessment = PretestQuestion::create([
                'question_text' => $question->question_text,
                'type' => 'true_or_false',
                'original_question_id' => $question->id,
                'reason' => $question->reason,
            ]);

            foreach ($question->choices as $choice) {
                PretestChoice::create([
                    'choice_text' => $choice->choice_text,
                    'is_correct' => $choice->is_correct,
                    'assessment_question_id' => $assessment->id,
                ]);
            }
        }

        // Add Best Scenario Questions
        $bestScenarioQuestions = BestScenarioQuestion::with('choices')->get();
        foreach ($bestScenarioQuestions as $question) {
            $assessment = PretestQuestion::create([
                'question_text' => $question->question_text,
                'type' => 'best_scenario',
                'original_question_id' => $question->id,
                'reason' => $question->reason,
            ]);

            foreach ($question->choices as $choice) {
                PretestChoice::create([
                    'choice_text' => $choice->choice_text,
                    'is_correct' => $choice->is_correct,
                    'assessment_question_id' => $assessment->id,
                ]);
            }
        }
    }
}
