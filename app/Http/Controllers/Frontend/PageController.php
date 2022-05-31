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
         $batch = Batch::orderby('batch_slug','asc')->where('batch_slug',$batch_slug)->first();
         $course = Course::orderby('id','asc')->where('id',$batch->batch_course_id)->first();
         $curriculum = CourseCurriculum::orderby('id','asc')->where('course_id',$course->id)->first();
         
        return view('frontend.pages.coursedetails',compact('batch','course','curriculum'));
        
    }

    /**
     * Show the frontend login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontend_login()
    { 
        
        return view('frontend.pages.frontend_auth.login');
        
    }

     /**
     * Show the frontend Register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontend_register()
    { 
        
        return view('frontend.pages.frontend_auth.register');
        
    }

     /**
     * Show the frontend dashboard page.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontend_dashboard()
    { 
        // sending user,batch,course data

        
        return view('frontend.pages.frontend_auth.dashboard');
        
    }

   
}
