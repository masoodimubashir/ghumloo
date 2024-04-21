<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function dashboard()
    {

        return view('user.index');
    }

    public function travelbooking() {
        return view('user.Booking.travel-bookings');
    }
}
