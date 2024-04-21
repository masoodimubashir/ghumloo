<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordController extends Controller
{
    public function updatedPasswordView()
    {
        return view('user.ChangePassword.forgot-password');
    }


    public function updatePassword(Request $request)
    {

        $request->validate([
            'password' => ['required|confirmed', Password::min(5)->letters()->numbers()->symbols()->mixedCase()],
            'old_password' => ['required', Password::min(5)->letters()->numbers()->symbols()->mixedCase()],
        ]);

        $user = auth()->user();


        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'The old password is incorrect or you dont have password for this account.');
        }

        $user->update([
            'password' => $request->password,
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }

}
