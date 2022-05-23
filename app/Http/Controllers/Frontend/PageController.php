<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Batch;
use App\Models\Backend\Branch;
use App\Models\Backend\Course;
use App\Models\Backend\Mentor;
use App\Models\Backend\CourseCurriculum;
use Illuminate\Support\Str;
use File;
use Image;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.homepage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursepage()
    { 
        $batches = Batch::orderby('id','asc')->get();
        return view('frontend.pages.coursepage',compact('batches'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursedetails($batch_slug)
    { 
         $batch = Batch::orderby('id','asc')->where('batch_slug',$batch_slug)->first();
         $course = Course::orderby('id','asc')->where('id',$batch->batch_course_id)->first();
         $curriculum = CourseCurriculum::orderby('id','asc')->where('course_id',$course->id)->first();
         
        return view('frontend.pages.coursedetails',compact('batch','course','curriculum'));
        
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
