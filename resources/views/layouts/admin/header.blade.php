<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo.png')}}" alt="" height="50px">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('images/logo.png')}}" alt="" height="50px">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <h2 style="color: white">New Project</h2>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ml-1">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('user.profileUpdate')}}"><i class="dripicons-user d-inlne-block text-muted mr-1"></i> Profile</a>
                    <a class="dropdown-item" href="{{route('setting.index')}}"><i class="fa fa-cog"></i> Settings</a>
                    <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logoutform').submit()"><i class="fa fa-power-off mr-1"></i>Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logoutform">
                    {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
