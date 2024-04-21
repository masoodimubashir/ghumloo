<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('admin.AdminSetting.admin-setting', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::findOrFail($id);

        $data = $request->validate([
            'image' => 'sometimes|file|max:1024',
            'password' => 'sometimes|confirmed|min:5',
            'old_password' => 'sometimes|required'
        ]);

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete($user->image);
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $user->image = Storage::putFileAs('admin/images/profile-pic', $file, $fileName);
            $user->save();
        }

        if ($request->filled('password')) {
            if (!Hash::check($data['old_password'], $user->password)) {
                return redirect()->back()->withErrors([
                    'error' => 'The old password does not match our record'
                ]);
            }
        }

        $user->update([
            'password' => $data['password']
        ]);

        $request->session()->put('admin', $user);

        return redirect()->back();

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
