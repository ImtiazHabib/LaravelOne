<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Course;
use Illuminate\Support\Str;
use File;
use Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {   
        $courses = Course::orderby('course_english_title','asc')->get(); 
        return view('backend.pages.courses.manage',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();

        $course->course_english_title          = $request->course_english_title;
        $course->course_bangla_title           = $request->course_bangla_title;
        $course->course_slug                   = Str::slug($request->course_english_title);
        $course->course_intro_video_url        = $request->course_intro_video_url;
        $course->course_price                  = $request->course_price;
        $course->course_bangla_price           = $request->course_bangla_price;
        $course->course_graduate_number        = $request->course_graduate_number;
        $course->course_total_lectures         = $request->course_total_lectures;
        $course->course_class_hours            = $request->course_class_hours;
        $course->course_duration               = $request->course_duration;
        $course->course_motivational_content   = $request->course_motivational_content;
        $course->course_opportunity            = $request->course_opportunity;
        $course->course_curriculum_description = $request->course_curriculum_description;
        $course->course_cupon_status           = $request->course_cupon_status;
        $course->course_status                 = $request->course_status;

        // svaing course image 
        if($request->course_image)
        {
            $image = $request->file('course_image');

           $img = rand(). '.' . $image->getClientOriginalExtension();

           $location = public_path('backend/img/courses/'. $img);

           Image::make($image)->save($location);

           $course->course_image = $img;
        }

        $course->save();

        return redirect()->route('course.manage');

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
        $course = Course::find($id);

        if(!empty($course))
        {
            return view('backend.pages.courses.edit', compact('course'));
        }
        else
        {
          return redirect()->route('course.manage'); 
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
        $course = Course::find($id);
       
        $course->course_english_title          = $request->course_english_title;
        $course->course_bangla_title           = $request->course_bangla_title;
        $course->course_slug                   = Str::slug($request->course_english_title);
        $course->course_intro_video_url        = $request->course_intro_video_url;
        $course->course_price                  = $request->course_price;
        $course->course_bangla_price           = $request->course_bangla_price;
        $course->course_graduate_number        = $request->course_graduate_number;
        $course->course_total_lectures         = $request->course_total_lectures;
        $course->course_class_hours            = $request->course_class_hours;
        $course->course_duration               = $request->course_duration;
        $course->course_motivational_content   = $request->course_motivational_content;
        $course->course_opportunity            = $request->course_opportunity;
        $course->course_curriculum_description = $request->course_curriculum_description;
        $course->course_cupon_status           = $request->course_cupon_status;
        $course->course_status                 = $request->course_status;

         // svaing course image 
        if(!empty($request->course_image))
        {

             // delete old picture
            if(File::exists('backend/img/courses/' . $course->course_image)){
                File::delete('backend/img/courses/' . $course->course_image);
            } 

            $image = $request->file('course_image');

           $img = rand(). '.' . $image->getClientOriginalExtension();

           $location = public_path('backend/img/courses/'. $img);

           Image::make($image)->save($location);

           $course->course_image = $img;
        }

        $course->save();

        return redirect()->route('course.manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $course = Course::find($id);

         // delete old picture
            if(File::exists('backend/img/courses/' . $course->course_image)){
                File::delete('backend/img/courses/' . $course->course_image);
            } 

           $course->delete();

        return redirect()->route('course.manage');   
        
    }
}
