<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;


class StudentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function student_dashboard_update(Request $request, $id)
    {
         $user = User::find($id);

        $user->name            = $request->name;
        $user->phone           = $request->phone;
        $user->address         = $request->address;

         if( !empty($request->image))
            {
                // delete old picture
                if(File::exists('frontend/assets/images/student_profile/' . $user->image)){
                    File::delete('frontend/assets/images/student_profile/' . $user->image);
                } 


                // add new picture 
                $image = $request->file('image');

               $img = rand(). '.' . $image->getClientOriginalExtension();

               $location = public_path('frontend/assets/images/student_profile/'. $img);

               Image::make($image)->save($location);

               $user->image = $img;
            }

            

        $user->save();

        return redirect()->route('frontend_dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
