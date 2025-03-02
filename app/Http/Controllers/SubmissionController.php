<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{

    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must log in first.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        return view('dashboardpages.submit');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must log in first.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        $validatedData = $request->validate([
            'game' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'question' => 'required|string',
            'answer' => 'required|string',
            'explanation' => 'nullable|string',
        ]);

        $submission = new Submission($validatedData);
        $submission->user_id = Auth::id();
        $submission->save();

        return redirect('/submission')->with('success', 'Submission created successfully!');
    }

    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must log in first.');
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice')->with('error', 'You must verify your email to take the pre-test.');
        }

        $submissions = Submission::where('user_id', Auth::id())->get();
        return view('dashboardpages.tracker', compact('submissions'));
    }

    // ... other methods (edit, update, delete) as needed, each with the Auth check
}
