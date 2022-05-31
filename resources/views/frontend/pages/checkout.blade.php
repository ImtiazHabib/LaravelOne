@extends('frontend.template.template')

@section('body')

    <!-- Content Page -->
    <div class="warpper clearfix">

        <div class="warpper-inner">
            
            <!-- Header -->
            <!-- header.blade.php -->
            @include('frontend.includes.header')
            <!--Header-->

            <section class="login-page web-login">

                <div class="row row-0">

                    <div class="col-md-12">

                        <div class="login-form">

                            <a class="navbar-brand" href="#">
                                <span>Checkout Page , Imtiaz habib(Lavael v8.0)</span>
                            </a>

                            <!-- Checkout from start -------------------- -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label >Student Name</label>
                                          <!-- check where anyone login or not  -->
                                          <input type="text" class="form-control"
                                          value ="@if (Auth::check()) {{ Auth::user()->name }} @else {{ old('name') }} @endif" >
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label >Student Phone Number</label>
                                          <input type="text" class="form-control" value ="@if (Auth::check()) {{ Auth::user()->phone }} @else{{ old('name') }} @endif"  >
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label >Student Address</label>
                                        <input type="text" class="form-control" value ="@if (Auth::check()) {{ Auth::user()->address }} @else {{ old('name') }} @endif"  >
                                      </div>
                                      <div class="form-group">
                                        <label >Course Name</label>
                                        <input type="text" class="form-control" value="{{ $course->course_english_title }}" >
                                      </div>
                                       <div class="form-group">
                                        <label >Batch Name</label>
                                        <input type="text" class="form-control" value="{{ $batch->batch_name }}" >
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label >Mentor Name</label>
                                          <input type="text" class="form-control" value="{{ $mentor->mentor_fullname }}"  >
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputCity">Branch Name</label>
                                          <input type="text" class="form-control" value="{{ $batch->branch->name }}" >
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Confirm Infromation</button>

                                      <!-- payment button from sslcommerz start -->
                                      <button class="your-button-class" id="sslczPayBtn"
                                                token="if you have any token validation"
                                                postdata="your javascript arrays or objects which requires in backend"
                                                order="If you already have the transaction generated for current order"
                                                endpoint="/pay-via-ajax"> Pay Now
                                      </button>
                                      <!-- payment button from sslcommerz start -->
                                      
                                </form>
                             
                              
                            <!-- Checkout  from end ------------------------- -->
                        </div>

                    </div>

                    

                </div>

            </section>

            <section class="login-page mobile-login">

                <div class="row row-0">

                    <div class="col-12 col-lg-5 col-md-5 ipad-login">

                        <div class="topbar-login">

                            <div class="float-right">

                                <ul>

                                    <li>Don't have an account yet?</li>

                                    <li> <a href="#" class="btn btn-border">Sign up</a></li>
                                </ul>

                            </div>

                        </div>

                        <div class="bg-signup"></div>

                    </div>

                    <div class="col-12 col-lg-7 col-md-7">

                        <div class="login-form">

                            <a class="navbar-brand" href="#">
                                <span>TeamBoard</span>
                            </a>
                            <form action="action.php" method="post">

                                <div class="form-group">

                                    <input type="email" name="a" class="form-control" placeholder="Email Address">

                                </div>

                                <div class="form-group">

                                    <input type="password" name="b" class="form-control" placeholder="Password">

                                </div>

                                <div class="form-group clearfix">

                                    <div class="float-left">

                                        <div class="form-check ">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </div>

                                    <div class="float-right">
                                        <a href="#">Forgot password ?</a>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <button type="submit" class="btn btn-blue">Login</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </section>
        </div>
    </div>

@endsection