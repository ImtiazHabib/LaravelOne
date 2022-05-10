 @extends('backend.template.template')


 @section('body')

 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Mange All Batches </h4>
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
                      <th scope="col">Batch Name</th>
                      <th scope="col">Addmission Going On</th>
                      <th scope="col">Course Name</th>
                      <th scope="col">Mentor Name</th>
                      <th scope="col">Branch Name</th>
                      <th scope="col">Class Starting date</th>
                      <th scope="col">Batch Type</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @php 

                      $i=0;

                     @endphp

                    <!-- reading data from database through brancheController @manage function -->
                     @foreach($batches as $batch)
                       @php $i++; @endphp
                      <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>
                          {{ $batch->batch_name }}
                        </td>
                        <td>
                          <!-- Addmission going on -->
                          @if(  $batch->batch_admission_status  == 1 )
                             <span class="badge badge-secondary">Active</span>
                          @elseif( $batch->batch_admission_status  == 2)
                             <span class="badge badge-dark">InActive</span>
                          @endif
                        </td>
                        <td>{{ $batch->course->course_english_title ?? 'name not found' }}</td>
                        <td>
                          <!-- mentor name from mentor table start -->
                          {{ $batch->mentor->mentor_fullname ?? 'name not found' }}

                          <!-- mentor name from mentor table end  -->
                        </td>
                        <td>
                          <!-- branch name from branch table start -->
                          {{ $batch->branch->name ?? 'name not found' }}

                          <!-- branch name from branch table end  -->
                        </td>
                        <td>{{ $batch->batch_starting_date }}</td>
                        <td>
                          <!-- batch Type -->
                          @if(  $batch->batch_type  == 1 )
                             <span class="badge badge-info">Online</span>
                          @elseif( $batch->batch_type  == 2)
                             <span class="badge badge-warning">Offline</span>
                          @endif
                        </td>
                        <td>
                          <!-- batch status -->
                          @if(  $batch->batch_status  == 1 )
                             <span class="badge badge-primary">Active</span>
                          @elseif( $batch->batch_status  == 2)
                             <span class="badge badge-danger">InActive</span>
                          @endif
                        </td>
                        <td>
                          <!-- active and delete batch start -->
                          <ul class="edit_trash_button">
                            <li>
                              <a href="{{ route('batch.edit',$batch->id) }}">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                            <li>
                              <a href=""  data-toggle="modal" data-target="#batch{{ $batch->id }}">
                                <i class="fa fa-trash"></i>
                              </a>
                            </li>
                          </ul>


                          <!-- active and delete batch end -->
                        </td>
                        <!-- delete modal  -->
                        <div class="modal fade" id="batch{{ $batch->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Delete This Batch</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Do you Want to delete this batch?</p>
                              </div>
                              <div class="modal-footer">
                                <form action="{{ route('batch.delete',$batch->id) }}" method="POST">
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