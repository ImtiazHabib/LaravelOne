 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit {{ $batch->batch_name }}  Information </h4>
          <p class="mg-b-0">Hi I am Imtiaz. Welcome to my First Laravel Project</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('batch.update',$batch->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                   <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Batch Name</label>
                      <input type="text" class="form-control"  name="batch_name" value="{{ $batch->batch_name }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Bacth Starting Date</label>
                      <input type="text" class="form-control"   name="batch_starting_date" value="{{ $batch->batch_starting_date }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Batch Class Day</label>
                      <input type="text" class="form-control"   name="batch_class_day" value="{{ $batch->batch_class_day }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Batch Class Timming</label>
                      <input type="text" class="form-control" name="batch_class_timing" value="{{ $batch->batch_class_timing }}">
                    </div>
                    <!-- fiver url -->
                    <div class="form-group col-md-6">
                      <label >Batch Facebook Group</label>
                      <input type="text" class="form-control"  name="batch_fb_group" value="{{ $batch->batch_fb_group }}">
                    </div>
                    <!-- upwork  url --> 
                    <div class="form-group col-md-6">
                      <label >Batch Sit Number</label>
                      <input type="text" class="form-control" name="batch_sit_number" value="{{ $batch->batch_sit_number }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Batch Branch Name</label>
                      <select class="form-control" name="batch_branch_id">
                      <!-- Branch Name search from database Start -->
                      @foreach($branches as $branch)
                      <option value="{{ $branch->id }}"
                        @if($branch->id == $batch->batch_branch_id)
                          selected
                        @endif
                        >{{ $branch->name }}</option>
                      <!-- Branch Name search from database end  -->
                      @endforeach
                      
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Batch Course Name</label>
                      <select class="form-control" name="batch_course_id">
                      <!-- Course Name search from database Start -->
                      @foreach($courses as $course)
                      <option value="{{ $course->id }}"
                        @if($course->id == $batch->batch_course_id)
                          selected
                        @endif
                        >{{ $course->course_english_title }}</option>
                      <!-- Course Name search from database end  -->
                      @endforeach
                      </select>

                  </div>
                  <div class="form-group">
                    <label >Batch mentor Name</label>
                      <select  class="form-control" name="batch_mentor_id">
                    <!-- Mentor Name search from database Start -->
                      @foreach($mentors as $mentor)
                      <option value="{{ $mentor->id }}"
                         @if($mentor->id == $batch->batch_mentor_id)
                          selected
                         @endif
                         >{{ $mentor->mentor_fullname }}</option>
                      <!-- Mentor Name search from database end  -->
                      @endforeach

                      </select>
                  </div>
                  <div class="form-group">
                    <label >Batch Type</label>
                    <select class="form-control" name="batch_type">
                        <option selected>Please Choose Batch Type</option>
                        <option value="1" @if($batch->batch_type == 1) selected @endif>Online</option>
                        <option value="2" @if($batch->batch_type == 2) selected @endif>Offline</option>
                      </select>

                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Batch  Addmission Status</label>
                      <select class="form-control" name="batch_admission_status">
                        <option selected>Please Choose Addmission Status</option>
                        <option value="1" @if($batch->batch_admission_status == 1) selected @endif>Active</option>
                        <option value="2"@if($batch->batch_admission_status == 2) selected @endif >In-Active</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label >Batch Status</label>
                      <select  class="form-control" name="batch_status">
                        <option selected>Please Choose Batch Status</option>
                        <option value="1"@if($batch->batch_status == 1) selected @endif>Active</option>
                        <option value="2" @if($batch->batch_status == 2) selected @endif>In-Active</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add New Batch </button>
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