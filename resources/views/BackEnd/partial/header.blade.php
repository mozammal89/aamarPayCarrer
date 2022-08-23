
    <nav class="navbar top-navbar navbar-expand">
        <div class="collapse navbar-collapse" id="navbarSupportContent">
            <div class="responsive-burger-menu d-block d-lg-none">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
            
            <ul class="navbar-nav left-nav align-items-center">
                
            </ul>

            <form class="nav-search-form d-none ml-auto d-md-block">
                
            </form>

            <ul class="navbar-nav right-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                        <i class="bx bx-fullscreen"></i>
                    </a>
                </li>

                <li class="nav-item dropdown profile-nav-item">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="menu-profile">
                            
                            <span class="name">Hi! {{Auth::user()->email}}</span>
                            
                            <img src="{{asset('BackEnd/assets/img/logo_main.png')}}" class="rounded-circle" alt="image">
                        </div>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                                <img src="{{asset('BackEnd/assets/img/logo_main.png')}}" class="rounded-circle" alt="image">
                            </div>

                            <div class="info text-center">
                                <p class="mb-3 email"><span class="name">{{Auth::user()->email}}</span></p>
                            </div>
                        </div>

                        <div class="dropdown-body">
                            <!-- <ul class="profile-nav p-0 pt-3">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class='bx bx-cog'></i> <span>Settings</span>
                                    </a>
                                </li>
                            </ul> -->
                        </div>

                        <div class="dropdown-footer">
                            <ul class="profile-nav">
                                <li class="nav-item">
                                    <form action="{{route('logout')}}" method="POST" class="nav-link">
                                        @csrf
                                        <i class='bx bx-log-out'></i><button type="submit" class="btn btn-danger btn-sm" style="margin-top: -6px;">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    