@extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Mange All Course Curriculum </h4>
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
                      <th scope="col">Course Name</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @php 

                      $i=0;

                     @endphp

                    <!-- reading data from database through brancheController @manage function -->
                     @foreach($curriculums as $curriculum)
                       @php $i++; @endphp
                    <tr>
                      <th scope="row">{{ $i }}</th>

                      <td>{{ $curriculum->course->course_english_title }}</td>
                      <td>
                        <!-- curriculum status -->
                        @if(  $curriculum->status  == 1 )
                           <span class="badge badge-primary">Active</span>
                        @elseif( $curriculum->status  == 2)
                           <span class="badge badge-danger">InActive</span>
                        @endif
                      </td>
                      <td>
                        <!-- active and delete curriculum start -->
                        <ul class="edit_trash_button">
                          <li>
                            <a href="{{ route('CourseCurriculum.edit',$curriculum->id) }}">
                              <i class="fa fa-edit"></i>
                            </a>
                          </li>
                          <li>
                            <a href=""  data-toggle="modal" data-target="#CourseCurriculum{{ $curriculum->id }}">
                              <i class="fa fa-trash"></i>
                            </a>
                          </li>
                        </ul>


                        <!-- active and delete curriculum end -->
                      </td>
                      <!-- delete modal  -->
                      <div class="modal fade" id="CourseCurriculum{{ $curriculum->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete This Curriculum</h5>
                              <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Do you Want to delete this CourseCurriculum?</p>
                            </div>
                            <div class="modal-footer">
                              <form action="{{ route('CourseCurriculum.delete',$curriculum->id) }}" method="POST">
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