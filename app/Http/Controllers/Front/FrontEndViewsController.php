<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FrontEndViewsController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function contactus()
    {
        return view('front.contact');
    }

    public function packages()
    {
        return view('front.all-packages');
    }

    public function hotels()
    {
        return view('front.all-hotels');
    }

    public function packagedetail()
    {
        return view('front.package-detail');
    }

    public function hoteldetail()
    {
        return view('front.hotel-detail');
    }

    public function seightseeing()
    {
        return view('front.sight-seeing');
    }
}
