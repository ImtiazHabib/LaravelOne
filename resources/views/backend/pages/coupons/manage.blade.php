 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Mange All Coupon </h4>
          <p class="mg-b-0">Hello,I am Imtiaz Habib. This is a Lms website developed in php languages in laravel framework.</p>
        </div>
 </div>

      <div class="br-pagebody">
        

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card bd-0 shadow-base">
              <div class="d-md-flex justify-content-between pd-25">
                <!-- main body Start -->

                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#SL</th>
                      <th scope="col">Coupon Code</th>
                      <th scope="col">Coupon Type</th>
                      <th scope="col">Course Type</th>
                      <th scope="col">Fixed Ammount</th>
                      <th scope="col">Percent Off</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @php 

                      $i=0;

                     @endphp

                    <!-- reading data from database through brancheController @manage function -->
                     @foreach($coupons as $coupon)
                       @php $i++; @endphp
                    <tr>
                      <th scope="row">{{ $i }}</th>
                      <td>
                         {{ $coupon->coupon_code }}
                      </td>
                      <td>
                        <!-- coupon type -->
                        @if(  $coupon->coupon_discount_type  == 1 )
                           <span class="badge badge-info">Fixed</span>
                        @elseif( $coupon->coupon_discount_type  == 2)
                           <span class="badge badge-success">Percentage</span>
                        @endif

                      </td>

                      <td>
                        <!-- Course type -->
                         @if(  $coupon->coupon_course_type  == 1 )
                           <span class="badge badge-primary">Online</span>
                        @elseif( $coupon->coupon_course_type  == 2)
                           <span class="badge badge-secondary">Offline</span>
                        @endif
                      </td>

                      <td>
                        <!-- fixed Ammount  -->
                        @if(!empty($coupon->coupon_fixed_value))
                         {{ $coupon->coupon_fixed_value }} BDT
                        @else
                          --/-
                        @endif
                        
                      </td>

                      <td>
                        <!-- Percent Ammount  -->
                        @if(!empty($coupon->coupon_percentage_value))
                         {{ $coupon->coupon_percentage_value }} %
                        @else
                          %
                        @endif
                      </td>
                      <td>
                        <!-- coupon_status -->
                        @if(  $coupon->coupon_status  == 1 )
                           <span class="badge badge-primary">Active</span>
                        @elseif( $coupon->coupon_status  == 2)
                           <span class="badge badge-danger">InActive</span>
                        @endif
                      </td>
                      <td>
                        <!-- active and delete coupon start -->
                        <ul class="edit_trash_button">
                          <li>
                            <a href="{{ route('coupon.edit',$coupon->id) }}">
                              <i class="fa fa-edit"></i>
                            </a>
                          </li>
                          <li>
                            <a href=""  data-toggle="modal" data-target="#coupon{{ $coupon->id }}">
                              <i class="fa fa-trash"></i>
                            </a>
                          </li>
                        </ul>


                        <!-- active and delete coupon end -->
                      </td>
                      <!-- delete modal  -->
                      <div class="modal fade" id="coupon{{ $coupon->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete This coupon</h5>
                              <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Do you Want to delete this coupon?</p>
                            </div>
                            <div class="modal-footer">
                              <form action="{{ route('coupon.delete',$coupon->id) }}" method="POST">
                                @csrf

                                 <button type="submit" class="btn btn-primary">Yes</button>

                              </form>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             
                            </div>
                          </div>
                        </div>
                      </div>

                    </tr>
                    @endforeach
                  </tbody>
                </table>


                <!-- main body end  -->
              </div><!-- d-flex -->

              <div class="pd-l-25 pd-r-15 pd-b-25">
                <div id="ch5" class="ht-250 ht-sm-300"></div>
              </div>
            </div><!-- card -->
          </div><!-- col-8 -->    
        </div><!-- row -->

      </div><!-- br-pagebody -->

  @endsection