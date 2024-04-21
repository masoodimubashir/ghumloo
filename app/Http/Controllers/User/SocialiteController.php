<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callback($driver)
    {

        try {

            $social_user = Socialite::driver($driver)->user();

            $google_user = User::where('googleId', $social_user->id)->first();

            if ($google_user) {
                Auth::login($google_user);
                session()->put('user', $google_user);
                return redirect()->route('user.dashboard');
            }

            $existing_user = User::where('email', $social_user->getEmail())->first();

            if ($existing_user) {
                return redirect()
                    ->route('user.view-login')
                    ->withErrors([
                        'error' => 'User with this email already exists. Please use another login method.'
                    ]);
            }

            $user = User::create([
                'name' => $social_user->name,
                'email' => $social_user->email,
                'googleId' => $social_user->id,
            ]);

            Auth::login($user);
            session()->put('user', $user);
            return redirect()->route('user.dashboard');

        } catch (Exception $exception) {
            return redirect()->route('user.login')->with([
                'error' => 'Something Wen Wrong'
            ]);
        }

    }
}
