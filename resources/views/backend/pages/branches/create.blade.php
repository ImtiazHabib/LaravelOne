 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Branch</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('branch.store') }}" method="POST">
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Branch Name</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Branch Name( Bangla )</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Bangla Name" name="bangla_name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Branch Phone</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Phone" name="phone">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Branch Email</label>
                      <input type="email" class="form-control" id="inputPassword4" placeholder="Email Address" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address Line One</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address line one" name="address_line1">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address Line Two</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address line two"  name="address_line2">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputState">Status</label>
                      <select id="inputState" class="form-control" name="status">
                        <option selected>Please Choose the Active Status</option>
                        <option value="1">Active</option>
                        <option value="2">In-Active</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add New Branch</button>
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