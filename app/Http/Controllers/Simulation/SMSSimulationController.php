<?php

namespace App\Http\Controllers\Simulation;

use App\Http\Controllers\Controller;
use App\Models\SMS\Level;
use App\Models\SMS\Question;
use Illuminate\Http\Request;

class SMSSimulationController extends Controller
{
    public function startSMSSimulation(Request $request, $level)
    {
        $smsLevelData = Level::with('questions.responses')->where('id', $level)->first();

        if (!$smsLevelData || $smsLevelData->questions->isEmpty()) {
            abort(404, 'SMS Level not found or no questions available.');
        }

        if ($request->isMethod('post')) {
            $choice = $request->input('choice');
            $questionId = $request->input('question_id');

            $question = $smsLevelData->questions->firstWhere('id', $questionId);
            $selectedResponse = $question->responses->firstWhere('response_type', $choice);

            $isCorrect = $selectedResponse->is_correct ?? false;

            return view('simulation.sms.smssimulation', [
                'smsLevelData' => $smsLevelData,
                'levelId' => $smsLevelData->id,
                'isSubmitted' => true,
                'isCorrect' => $isCorrect,
                'selectedResponse' => $selectedResponse,
            ]);
        }

        return view('simulation.sms.smssimulation', [
            'smsLevelData' => $smsLevelData,
            'levelId' => $smsLevelData->id,
            'isSubmitted' => false,
        ]);
    }
}
