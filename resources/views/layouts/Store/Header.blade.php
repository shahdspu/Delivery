<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <div class="mobile-search waves-effect waves-light">
                <div class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-prepend search-close"><i
                                    class="ti-close input-group-text"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Keyword">
                            <span class="input-group-append search-btn"><i
                                    class="ti-search input-group-text"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="index.html">
                <img class="img-fluid" src="{{ asset('DashboardAssets/assets/images/logo.png') }}" alt="Theme-Logo" />
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <a href="#!" class="waves-effect waves-light">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-red"></span>
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
 
                        {{-- Notification --}}
                    
                    </ul>
                </li>
                <li class="user-profile header-notification">
                    <a href="#!" class="waves-effect waves-light">
                        <img src="{{ asset('image/'. Auth::guard('store')->user()->img)}}" class="img-radius"
                        alt="User-Profile-Image" style="border-radius: 50%; width: 60px; height: 60px; object-fit: cover; clip-path: circle(30%);">                   

                        <span>{{ Auth::guard('store')->user()->name }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                      
                        <li class="waves-effect waves-light">
                            <a href="{{route('store.profile.index')}}">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                     
                        <li class="waves-effect waves-light">
                            <a href="{{route('store.logout')}}">
                                <i class="ti-layout-sidebar-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
