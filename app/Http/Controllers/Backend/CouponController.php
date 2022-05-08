<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Coupon;


class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderby('coupon_code','asc')->get(); 
        return view('backend.pages.coupons.manage',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.coupons.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $coupon = new Coupon();

        $coupon->coupon_code              = $request->coupon_code;
        $coupon->coupon_discount_type     = $request->coupon_discount_type;
        $coupon->coupon_course_type       = $request->coupon_course_type;
        $coupon->coupon_fixed_value       = $request->coupon_fixed_value;
        $coupon->coupon_percentage_value  = $request->coupon_percentage_value;
        $coupon->coupon_status            = $request->coupon_status;

        $coupon->save();

        return redirect()->route('coupon.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::find($id);

        if( !empty($coupon))
        {
           return view('backend.pages.coupons.edit', compact('coupon'));
        }
        else
        {
          return redirect()->route('coupon.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $coupon = Coupon::find($id);

        $coupon->coupon_code              = $request->coupon_code;
        $coupon->coupon_discount_type     = $request->coupon_discount_type;
        $coupon->coupon_course_type       = $request->coupon_course_type;
        $coupon->coupon_fixed_value       = $request->coupon_fixed_value;
        $coupon->coupon_percentage_value  = $request->coupon_percentage_value;
        $coupon->coupon_status            = $request->coupon_status;

        $coupon->save();

        return redirect()->route('coupon.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);

        $coupon->delete();

        return redirect()->route('coupon.manage');
    }
}
