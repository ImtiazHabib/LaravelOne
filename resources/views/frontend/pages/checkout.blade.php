@extends('frontend.template.template');

@section('body')

      
 <!-- Page Preloader -->
    <div id="loading-page">
        <div id="loading-center-page">
            <div id="loading-center-absolute">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader --> 

    <!-- Content Page -->
    <div class="warpper clearfix">

        <div class="warpper-inner">

            <!-- Header -->
            <!-- header.blade.php -->
            @include('frontend.includes.header');
            <!--Header-->


            <h1>this is checkout  page</h1>

            <!-- Admission Modal -->
    <!-- <div class="modal fade" id="admission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-logo text-center">
              <img src="{{ asset('frontend/assets/coursedetails/img/logo.png') }}">
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="">

              <div class="form-group">
                <label class="modal-label">Full Name</label>
                <input type="text" name="name" class="form-control" required="required" autocomplete="off" placeholder="Required">
              </div>

              <div class="form-group">
                <label class="modal-label">Email Address</label>
                <input type="email" name="email" class="form-control" required="required" autocomplete="off" placeholder="Required"> 
              </div>

              <div class="form-group">
                <label class="modal-label">Contact No</label>
                <input type="text" name="phone" class="form-control" required="required" autocomplete="off" placeholder="Required"> 
              </div>

              <div class="form-group">
                <label class="modal-label">Gender</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Female</label>
                </div>
              </div>

              <div class="form-group">
                <label class="modal-label">Address</label>
                <textarea class="form-control" name="address" required="required" placeholder="Required"></textarea>
              </div>

              <div class="form-group">
                <input type="submit" name="getAdmission" class="btn-send" value="Get Admission"> 
              </div>

            </form>
          </div>
        </div>
      </div>
    </div> -->


@endsection