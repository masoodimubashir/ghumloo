<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Mail\ForgotPassword;
use App\Models\PasswordReset;
use App\Models\User;
use App\Service\AadhaarVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UserAuthController extends Controller
{

    public function verifyAdhar(Request $request, AadhaarVerify $aadhaarVerify)
    {
        $request->validate([
            'aadhaar' => 'sometimes|string|digits:12',
        ]);

        if (auth()->user()->adhar_verified_at !== null) {
            return redirect()->back()->with('success', 'Aadhaar already verified');
        }

        $response = $aadhaarVerify->setData($request->aadhaar);


        if ($response['verified'] === 'true') {

            $user = User::where('email', auth()->user()->email)->first();

            $user->update([
                'adhar_verified_at' => now()
            ]);

            $user->aadhaar()->create([
                'aadhaar_number' => $request->aadhaar,
                'state' => $response['state'],
                'phone' => $response['mobileNumber'],
            ]);

            return redirect()->back()->with('success', 'Aadhaar verified');

        } elseif ($response[1] === 400) {
            return redirect()->back()->with('error', $response[0]);
        }
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function viewRegister()
    {
        if (session()->has('user')) {
            return redirect()->route('user.dashboard');
        }
        return view('front.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|min:5|string',
            'email' => 'required|email|unique:users',
            'password' => ['required|confirmed', Password::min(5)->letters()->numbers()->symbols()->mixedCase()],
        ]);

        $user = User::create($credentials);
        $user->otp->delete();
        $verification_code = Str::random(64);
        $user->otp()->create([
            'otp' => $verification_code,
        ]);
        Mail::to($user->email)->send(new EmailVerification($user));
        return redirect()->route('user.view-login');
    }

    public function viewSignin()
    {
        if (session()->has('user')) {
            return redirect()->route('user.dashboard');
        }
        return view('front.sign-in');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => ['required', Password::min(5)->letters()->numbers()->symbols()->mixedCase()],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return redirect()->back()->with('error', 'The provided credentials do not match our records.');
        }

        if ($user) {

            if ($user->password !== null) {
               if (!Auth::attempt($credentials)) {
                   return back()->withErrors([
                       'email' => 'The provided credentials do not match our records.',
                   ])->onlyInput('email');
               }
           }
           return redirect()->back()->with('error', 'We cannot sign in to the account. Please try Another method');
       }


        $request->session()->put('user', $user);
        return redirect()->route('user.dashboard');

    }

    public function showForgetPasswordForm()
    {
        return view('user.ForgotPassword.forgot-password');
    }

    public function submitForgetPasswordForm(Request $request)

    {

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user){
            return back()->with('error' , 'We cannot find a user with that e-mail address.');
        }

        $user->passwordReset()->delete();
        $token = Str::random(64);

        $user->passwordReset()->create([
            'password_reset_token' => $token,
        ]);

        Mail::to($request->email)->send(new ForgotPassword($token));

        return back()->with('success', 'Password reset link! send to your email.');

    }

    public function showResetPasswordForm($token)
    {

        return view('user.ChangePassword.forget-password-link', ['token' => $token]);

    }

    public function submitResetPasswordForm(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => ['required', Password::min(5)->letters()->numbers()->symbols()->mixedCase()],
            'token' => 'required'
        ]);

        $token = PasswordReset::where('password_reset_token', $request->token)->first();

        if (!$token) {
            return redirect()->back()->with('error', 'This password reset token is invalid.');
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error' , 'Email not found');
        }

        $user->update([
            'password' => $request->password
        ]);

        $token->delete();

        return redirect()->route('user.view-login')->with('success', 'Password reset successfully.');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('user.view-login');
    }


    public function eventbooking()
    {
        return view('user.Booking.event-bookings');
    }

    public function travelbooking()
    {
        return view('user.Booking.travel-bookings');
    }

    public function hotelbooking()
    {
        return view('user.Booking.hotel-bookings');
    }

    public function payments()
    {
        return view('user.Payment.payments');
    }

    public function claimrefund()
    {
        return view('user.ClaimRefund.claim-refund');
    }
}
