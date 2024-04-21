<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class VendorAuthController extends Controller
{


    public function index()
    {
        return view('Vendor.Index.index');
    }

    public function viewlogin()
    {
        if (session()->has('vendor')) {
            return redirect()->route('vendor.dashboard');
        }
        return view('Vendor.login');
    }

    public function register()
    {
        if (session()->has('vendor')) {
            return redirect()->route('vendor.dashboard');
        }
        return view('Vendor.register');
    }

    public function registerVendor(Request $request)
    {
        $user = $request->validate([
            'name' => 'required|string|min:5',
            'company_name' => 'required|string',
            'gst_number' => 'required|string',
            'hotel_name' => 'required|string',
            'manager_name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email|unique:vendors,email',
            'contact_person_name' => 'required|string',
            'contact_person_number' => 'required|integer|digits:10',
        ]);

        Vendor::create($user);

        return redirect()->route('vendor.view-login')->with([
            'message' => 'Account Created Successfully'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|email|exists:vendors,email',
            'password' => 'required',
        ]);

        $user = Vendor::whereEmail($request->email)->first();


        if (!$user) {
            return back()->withErrors([
                'error' => 'Please Register As New User',
            ]);
        }


        if (!$user->status === '0' || !Hash::check($data['password'], $user->password)) {
            return back()->withErrors([
                'error' => 'The provided credentials do not match our records.',
            ]);
        } elseif ($user->status === '0') {

            return back()->withErrors([
                'error' => 'You not Approved by Admin',
            ]);
        } elseif ($user->status === '2') {

            return back()->withErrors([
                'error' => 'You are deactivated cannot login',
            ]);
        }

        session()->put('vendor', $user);
        return redirect()->route('vendor.dashboard');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('vendor.view-login');
    }
}
