<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;

class UpdateHotelPopularityController extends Controller
{
    public function __invoke($id)
    {
        $hotel = Hotel::find(base64_decode($id));

        if (!$hotel) {
            return redirect()->back()->withErrors([
                'hotel' => 'Hotel Not Found'
            ]);
        }

        $hotel->update([
            'popular' => $hotel->popular === 1 ? 0 : 1
        ]);

        return redirect()->back()->with([
            'success' => 'Hotel Updated'
        ]);
    }
}
