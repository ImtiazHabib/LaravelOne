@extends('layouts.admin_auth_layout');


@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Imtiaz <span class="tx-info">Habib</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">Welcome to My Laravel v8 Project</div>



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

        <div class="mg-t-40 tx-center"  >Already a  member? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

@endsection