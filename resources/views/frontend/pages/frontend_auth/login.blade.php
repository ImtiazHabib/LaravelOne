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

                    <div class="col-12 col-lg-7 col-md-12">

                        <div class="login-form">

                            <a class="navbar-brand" href="#">
                                <span>Shikhbe sobai , Developed by Imtiaz Habib (Laravel v8.0)</span>
                            </a>
                            
                            <!-- Login from start -------------------- -->
                             
                              <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="form-group">
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="form-control" placeholder="Enter your Email" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <x-label for="password" :value="__('Password')" />
                                        <br>

                                        <x-input id="password" class="form-control"  class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    </div>


                                    

                                    <div class="form-group">
                                        @if (Route::has('password.request'))
                                            <a class="form-control" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-info btn-block">Sign In</button>

                               </form>
                            <!-- Login from end ------------------------- -->

                        </div>

                    </div>

                    

                </div>

            </section>

           

        </div>
    </div>


@endsection