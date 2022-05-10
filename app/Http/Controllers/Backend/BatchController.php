<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Batch;
use App\Models\Backend\Branch;
use App\Models\Backend\Course;
use App\Models\Backend\Mentor;
use Illuminate\Support\Str;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $batches = Batch::orderby('batch_name','asc')->get();

        return view('backend.pages.batches.manage',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $branches = Branch::orderby('name','asc')->get(); 
         $courses = Course::orderby('course_english_title','asc')->get(); 
         $mentors = Mentor::orderby('mentor_fullname','asc')->get(); 

        return view('backend.pages.batches.create',compact('branches','courses','mentors'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $batch = new Batch();

        $batch->batch_name           = $request->batch_name;
        $batch->batch_starting_date  = $request->batch_starting_date;
        $batch->batch_slug           = str::slug($request->batch_name);
        $batch->batch_class_day      = $request->batch_class_day;
        $batch->batch_class_timing   = $request->batch_class_timing;
        $batch->batch_fb_group       = $request->batch_fb_group;
        $batch->batch_sit_number      = $request->batch_sit_number;
        $batch->batch_branch_id       = $request->batch_branch_id;
        $batch->batch_course_id       = $request->batch_course_id;
        $batch->batch_mentor_id        = $request->batch_mentor_id;
        $batch->batch_type             = $request->batch_type;
        $batch->batch_admission_status = $request->batch_admission_status;
        $batch->batch_status            = $request->batch_status;

         $batch->save();

        return redirect()->route('batch.manage');

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
        $batch = Batch::find($id);

        if( !empty($batch))
        {  
             $branches = Branch::orderby('name','asc')->get(); 
             $courses = Course::orderby('course_english_title','asc')->get(); 
             $mentors = Mentor::orderby('mentor_fullname','asc')->get(); 
           return view('backend.pages.batches.edit', compact('batch','branches','courses','mentors'));
        }
        else
        {
          return redirect()->route('batch.manage');
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
        $batch = Batch::find($id);

        $batch->batch_name           = $request->batch_name;
        $batch->batch_starting_date  = $request->batch_starting_date;
        $batch->batch_slug           = str::slug($request->batch_name);
        $batch->batch_class_day      = $request->batch_class_day;
        $batch->batch_class_timing   = $request->batch_class_timing;
        $batch->batch_fb_group       = $request->batch_fb_group;
        $batch->batch_sit_number      = $request->batch_sit_number;
        $batch->batch_branch_id       = $request->batch_branch_id;
        $batch->batch_course_id       = $request->batch_course_id;
        $batch->batch_mentor_id        = $request->batch_mentor_id;
        $batch->batch_type             = $request->batch_type;
        $batch->batch_admission_status = $request->batch_admission_status;
        $batch->batch_status            = $request->batch_status;

         $batch->save();

        return redirect()->route('batch.manage');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batch = Batch::find($id);
        $batch->delete();

        return redirect()->route('batch.manage');
    }
}
