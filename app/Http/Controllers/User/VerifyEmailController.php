<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VerifyEmailController extends Controller
{

    public function reVerifyEmail()
    {
        $user = auth()->user();
        $verification_code = Str::random(64);
        $user->otp()->create([
            'otp' => $verification_code,
        ]);
        Mail::to($user->email)->send(new EmailVerification($user));
        return redirect()->back()->with('success', 'Verification Email Send!');
    }

    public function verifyEmail($id, $code)
    {

        $user = User::where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

        if ($user->otp->otp === $code && $user->email_verified_at === null) {
            $user->update([
                'email_verified_at' => Carbon::now()
            ]);
            $user->otp()->delete();
            session()->put('user', $user);
            return redirect()->back()->with('success', 'Email Verified');
        }

        session()->put('user', $user);
        return redirect()->back()->with('success', 'Email Already Verified');

    }
}
