<?php

namespace App\Http\Controllers\Simulation;

use App\Http\Controllers\Controller;
use App\Models\Email\Level;
use App\Models\Email\Question;
use Illuminate\Http\Request;

class EmailSimulationController extends Controller
{
    public function startEmailSimulation(Request $request, $level)
    {
        $emailLevelData = Level::with('questions.responses')->where('id', $level)->first();

        if (!$emailLevelData || $emailLevelData->questions->isEmpty()) {
            abort(404, 'Email Level not found or no questions available.');
        }

        if ($request->isMethod('post')) {
            $choice = $request->input('choice');
            $questionId = $request->input('question_id');

            $question = $emailLevelData->questions->firstWhere('id', $questionId);
            $selectedResponse = $question->responses->firstWhere('response_type', $choice);

            $isCorrect = $selectedResponse->is_correct ?? false;

            return view('simulation.email.emailsimulation', [
                'emailLevelData' => $emailLevelData,
                'levelId' => $emailLevelData->id,
                'isSubmitted' => true,
                'isCorrect' => $isCorrect,
                'selectedResponse' => $selectedResponse,
            ]);
        }

        return view('simulation.email.emailsimulation', [
            'emailLevelData' => $emailLevelData,
            'levelId' => $emailLevelData->id,
            'isSubmitted' => false,
        ]);
    }
}
