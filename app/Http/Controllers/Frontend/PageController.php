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
        

        
        return view('frontend.pages.frontend_auth.dashboard');
        
    }

     /**
     * frontend Checkout page Controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontend_checkout($batch_slug)
    { 
        // read bacth information fromt he slug
        $batch = Batch::orderby('batch_slug','asc')->where('batch_slug',$batch_slug)->first();
        // read course information from the course id of the batch
        $course = Course::orderby('id','asc')->where('id',$batch->batch_course_id)->first();
        // read mentor information from the mentor id of the batch
        $mentor = Mentor::orderby('id','asc')->where('id',$batch->batch_mentor_id)->first();
        
        // send all information to the checkout page through comapct
        return view('frontend.pages.checkout',compact('batch','course','mentor'));
        
    }

    /**
     * Show the frontend Contact Us Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact_us()
    { 
        
        return view('frontend.pages.contact_us');
        
    }

   
}
