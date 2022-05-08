@extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update This Curriculum Information </h4>
          <p class="mg-b-0">Hi I am Imtiaz. Welcome to my First Laravel Project</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('CourseCurriculum.update',$curriculum->id) }}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="form-row">  

                    <div class="form-group col-md-6">
                      <label >Course Name [English]</label>
                      <select class="form-control" name="course_id">
                        <option >Please Choose the Course </option>

                      <!-- read course name from course table start  -->
                      @foreach($courses as $course)

                        <option value="{{ $course->id }}" 
                        @if( $course->id == $curriculum->course_id )
                          selected  
                        @endif >{{ $course->course_english_title }}</option>

                        

                      @endforeach
                      <!-- read course name from course table end   -->
                      </select>
                    </div>
                    <!-- steap one  -->
                    <div class="form-group col-md-6">
                      <lab>Step One [English]</label>
                      <input type="text" class="form-control"  name="one_en" value="{{ $curriculum->one_en }}">
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step One [Description]</label>
                        <br>
                        <br>
                        
                        <textarea name="one_desc" id="" cols="65" rows="10" class="form-control" > {{ $curriculum->one_desc }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step One [Bangla]</label>
                      <input type="text" class="form-control"  name="one_bn" value="{{ $curriculum->one_bn }}" >
                    </div> 

                    <!-- steap two   -->
                    
                    <div class="form-group col-md-6">
                      <lab>Step Two [English]</label>
                      <input type="text" class="form-control"  name="two_en" value="{{ $curriculum->two_en }}">
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Two [Description]</label>
                        <br>
                        <br>
                        
                        <textarea name="two_desc" id="" cols="65" rows="10" class="form-control"> {{ $curriculum->two_desc }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Two [Bangla]</label>
                      <input type="text" class="form-control"  name="two_bn" value="{{ $curriculum->two_bn }}">
                    </div>

                    <!-- steap three  -->
                   
                    <div class="form-group col-md-6">
                      <lab>Step Three [English]</label>
                      <input type="text" class="form-control"  name="three_en" value="{{ $curriculum->three_en }}">
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Three [Description]</label>
                        <br>
                        <br>
                        
                        <textarea name="three_desc" id="" cols="65" rows="10" class="form-control"> {{ $curriculum->three_desc }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Three [Bangla]</label>
                      <input type="text" class="form-control"  name="three_bn" value="{{ $curriculum->three_bn }}">
                    </div>

                    <!-- step four -->
                    <div class="form-group col-md-6">
                      <lab>Step Four [English]</label>
                      <input type="text" class="form-control"  name="four_en" value="{{ $curriculum->four_en }}">
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Four [Description]</label>
                        <br>
                        <br>
                        
                        <textarea name="four_desc" id="" cols="65" rows="10" class="form-control"> {{ $curriculum->four_desc }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Four [Bangla]</label>
                      <input type="text" class="form-control"  name="four_bn" value="{{ $curriculum->four_bn }}">
                    </div>
                    
                    <!-- step five -->
                    <div class="form-group col-md-6">
                      <lab>Step Five [English]</label>
                      <input type="text" class="form-control"  name="five_en" value="{{ $curriculum->five_en }}">
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Five [Description]</label>
                        <br>
                        <br>
                        
                        <textarea name="five_desc" id="" cols="65" rows="10" class="form-control"> {{ $curriculum->five_desc }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Step Five [Bangla]</label>
                      <input type="text" class="form-control"  name="five_bn" value="{{ $curriculum->five_bn }}">
                    </div>

                    <div class="form-group col-md-4">
                      <label> Curriculum Status</label>
                      <select   class="form-control" name="status">
                        <option selected>Please Choose Curriculum Status</option>
                        <option value="1"@if($curriculum->status==1) selected @endif>Active</option>
                        <option value="2"@if($curriculum->status==2) selected @endif>In-Active</option>
                      </select>
                    </div>

                  </div>


                  <button type="submit" class="btn btn-primary">Edit Changes</button>
              </form> 
              <!-- Crate New Branch end  -->

              <div class="pd-l-25 pd-r-15 pd-b-25">
                <div id="ch5" class="ht-250 ht-sm-300"></div>
              </div>
            </div><!-- card -->
          </div><!-- col-8 -->    
        </div><!-- row -->

      </div><!-- br-pagebody -->

  @endsection