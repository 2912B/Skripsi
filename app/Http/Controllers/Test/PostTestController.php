<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\PostTest;
use App\Models\PostTestAssessment\Question as PostTestQuestion;
use App\Models\PreTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PostTestController extends Controller
{
    public function showPostTest()
    {
        if (!Auth::check()) {
            return redirect()->route('/')->with('error', 'You must log in first to take the post-test.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        $preTest = $user->preTest;

        if (!$preTest || !$preTest->has_taken) {
            return redirect()->route('home')->with('error', 'You must complete the Pre-Test first before taking the Post-Test.');
        }

        $postTest = $user->postTest;

        if ($postTest) {
            if ($postTest->cooldown_until && Carbon::parse($postTest->cooldown_until)->isFuture()) {
                $remainingTime = Carbon::parse($postTest->cooldown_until)->diff(now());

                $remainingDays = $remainingTime->d;
                $remainingHours = $remainingTime->h;

                $timeMessage = "{$remainingDays} days and {$remainingHours} hours";
                return redirect('/assessment/postresult')->with('error', "You have already completed the post-test. You can retake it after {$timeMessage}.");
            }
        }

        $questions = PostTestQuestion::with('choices')->get();

        $type = $questions->isNotEmpty() ? $questions->first()->type : null;

        return view('assessment.posttest', compact('questions', 'type'));
    }

    public function completePostTest(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('/')->with('error', 'You must log in first to complete the post-test.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        $postTest = $user->postTest;

        $preTest = $user->preTest;
        if (!$preTest || !$preTest->has_taken) {
            return redirect()->route('assessment')->with('error', 'You must complete the Pre-Test first before taking the Post-Test.');
        }

        if ($postTest && $postTest->cooldown_until && Carbon::parse($postTest->cooldown_until)->isFuture()) {
            return redirect('/assessment/postresult')->with('error', 'You need to wait before retaking the post-test.');
        }

        $request->validate([
            'score' => 'required|integer|min:0',
        ]);

        if (!$postTest) {
            $postTest = PostTest::create([
                'user_id' => $user->id,
                'attempt_count' => 1,
                'score' => $request->input('score'),
                'taken_at' => now(),
                'cooldown_until' => now()->addDays(7),
            ]);
        } else {
            $postTest->increment('attempt_count');

            $existingScore = $postTest->score;
            $newScore = $request->input('score');

            if ($newScore > $existingScore) {
                $postTest->update([
                    'score' => $newScore,
                    'taken_at' => now(),
                    'cooldown_until' => now()->addDays(7),
                ]);
            }
        }

        return redirect()->route('assessment.posttestresult')->with('success', 'Post-test completed successfully.');
    }

    // Show Post-Test Results
    public function showResults()
    {
        if (!Auth::check()) {
            return redirect()->route('/')->with('error', 'You must log in first to view the post-test result.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        $postTest = PostTest::where('user_id', $user->id)->first();

        if (!$postTest || $postTest->attempt_count == 0) {
            return redirect()->route('assessment.posttest')->with('error', 'You must complete the post-test first.');
        }

        $score = $postTest->score;
        $totalQuestions = PostTestQuestion::count();

        return view('assessment.posttestresult', [
            'score' => $score,
            'totalQuestions' => $totalQuestions,
        ]);
    }
}
