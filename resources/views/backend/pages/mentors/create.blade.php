 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Mentor</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Mentor start -->
                <form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label >Mentor Fullname</label>
                      <input type="text" class="form-control"  placeholder="Mentor Fullname" name="mentor_fullname">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Mentor Designation</label>
                      <input type="text" class="form-control"  placeholder="Mentor Designation" name="mentor_designation">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Mentor Phone</label>
                      <input type="text" class="form-control"  placeholder="Mentor Phone" name="mentor_phone">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Mentor Address</label>
                      <input type="text" class="form-control" placeholder="Mentor Address" name="mentor_address">
                    </div>
                    <!-- fiver url -->
                    <div class="form-group col-md-6">
                      <label >Mentor Fiverr Url</label>
                      <input type="text" class="form-control" placeholder="Mentor Fiverr Url" name="mentor_fiverr_url">
                    </div>
                    <!-- upwork  url --> 
                    <div class="form-group col-md-6">
                      <label >Mentor Upwork Url</label>
                      <input type="text" class="form-control" placeholder="Mentor Upwork Url" name="mentor_upwork_url">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Mentor Email</label>
                      <input type="email" class="form-control"  placeholder="Mentor Email" name="mentor_email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Mentor Fiverr Image</label>
                    <input type="file" class="form-control-file"  placeholder="Mentor Fiverr Image" name="mentor_fiverr_img">
                  </div>
                  <div class="form-group">
                    <label >Mentor Upwork Image</label>
                    <input type="file" class="form-control-file"  placeholder="Mentor Upwork Image" name="mentor_upwork_img">
                  </div>
                  <div class="form-group">
                    <label >Mentor Profile Picture</label>
                    <input type="file" class="form-control-file"  placeholder="Mentor Profile Picture" name="mentor_profile_picture">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Mentor Status</label>
                      <select id="inputState" class="form-control" name="mentor_status">
                        <option selected>Please Choose the Active Status</option>
                        <option value="1">Active</option>
                        <option value="2">In-Active</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add New Mentor </button>
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