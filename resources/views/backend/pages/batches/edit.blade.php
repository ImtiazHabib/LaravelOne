 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit {{ $mentor->mentor_fullname }}  Information </h4>
          <p class="mg-b-0">Hi I am Imtiaz. Welcome to my First Laravel Project</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('mentor.update',$mentor->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label >Mentor Fullname</label>
                      <input type="text" class="form-control"  placeholder="Mentor Fullname" name="mentor_fullname" value="{{ $mentor->mentor_fullname }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Mentor Designation</label>
                      <input type="text" class="form-control"  placeholder="Mentor Designation" name="mentor_designation" value="{{ $mentor->mentor_designation }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Mentor Phone</label>
                      <input type="text" class="form-control"  placeholder="Mentor Phone" name="mentor_phone" value="{{ $mentor->mentor_phone }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Mentor Address</label>
                      <input type="text" class="form-control" placeholder="Mentor Address" name="mentor_address" value="{{ $mentor->mentor_address }}">
                    </div>
                    <!-- fiver url -->
                    <div class="form-group col-md-6">
                      <label >Mentor Fiverr Url</label>
                      <input type="text" class="form-control" placeholder="Mentor Fiverr Url" name="mentor_fiverr_url" value="{{ $mentor->mentor_fiverr_url }}">
                    </div>
                    <!-- upwork  url --> 
                    <div class="form-group col-md-6">
                      <label >Mentor Upwork Url</label>
                      <input type="text" class="form-control" placeholder="Mentor Upwork Url" name="mentor_upwork_url" value="{{ $mentor->mentor_upwork_url }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Mentor Email</label>
                      <input type="email" class="form-control"  placeholder="Mentor Email" name="mentor_email" value="{{ $mentor->mentor_email }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Mentor Fiverr Image</label>
                    <br>
                       <!-- mentor profile picture start -->
                        @if( $mentor->mentor_fiverr_img == null )
                            <img src="{{ asset('backend/img/mentors/default.png') }}"  width="40">
                        @else

                          <img src="{{ asset('backend/img/mentors/badge/'. $mentor->mentor_fiverr_img) }}" width="40">

                        @endif
                        <!-- mentor profile picture end  -->

                    <br>
                    <input type="file" class="form-control-file"  placeholder="Mentor Fiverr Image" name="mentor_fiverr_img" >
                  </div>
                  <div class="form-group">
                    <label >Mentor Upwork Image</label>
                     <br>
                    <!-- mentor profile picture start -->
                        @if( $mentor->mentor_upwork_img == null )
                            <img src="{{ asset('backend/img/mentors/default.png') }}"  width="40">
                        @else

                          <img src="{{ asset('backend/img/mentors/badge/'. $mentor->mentor_upwork_img) }}" width="40">

                        @endif
                        <!-- mentor profile picture end  -->
                     <br>
                    <input type="file" class="form-control-file"  placeholder="Mentor Upwork Image" name="mentor_upwork_img" >
                  </div>
                  <div class="form-group">
                    <label >Mentor Profile Picture</label>
                    <br>
                    <!-- mentor profile picture start -->
                        @if( $mentor->mentor_profile_picture == null )
                            <img src="{{ asset('backend/img/mentors/default.png') }}"  width="40">
                        @else

                          <img src="{{ asset('backend/img/mentors/'. $mentor->mentor_profile_picture) }}" width="40">

                        @endif
                        <!-- mentor profile picture end  -->
                     <br>
                    <input type="file" class="form-control-file"  placeholder="Mentor Profile Picture" name="mentor_profile_picture" >
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Mentor Status</label>
                      <select id="inputState" class="form-control" name="mentor_status" >
                        <option selected>Please Choose the Active Status</option>
                        <option value="1" @if( $mentor->mentor_status == 1 ) selected @endif>Active</option>
                        <option value="2" @if( $mentor->mentor_status == 2 ) selected @endif>In-Active</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="edit mentor">Save Changes </button>
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