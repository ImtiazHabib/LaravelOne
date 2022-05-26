@extends('frontend.template.template')

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
            @include('frontend.includes.header')
            <!--Header-->

            <section class="login-page web-login">

                <div class="row row-0">

                    <div class="col-12 col-lg-7">

                        <div class="login-form">

                            <a class="navbar-brand" href="#">
                                <span>Shikhbe sobai , Developed by Imtiaz Habib (Laravel v8.0)</span>
                            </a>

                            <!-- Register from start -------------------- -->
                            
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="form-group">

                                        <x-input id="name"  class="form-control"  placeholder="username" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group">

                                        <x-input id="email" class="form-control" placeholder="email" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">

                                        <x-input id="password" class="form-control"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password"  placeholder="password"/>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group">

                                        <x-input id="password_confirmation" class="form-control"
                                                        type="password"
                                                        name="password_confirmation" placeholder="confirm password" required  />
                                    </div>

                                    <button type="submit" class="btn btn-info btn-block">Sign up</button>

                                </form>
                             
                              
                            <!-- Register from end ------------------------- -->
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