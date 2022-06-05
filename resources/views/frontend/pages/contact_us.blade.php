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
                                <span>Contact Us ( This project is developed by Imtiaz habib its in laravel v8.0 )</span>
                            </a>

                            @if( Session::has('success_message'))

                                <div class="alert">{{ Session::get('success_message') }}</div>

                            @endif

                            <!-- Contact Us from start -------------------- -->
                                <form action="{{ route('frontend.contact_us_data') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  
                                  <!-- username -->
                                  <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text"  name="name" class="form-control" id="username"  placeholder="Enter username">
                                  </div>
                                  <!-- email -->
                                   <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" name="email" class="form-control" id="Email"  placeholder="Enter Email">
                                  </div>
                                  <!-- subject -->
                                  <div class="form-group">
                                    <label for="Subject">Subject</label>
                                    <input type="text" name="subject" class="form-control" id="Subject" placeholder="Subject">
                                  </div>
                                  <!-- message -->
                                  <div class="form-group form-check">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            <!-- Contact Us  from end ------------------------- -->
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