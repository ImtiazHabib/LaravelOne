 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit {{ $branch->name }}  Information </h4>
          <p class="mg-b-0">Hi I am Imtiaz. Welcome to my First Laravel Project</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('branch.update',$branch->id) }}" method="POST">
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Branch Name</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name" value="{{ $branch->name }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Branch Name( Bangla )</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Bangla Name" name="bangla_name" value="{{ $branch->bangla_name }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Branch Phone</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Phone" name="phone" value="{{ $branch->phone }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Branch Email</label>
                      <input type="email" class="form-control" id="inputPassword4" placeholder="Email Address" name="email" value="{{ $branch->email }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address Line One</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address line one" name="address_line1" value="{{ $branch->address_line1 }}">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address Line Two</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address line two"  name="address_line2" value="{{ $branch->address_line2 }}">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputState">Status</label>
                      <select id="inputState" class="form-control" name="status">
                        <option selected>Please Choose the Active Status</option>
                        <option value="1"  @if  ( $branch->status == 1 )  selected @endif>Active</option>
                        <option value="2" @if  ($branch->status == 2)  selected @endif>In-Active</option>
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