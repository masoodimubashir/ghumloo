<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;


class UserProfileController extends Controller
{
    public function profile()
    {
        return view('user.Profile.profile');
    }

    public function UpdateProfile(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'sometimes|string|min:5',
            'email' => 'sometimes|email', Rule::unique('users', 'email')->ignore(auth()->user()->id),
            'password' => 'sometimes|confirmed', Password::min(5)->letters()->symbols()->mixedCase(),
            'phone' => 'sometimes|string|digits:10',
        ]);

        $user = User::where('email', auth()->user()->email)->first();

        $user->update($validated_data);

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

    public function updateImage(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = User::where('email', auth()->user()->email)->first();

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete($user->image);
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $user->image = Storage::putFileAs('user/images/profile-pic', $file, $fileName);
            $user->save();
        }

        $request->session()->put('user', $user);
        return redirect()->back()->with('success', 'Image successfully uploaded');

    }
}
