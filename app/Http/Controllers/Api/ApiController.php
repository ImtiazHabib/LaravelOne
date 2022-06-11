<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Course;
use Illuminate\Support\Str;
use File;
use Image;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allcourse()
    {
        return Course::orderby('course_english_title','asc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_course(Request $request)
    {
        
         $course = new Course();

        $course->course_english_title          = $request->course_english_title;
        $course->course_bangla_title           = $request->course_bangla_title;
        $course->course_slug                   = Str::slug($request->course_english_title);
        $course->course_price                  = $request->course_price;

       

        $course->save();

        return [ "course has been  created successfully"];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit_course(Request $request)
    {
        $id =$request->id;
        $course = Course::find($id);


       
        $course->course_english_title          = $request->english_title;
        $course->course_bangla_title           = $request->bangla_title;

        $edit_done=$course->save();

        if($edit_done)
        {

            return ["edit has been done"];
        }
        else
        {
            return ["edit has not been done"];
           
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_course($id)
    {
        $course = Course::find($id);
         $course->delete();

         return [" delete successfully"];
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
    public function update(Request $request, $id)
    {
        //
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
