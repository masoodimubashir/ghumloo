<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CouponCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon_codes = CouponCode::latest()->paginate(10);
        return view('admin.Coupon.all-coupon', compact('coupon_codes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coupon = Validator::make($request->all(), [
            'name' => 'required|string|unique:coupon_codes,name',
            'code' => 'required|string|unique:coupon_codes,code',
            'type' => 'required|in:Percentage,Amount',
            'discount' => 'required|integer',
            'valid_from' => 'required|date',
            'valid_to' => 'required|date',
        ]);

        if ($coupon->fails()) {
            return redirect()->back()->withErrors([
                'error' => 'Validation Error, Some Form Fields Are Required '
            ]);
        }

        $validFrom = Carbon::parse($request->input('valid_from'))->format('Y-m-d');
        $validTo = Carbon::parse($request->input('valid_to'))->format('Y-m-d');

        CouponCode::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'type' => $request->input('type'),
            'discount' => $request->input('discount'),
            'valid_from' => $validFrom,
            'valid_to' => $validTo,
            'status' => $request->has('status') ? '1' : '0',
            'used_coupon' => $request->has('used_coupon') ? '1' : '0',
        ]);

        return redirect()->back()->with(['success' => 'Coupon Created Successfully']);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
        $coupon = CouponCode::find($id);

        if (!$coupon) {
            return redirect()->back()->withErrors([
                'error' => 'Location not Found'
            ]);
        }

        return view('admin.Coupon.edit-coupon', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:coupon_codes,name,'.$id,
            'code' => 'required|string|unique:coupon_codes,code,'.$id,
            'type' => 'required|in:Percentage,Amount',
            'discount' => 'required|integer',
            'valid_from' => 'required|date',
            'valid_to' => 'required|date',
        ]);

        $coupon = CouponCode::find($id);

        $validFrom = Carbon::parse($request->input('valid_from'))->format('Y-m-d');
        $validTo = Carbon::parse($request->input('valid_to'))->format('Y-m-d');

        $coupon->update([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'type' => $request->input('type'),
            'discount' => $request->input('discount'),
            'valid_from' => $validFrom,
            'valid_to' => $validTo,
            'status' => $request->has('status') ? '1' : '0',
            'used_coupon' => $request->has('used_coupon') ? '1' : '0',
        ]);

        return redirect()
            ->route('coupon-code.index')
            ->with(['success' => 'Coupon Updated Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon = CouponCode::find($id);

        if(!$coupon){
            return redirect()->back()->withErrors([
                'error' => 'Coupon Not Found'
            ]);
        }

        $coupon->delete();

        return redirect()->back()->with([
            'success' => 'Coupon Deleted'
        ]);
    }
}
