<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hotel;
use App\Models\State;
use Illuminate\Http\Request;

class FetchDetailsController extends Controller
{
    public function fetchCities(Request $request)
    {
        $id = $request->id;

        $state = State::find($id);

        $cites = $state->cities;

        return response()->json([
             $cites
        ]);

    }

    public function fetchHotel(string $id){



    }
}
