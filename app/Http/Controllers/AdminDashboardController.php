<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')->with('error', 'Unauthorized access');
        }

        $submissions = Submission::with('user')->get();

        $userData = [];

        foreach ($submissions as $submission) {
            $userName = $submission->user->username;

            if (!isset($userData[$userName])) {
                $userData[$userName] = 0;
            }

            $userData[$userName]++;
        }

        return view('admin.dashboard', compact('userData'));
    }

    public function userSubmissions(Request $request, $user_username)
    {
        $user = User::where('username', $user_username)->first();

        if (!$user) {
            abort(404, 'User not found.');
        }

        $submissions = $user->submissions()->with('user')->get();

        return view('admin.submission', compact('submissions', 'user'));
    }

    public function update(Request $request, $id)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')->with('error', 'Unauthorized access');
        }

        $submission = Submission::findOrFail($id);

        $isAccepted = $request->input('is_accepted');
        $feedback = $request->input('feedback');

        $submission->feedback = $feedback;

        if ($isAccepted !== null) {
            $submission->is_accepted = $isAccepted;
            $submission->accepted_date = Carbon::now();
        }
        $submission->save();

        return response()->json(['message' => 'Feedback updated successfully']);
    }
}
