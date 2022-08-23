<div class="sidemenu-area">
    <div class="sidemenu-header">
        <!-- <a href="{{route('admin.dashboard')}}" class="navbar-brand d-flex align-items-center">
            <img src="{{asset('FrontEnd/images/stil.png')}}" alt="image" width="100px">
        </a> -->
        <a href="{{route('admin.dashboard')}}" class="navbar-brand d-flex align-items-center">
            <img src="{{asset('BackEnd/assets/img/small_logo.png')}}" alt="image" id="bigLogo">
            <span><i>ST<font color="#F39700">IL</font></i></span>
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item-title">
                <b>Main</b>
            </li>

            <li class="nav-item mm-active">
                <a href="{{route('admin.dashboard')}}" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item-title">
                <b>Website</b>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bxs-briefcase-alt-2'></i></span>
                    <span class="menu-title">Career</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Jobs</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item">
                                <a href="{{route('admin.addjobs')}}" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Add Job</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin.joblist')}}" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Job List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Applicants</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item">
                                <a href="{{route('admin.applicants')}}" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">View Applicants</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-chat'></i></span>
                    <span class="menu-title">Contact Us</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="{{route('admin.allFeedbacks')}}" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">View Feedbacks</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-item-title">
                <b>Asset Tracking</b>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bxs-user-detail'></i></span>
                    <span class="menu-title">Asset Management</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Asset</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Add Asset</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Asset List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->
            
        </ul>
    </div>
</div>