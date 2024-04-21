<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\VendorPassword;
use App\Mail\VendorPasswordMail;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StatusUpdateController extends Controller
{
    public function updateStatus($id)
    {
        $id = base64_decode($id);

        $vendor = Vendor::find($id);

        if (!$vendor) {
            return redirect()
                ->back()
                ->withErrors(['error', 'Something went wrong.']);
        }

        if ($vendor->status === '0' || $vendor->status === '2') {

            $password = trim(ucfirst(substr('@' . $vendor->name, 0, 4)) . rand(9999, 1111));

            $vendor->update([
                'status' => '1',
                'show_password' => $password,
                'password' => $hashed = Hash::make($password),
            ]);

            Mail::to('mubashir@gmail.com')
                ->send(new VendorPassword($vendor));

            return redirect()
                ->back()
                ->with('success', 'Vendor Activated successfully !!');

        } else if ($vendor->status === '1') {

            $vendor->update(['status' => '2']);

            return redirect()
                ->back()
                ->with('success', 'Vendor Deactivated successfully !!');
        }

    }


}
