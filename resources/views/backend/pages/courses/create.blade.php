 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Course</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-row">  

                    <div class="form-group col-md-6">
                      <label >Course Name [English]</label>
                      <input type="text" class="form-control" placeholder="Course Name [English]" name="course_english_title">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Course Name [Bangla]</label>
                      <input type="text" class="form-control" placeholder="Course Name [Bangla]" name="course_bangla_title">
                    </div>

                    <div class="form-group col-md-6">
                      <lab>Course Intro Video Url</label>
                      <input type="text" class="form-control" placeholder="Course Intro Video Url" name="course_intro_video_url">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Course Price</label>
                      <input type="text" class="form-control"  placeholder="Course Price" name="course_price">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Course Price[Bangla]</label>
                      <input type="text" class="form-control"  placeholder="Course Price[Bangla]" name="course_bangla_price">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Graduate Number </label>
                      <input type="text" class="form-control"  placeholder="Graduate Number" name="course_graduate_number">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Total Lectures</label>
                      <input type="text" class="form-control"  placeholder="Total Lectures" name="course_total_lectures">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Class Hours </label>
                      <input type="text" class="form-control"  placeholder="Class Hours" name="course_class_hours">
                    </div>

                    <div class="form-group col-md-6">
                      <textarea name="course_motivational_content" placeholder="Motivational content" id="" cols="60" rows="10"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <label >Course Durations</label>
                      <input type="text" class="form-control"  placeholder="Course Durations" name="course_duration">
                    </div>

                    

                    <div class="form-group col-md-6">
                      <label >Opportunity </label>
                      <textarea name="course_opportunity" placeholder="Opportunity" id="" cols="60" rows="10"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <label >Curriculum </label>
                      <textarea name="course_curriculum_description" placeholder="Curriculum" id="" cols="60" rows="10"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label>Cupon Status</label>
                      <select class="form-control" name="course_cupon_status">
                        <option selected>Please Choose the Cupon Status</option>
                        <option value="1">Active</option>
                        <option value="2">In-Active</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label>Status</label>
                      <select   class="form-control" name="course_status">
                        <option selected>Please Choose the Active Status</option>
                        <option value="1">Active</option>
                        <option value="2">In-Active</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label >Course Image </label>
                      <input type="file" class="form-control-file"  placeholder="Course Image" name="course_image">
                    </div>

                  </div>


                  <button type="submit" class="btn btn-primary">Add New Course</button>

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