<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-speedometer"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow" class="waves-effect">
                        <i class="mdi mdi-share-variant"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ route('user.index')}}" class="waves-effect"><i class="fas fa-user"></i></i> Users</a></li>
                        <li><a href="{{ route('role.index')}}" class="waves-effect"><i class="fa fa-tasks"></i> Roles</a></li>
                        <li><a href="{{ route('permission.index')}}" class="waves-effect"><i class="fa fa-lock"></i> Permissions</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('slider.index')}}" class="waves-effect">
                        <i class="fa fa-image"></i></i>
                        <span>Slider</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('category.index')}}" class="waves-effect">
                        <i class="fas fa-layer-group"></i></i>
                        <span> Service Category</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('subcategory.index')}}" class="waves-effect">
                        <i class="fas fa-layer-group"></i></i>
                        <span> Service Sub Category</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('service.index')}}" class="waves-effect">
                        <i class="fas fa-boxes"></i></i>
                        <span> Service</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('client.index')}}" class="waves-effect">
                        <i class="fas fa-user"></i></i>
                        <span>Client</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('menu.index')}}" class="waves-effect">
                        <i class="fas fa-bars"></i></i>
                        <span> Menu</span>

                    </a>
                </li>



                <li>
                    <a href="{{ route('booking.index')}}" class="waves-effect">
                        <i class="fas fa-book"></i></i>
                        <span>  Booking</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('page.index')}}" class="waves-effect">
                        <i class="fas fa-file"></i></i>
                        <span>    Page</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('booking.quote')}}" class="waves-effect">
                        <i class="fa fa-quote-left"></i></i>
                        <span>  Recent Quote</span>

                    </a>
                </li>


                <li>
                    <a href="{{ route('contact.index')}}" class="waves-effect">
                        <i class="fa fa-quote-left"></i></i>
                        <span>   Contact Details</span>

                    </a>
                </li>


            </ul>0
        </div>
        <!-- Sidebar -->
    </div>
</div>
