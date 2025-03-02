<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\PreTestAssessment\Question;
use App\Models\PreTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreTestController extends Controller
{
    // Show Pre-Test Questions
    public function showPreTest()
    {
        if (!Auth::check()) {
            return redirect()->route('/')->with('error', 'You must log in first to take the pre-test.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        $preTest = $user->preTest;

        if ($preTest && $preTest->has_taken) {
            return redirect('/')->with('error', 'You have already completed the pre-test.');
        }

        $questions = Question::with('choices')->get();

        $type = $questions->isNotEmpty() ? $questions->first()->type : null;

        return view('assessment.pretest', compact('questions', 'type'));
    }

    // Handle Pre-Test Completion
    public function completePreTest(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('/')->with('error', 'You must log in first to complete the pre-test.');
        }

        $user = Auth::user();
        $preTest = $user->preTest;

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        if ($preTest->has_taken) {
            return redirect('/')->with('error', 'You have already completed the pre-test.');
        }

        $request->validate([
            'score' => 'required|integer|min:0',
        ]);

        $preTest->update([
            'has_taken' => true,
            'score' => $request->input('score'),
            'taken_at' => now(),
        ]);

        return redirect()->route('assessment.pretestresult')->with('success', 'Pre-test completed successfully.');
    }

    // Show Pre-Test Results
    public function showResults()
    {
        $user = Auth::user();
        $preTest = PreTest::where('user_id', $user->id)->first();

        if (!Auth::check()) {
            return redirect()->route('/')->with('error', 'You must log in first to view the pre-test result.');
        }

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        if (!$preTest || !$preTest->has_taken) {
            return redirect()->route('assessment.pretest')->with('error', 'You must complete the pre-test first.');
        }

        $score = $preTest->score;
        $totalQuestions = Question::count();

        return view('assessment.pretestresult', [
            'score' => $score,
            'totalQuestions' => $totalQuestions,
        ]);
    }
}
