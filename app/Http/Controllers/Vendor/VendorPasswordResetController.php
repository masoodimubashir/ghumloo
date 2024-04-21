<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorPasswordResetController extends Controller
{
    public function viewResetForm()
    {
        return view('vendor.forget-password');
    }

    public function resetPassword(Request $request)
    {

    }
}
