 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Mange All Courses </h4>
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
                      <th scope="col">Thumbnail</th>
                      <th scope="col">Course Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Total Lectures</th>
                      <th scope="col">Class hours</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @php 

                      $i=0;

                     @endphp

                    <!-- reading data from database through brancheController @manage function -->
                     @foreach($courses as $course)
                       @php $i++; @endphp
                    <tr>
                      <th scope="row">{{ $i }}</th>

                      <!-- course image start -->
                      <th scope="row">
                        @if($course->course_image == null)
                         <img src="{{ asset('backend/img/courses/default.png') }}" alt="" width="40">
                        @else
                         <img src="{{ asset('backend/img/courses/'. $course->course_image) }}" alt="" width="40">
                        @endif
                        
                      </th>
                      <!-- course image end  -->

                      <td>{{ $course->course_english_title }}</td>
                      <td>{{ $course->course_price }}</td>
                      <td>{{ $course->course_total_lectures }}</td>
                      <td>{{ $course->course_class_hours }}</td>
                      <td>
                        <!-- course_status -->
                        @if(  $course->course_status  == 1 )
                           <span class="badge badge-primary">Active</span>
                        @elseif( $course->course_status  == 2)
                           <span class="badge badge-danger">InActive</span>
                        @endif
                      </td>
                      <td>
                        <!-- active and delete course start -->
                        <ul class="edit_trash_button">
                          <li>
                            <a href="{{ route('course.edit',$course->id) }}">
                              <i class="fa fa-edit"></i>
                            </a>
                          </li>
                          <li>
                            <a href=""  data-toggle="modal" data-target="#course{{ $course->id }}">
                              <i class="fa fa-trash"></i>
                            </a>
                          </li>
                        </ul>


                        <!-- active and delete course end -->
                      </td>
                      <!-- delete modal  -->
                      <div class="modal fade" id="course{{ $course->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete This Course</h5>
                              <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Do you Want to delete this course?</p>
                            </div>
                            <div class="modal-footer">
                              <form action="{{ route('course.delete',$course->id) }}" method="POST">
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