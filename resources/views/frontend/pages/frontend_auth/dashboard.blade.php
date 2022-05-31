@extends('frontend.template.template')

@section('body')
 
      <!-- Content Page -->
        <div class="warpper clearfix">
            <div class="warpper-inner">
                <!-- Header -->
            <!-- header.blade.php -->
            @include('frontend.includes.header')
            <!--Header-->                
				<section class="stdProfile mydashboard">
					<div class="container">
						<h2>Welcome,  {{ Auth::user()->name }}</h2>


						<div class="bg-white shadow rounded-lg d-block d-sm-flex">
							
							<!-- Tab Panel Head -->
							<div class="profile-tab-nav border-right">
								<div class="p-4">
									<div class="img-circle text-center mb-3">
										<!-- user profile picture read from database -- start -->
                                        @if(!empty(Auth::user()->image))
	                                        <img src="{{ asset('frontend/assets/images/student_profile') }}/{{ Auth::user()->image }}" alt="Profile Picture" class="shadow" width="400" >
                                        @else
	                                         <img src="{{ asset('frontend/assets/images/student_profile/default.png') }}" alt="Profile Picture" class="shadow" width="400">

                                        @endif
										<!-- user profile picture read from database -- end -->	
									</div>
									<h4 class="text-center">{{ Auth::user()->name }} </h4>
								</div>


								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
										<i class="fa fa-home text-center mr-1"></i> 
										Profile
									</a>
									<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
										<i class="fa fa-tv text-center mr-1"></i> 
										Course Purchase History
									</a>
									<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
										<i class="fa fa-bell text-center mr-1"></i> 
										Notice Board
									</a>

									<!-- logout user start -->
                                    <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                          <a class="nav-link" aria-selected="false" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                          	<i class="fa fa-sign-out text-center mr-1"></i>Logout
                                          </a>
                                    </form>
                                    <!-- logout user end  -->

									<!-- <a class="nav-link" aria-selected="false" href="https://shikhbeshobai.com/logout" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
										<i class="fa fa-sign-out text-center mr-1"></i> 
										Logout
									</a>
									<form id="logout-form" action="https://shikhbeshobai.com/logout" method="POST" class="d-none">
			                            <input type="hidden" name="_token" value="2MDaxErbQ90247RZcNYaKTJ5pbzZaznCIsDWbg7W">               
			                             </form> -->
								</div>
							</div>


							<!-- Tab Panel Body -->
							<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
								

								<!-- Profile Information -->
								<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
									<h3>Your Profile</h3>
										
										<!-- update student profile from start -->
                                         <form action="{{ route('student_dashboard.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
						                  @csrf

						                  <div class="form-row">
						                    <div class="form-group col-md-6">
						                      <label >Fullname</label>
						                      <input type="text" class="form-control"  placeholder="Mentor Fullname" name="name" value="{{ Auth::user()->name }}">
						                    </div>
						                    <div class="form-group col-md-6">
						                      <label >Phone</label>
						                      <input type="text" class="form-control"  placeholder="Mentor Phone" name="phone" value="{{ Auth::user()->phone }}">
						                    </div>
						                    <div class="form-group col-md-6">
						                      <label > Address</label>
						                      <input type="text" class="form-control" placeholder="Mentor Address" name="address" value="{{ Auth::user()->address }}">
						                    </div>
						                    <div class="form-group col-md-6">
						                      <label >Email</label>
						                      <input type="email" class="form-control"  placeholder="Mentor Email" name="email" value="{{ Auth::user()->email }}" disabled="true">
						                    </div>
						                  </div>
						                  <div class="form-group">
						                    <label >Profile Picture</label>
						                    <br>
						                       <!-- user profile picture read from database -- start -->
		                                        @if(!empty(Auth::user()->image))
			                                        <img src="{{ asset('frontend/assets/images/student_profile') }}/{{ Auth::user()->image }}" alt="Profile Picture" class="shadow" width="40" >
		                                        @else
			                                         <img src="{{ asset('frontend/assets/images/student_profile/default.png') }}" alt="Profile Picture" class="shadow" width="40">

		                                        @endif
												<!-- user profile picture read from database -- end -->	
						                    <br>
						                    <input type="file" class="form-control-file"  placeholder=" Profile Picture" name="image" >
						                  </div>
						                  <button type="submit" class="btn btn-primary" name="edit student">Update </button>
						              </form> 

										<!-- update student profile from end -->

								</div>



								<div class="tab-pane fade tab-heading" id="security" role="tabpanel" aria-labelledby="security-tab">
									<h3 class="mb-4">Course Purchase History</h3>
									<h4>Change Your Life with <span>Shikhbe Shobai</span></h4>
									<p>Shikhbe Shobai teaches you the skills you need to thrive and earn online - now and in the future.</p>
									<div class="row">
										
										<div class="col-md-12">


																				<!-- No Course Purchased -->
												<div class="no-course-purchased">
													<div class="course-alert">
														<p><span>You Doesn't Choose Any Skill Development Course For Your Life Yet.</span> To grow with us please purchase now</p>
														<a href="https://shikhbeshobai.com/courses" class="btn std-btn">Our All Courses</a>
													</div>
												</div>

																			


											

												

											
										</div>

									</div>
								</div>




								<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
									<h3 class="mb-4">Notice Board</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="notice-board">
								
											<h3>No Notice Found</h3>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

@endsection


