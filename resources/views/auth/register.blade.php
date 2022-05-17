@extends('layouts.admin_auth_layout');


@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Imtiaz <span class="tx-info">Habib</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">Welcome to My Laravel v8 Project</div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your fullname">
        </div><!-- form-group -->
        <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
          <div class="row row-xs">
            <div class="col-sm-4">
              <select class="form-control select2" data-placeholder="Month">
                <option label="Month"></option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <select class="form-control select2" data-placeholder="Day">
                <option label="Day"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <select class="form-control select2" data-placeholder="Year">
                <option label="Year"></option>
                <option value="1">2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
                <option value="4">2013</option>
                <option value="5">2014</option>
              </select>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- form-group -->
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

        <div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

@endsection