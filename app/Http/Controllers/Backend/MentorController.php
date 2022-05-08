<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Mentor;
use Illuminate\Support\Str;
use File;
use Image;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
         $mentors = Mentor::orderby('id','asc')->get(); 
        return view('backend.pages.mentors.manage',compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.mentors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $mentor = new Mentor();

        $mentor->mentor_fullname          = $request->mentor_fullname;
        $mentor->mentor_designation        = $request->mentor_designation;
        $mentor->mentor_slug              = str::slug($request->mentor_fullname);
        $mentor->mentor_phone             = $request->mentor_phone;
        $mentor->mentor_address           = $request->mentor_address;
        $mentor->mentor_email             = $request->mentor_email;
        $mentor->mentor_fiverr_url        = $request->mentor_fiverr_url;
        $mentor->mentor_upwork_url        = $request->mentor_upwork_url;
        $mentor->mentor_status            = $request->mentor_status;

        if($request->mentor_fiverr_img)
        {
           $fiverr_image = $request->file('mentor_fiverr_img');

           $fiverr_img = rand(). '.' . $fiverr_image->getClientOriginalExtension();

           $location = public_path('backend/img/mentors/badge/'. $fiverr_img);

           Image::make($fiverr_image)->save($location);

           $mentor->mentor_fiverr_img = $fiverr_img;
        }

        if($request->mentor_upwork_img)
        {
            $upwork_image = $request->file('mentor_upwork_img');

           $upwork_img = rand(). '.' . $upwork_image->getClientOriginalExtension();

           $location = public_path('backend/img/mentors/badge/'. $upwork_img);

           Image::make($upwork_image)->save($location);

           $mentor->mentor_upwork_img = $upwork_img;
        }
        
        if($request->mentor_profile_picture)
        {
            $image = $request->file('mentor_profile_picture');

           $img = rand(). '.' . $image->getClientOriginalExtension();

           $location = public_path('backend/img/mentors/'. $img);

           Image::make($image)->save($location);

           $mentor->mentor_profile_picture = $img;
        }

         
        $mentor->save();

        return redirect()->route('mentor.manage');
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
        $mentor = Mentor::find($id);

        if( !empty($mentor))
        {
           return view('backend.pages.mentors.edit', compact('mentor'));
        }
        else
        {
          return redirect()->route('mentor.manage');
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
         $mentor = Mentor::find($id);

        $mentor->mentor_fullname          = $request->mentor_fullname;
        $mentor->mentor_designation        = $request->mentor_designation;
        $mentor->mentor_slug              = str::slug($request->mentor_fullname);
        $mentor->mentor_phone             = $request->mentor_phone;
        $mentor->mentor_address           = $request->mentor_address;
        $mentor->mentor_email             = $request->mentor_email;
        $mentor->mentor_fiverr_url        = $request->mentor_fiverr_url;
        $mentor->mentor_upwork_url        = $request->mentor_upwork_url;
        $mentor->mentor_status            = $request->mentor_status;

        if( !empty($request->mentor_profile_picture))
        {
            // delete old picture
            if(File::exists('backend/img/mentors/' . $mentor->mentor_profile_picture)){
                File::delete('backend/img/mentors/' . $mentor->mentor_profile_picture);
            } 


            // add new picture 
            $image = $request->file('mentor_profile_picture');

           $img = rand(). '.' . $image->getClientOriginalExtension();

           $location = public_path('backend/img/mentors/'. $img);

           Image::make($image)->save($location);

           $mentor->mentor_profile_picture = $img;
        }

         if( !empty($request->mentor_fiverr_img))
        {
            // delete old picture
            if(File::exists('backend/img/mentors/badge/' . $mentor->mentor_fiverr_img)){
                File::delete('backend/img/mentors/badge/' . $mentor->mentor_fiverr_img);
            } 


            // add new picture 
            $fiverr_image = $request->file('mentor_fiverr_img');

           $fiverr_img = rand(). '.' . $fiverr_image->getClientOriginalExtension();

           $location = public_path('backend/img/mentors/badge/'. $fiverr_img);

           Image::make($fiverr_image)->save($location);

           $mentor->mentor_fiverr_img = $fiverr_img;
        }

         if( !empty($request->mentor_upwork_img))
        {
            // delete old picture
            if(File::exists('backend/img/mentors/badge/' . $mentor->mentor_upwork_img)){
                File::delete('backend/img/mentors/badge/' . $mentor->mentor_upwork_img);
            } 


            // add new picture 
            $upwork_image = $request->file('mentor_upwork_img');

           $upwork_img = rand(). '.' . $upwork_image->getClientOriginalExtension();

           $location = public_path('backend/img/mentors/badge/'. $upwork_img);

           Image::make($upwork_image)->save($location);

           $mentor->mentor_upwork_img = $upwork_img;
        }

        $mentor->save();

        return redirect()->route('mentor.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mentor = Mentor::find($id);

        // delete the images
        if(File::exists('backend/img/mentors/' . $mentor->mentor_profile_picture)){
                File::delete('backend/img/mentors/' . $mentor->mentor_profile_picture);
            } 

        if(File::exists('backend/img/mentors/badge/' . $mentor->mentor_fiverr_img)){
                File::delete('backend/img/mentors/badge/' . $mentor->mentor_fiverr_img);
            } 

        if(File::exists('backend/img/mentors/badge/' . $mentor->mentor_upwork_img)){
            File::delete('backend/img/mentors/badge/' . $mentor->mentor_upwork_img);
        }

        $mentor->delete();

        return redirect()->route('mentor.manage');


    }
}
