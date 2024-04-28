<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontendReviewController extends Controller
{
    public function packageReview(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer'
        ]);

        if(!auth()->user()){
            return redirect()
                ->route('user.view-login')
                ->with('error','You must be logged in first');
        }

        $package = Package::find($id);

        $package->reviews()->create([
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
            'rating' => $request->rating
        ]);

        return redirect()->back()->with('success','Your Review has been submitted');
    }

    public function hotelReview(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer'
        ]);

        if(!auth()->user()){
            return redirect()
                ->route('user.view-login')
                ->with('error','You must be logged in first');
        }

        $package = Hotel::find($id);

        $package->reviews()->create([
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
            'rating' => $request->rating
        ]);

        return redirect()->back()->with('success','Your Review has been submitted');
    }
}
