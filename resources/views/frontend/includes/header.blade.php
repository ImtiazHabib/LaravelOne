<header class="navbar-header">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="https://shikhbeshobai.com">
                            <span>
                                <img style="width: 100px;margin-top: 10px;margin-bottom: 10px;" src="{{ asset('frontend/assets/images/Shikhbe-shobai-logo.png') }}" alt="">
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" id="sidebarCollapse">
                            <span class="navbar-toggler-icon icofont-navigation-menu"></span>
                        </button>
                        <div class="navbar-collapse justify-content-center" id="sidebar">

                         
                            <ul class="navbar-nav">
                                 

                                <li class="nav-item active">
                                    <a class="nav-link section-scroll" href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link section-scroll" href="{{ route('coursepage') }}">Courses</a>
                                </li>

                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      About Us
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-about" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li>
                                                <a class="dropdown-item" href="https://shikhbeshobai.com/about">About Us</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="https://shikhbeshobai.com/privilege-card">Privilege Card</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="https://shikhbeshobai.com/ss-junior">SS Junior</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="https://shikhbeshobai.com/contact">Contact</a>
                                </li> -->
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="https://www.facebook.com/ShikhbeShobai/events/" target="_blank">Events</a>
                                </li>                                
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="https://www.facebook.com/groups/shikhbeshobai/" target="_blank">Comunity</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll live" href="https://www.facebook.com/ShikhbeShobai/live_videos/" target="_blank">LIVE</a>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="ml-auto ml-auto-mobile top-bar">
                                 <a href="{{ route('login') }}" class="login-btn"><i cass="icofont-login"></i> Signin</a>
                                    <a href="{{ route('register') }}" class="login-btn  mobile-hide"><i class="icofont-business-man-alt-1"></i> Signup</a>
                                                                                        

                        </div>
                    </div>
                </nav>
            </header>