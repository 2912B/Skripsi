<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function showProfile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('profilemenu', ['user' => $user]);
        } else {
            return redirect()->route('login')->with('error', 'Unauthorized Access');
        }
    }

    public function updateUsername(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $validator = Validator::make($request->all(), [
                'newUsername' => [
                    'required',
                    'string',
                    'max:120',
                    function ($attribute, $value, $fail) use ($user) {
                        if ($value === $user->username) {
                            $fail('The new username must be different from the old username.');
                        }
                    },
                    'unique:users,username,' . $user->id,
                ],
            ], [
                'newUsername.required' => 'The username field is required.',
                'newUsername.string' => 'The username must be a string.',
                'newUsername.max' => 'The username must not be greater than 120 characters.',
                'newUsername.unique' => 'The username has already been taken.',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $user->username = htmlspecialchars($request->newUsername);
            $user->save();

            return back()->with('success', 'Username updated successfully');
        } else {
            return redirect()->route('login')->with('error', 'Unauthorized Access');
        }
    }

    public function updatePassword(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $validator = Validator::make($request->all(), [
                'oldPassword' => 'required',
                'newPassword' => [
                    'required',
                    'min:8',
                    'max:20',
                    'confirmed',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                    function ($attribute, $value, $fail) use ($request) {
                        if (Hash::check($value, Auth::user()->password)) {
                            $fail('The new password must be different from the old password.');
                        }
                    },
                ],
            ], [
                'oldPassword.required' => 'The old password field is required.',
                'newPassword.required' => 'The new password field is required.',
                'newPassword.min' => 'The new password must be at least 8 characters.',
                'newPassword.max' => 'The new password must not be greater than 20 characters.',
                'newPassword.confirmed' => 'The new password confirmation does not match.',
                'newPassword.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, and one number.',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            if (!Hash::check($request->oldPassword, $user->password)) {
                return back()->withErrors(['oldPassword' => 'Incorrect old password.'])->withInput();
            }

            $user->password = Hash::make($request->newPassword);
            $user->save();

            return back()->with('success', 'Password updated successfully');
        } else {
            return redirect()->route('login')->with('error', 'Unauthorized Access');
        }
    }
}
