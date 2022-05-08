 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit {{ $coupon->coupon_code }}  Information </h4>
          <p class="mg-b-0">Hi I am Imtiaz. Welcome to my First Laravel Project</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base custom-padding">
             <!-- Crate New Branch start -->
                <form action="{{ route('coupon.update',$coupon->id) }}" method="POST">
                  @csrf
                  <!-- Coupon Code -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label >Coupon Code</label>
                      <input type="text" class="form-control"  name="coupon_code" value="{{ $coupon->coupon_code }}">
                    </div>

                    <!-- Coupon Discount Type -->
                    <div class="form-group col-md-6">
                      <label>Coupon Discount Type</label>
                      <select  class="form-control" name="coupon_discount_type">
                        <option selected>Please Choose Discount Type</option>
                        <option value="1" @if($coupon->coupon_discount_type == 1) selected @endif>Fixed</option>
                        <option value="2" @if($coupon->coupon_discount_type == 2) selected @endif>Percentage</option>
                      </select>
                    </div>

                    <!-- Coupon Course Type -->
                    <div class="form-group col-md-6">
                      <label >Coupon Course Type</label>
                      <select  class="form-control" name="coupon_course_type">
                        <option selected>Please Choose Course Type</option>
                        <option value="1" @if($coupon->coupon_course_type == 1) selected @endif >Online</option>
                        <option value="2" @if($coupon->coupon_course_type == 2) selected @endif >Offline</option>
                      </select>
                    </div>

                    <!-- Fixed Value -->
                    <div class="form-group col-md-6">
                      <label >Fixed Value</label>
                      <input type="Number" class="form-control" name="coupon_fixed_value" value="{{ $coupon->coupon_fixed_value }}">
                    </div>

                    <!-- Percentage Value -->
                    <div class="form-group col-md-6">
                      <label >Percentage Value</label>
                      <input type="number" class="form-control" name="coupon_percentage_value" value="{{ $coupon->coupon_percentage_value }}">
                    </div>

                    <!-- Coupon Status --> 
                    <div class="form-group col-md-6">
                      <label >Coupon Status</label>
                      <select  class="form-control" name="coupon_status">
                        <option selected>Please Choose  Status</option>
                        <option value="1" @if($coupon->coupon_status == 1) selected @endif >Active</option>
                        <option value="2" @if($coupon->coupon_status == 2) selected @endif >In-Active</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add New Coupon </button>
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