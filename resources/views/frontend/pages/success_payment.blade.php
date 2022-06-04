@extends('frontend.template.template');

@section('body')

      
 

    <!-- Content Page -->
    <div class="warpper clearfix">

        <div class="warpper-inner">

            <!-- Header -->
            <!-- header.blade.php -->
            @include('frontend.includes.header');
            <!--Header-->

           <h1> Hello, Transaction has successfully completed</h1>

           <table class="table">
              <thead>
                <tr>
                  <th scope="col">#sl</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Course name</th>
                  <th scope="col">Branch Name</th>
                  <th scope="col">Total Ammount</th>
                  <th scope="col">Transaction Id</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    
                  
                      <th scope="row">1</th>
                      <td> {{ Auth::user()->name }} </td>
                      <td>{{ $order_detials->course_name }}</td>
                      <td>{{ $order_detials->branch_name }}</td>
                      <td>{{ $order_detials->amount }}</td>
                      <td>{{ $order_detials->transaction_id }}</td>
                   
                </tr>
              </tbody>
            </table>
        </div>
    </div>    
@endsection