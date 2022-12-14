<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{url('/logo.jpg')}}" style="width:50px" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
{{--    <div class="form-inline">--}}
{{--        <div class="input-group" data-widget="sidebar-search">--}}
{{--            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-sidebar">--}}
{{--                    <i class="fas fa-search fa-fw"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            @php
                \Illuminate\Support\Facades\Session::put('data_id',  'test_data');
            @endphp
           
           
                <li class="nav-item">
              <a href="{{url('admin/dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') || request()->is('admin/dashboard*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Dashboard
                        {{--                        <span class="right badge badge-danger">New</span>--}}
                    </p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('admin/hostel') || request()->is('admin/hostel') || request()->is('admin/hostel/*') || request()->is('admin/hostel/*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-handshake-alt-slash"></i>
                    <p>
                       Hostel
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{url('admin/hostel/add-hostal')}}" class="nav-link {{ request()->is('admin/hostel/add-hostal') || request()->is('admin/hostel/add-hostal*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Hostel</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/hostel/view-hostal')}}" class="nav-link {{ request()->is('admin/hostel/view-hostal') || request()->is('admin/hostel/view-hostal*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Hostels</p>
                        </a>
                    </li>
                </ul>
            </li>
             <li class="nav-item {{ request()->is('admin/student') || request()->is('admin/student') || request()->is('admin/student/*') || request()->is('admin/hostel/*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-user-plus"></i>
                    <p>
                       Student
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{url('admin/student/add-student')}}" class="nav-link {{ request()->is('admin/student/add-student') || request()->is('admin/student/add-student*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Student</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/student/view-student')}}" class="nav-link {{ request()->is('admin/student/view-student') || request()->is('admin/student/view-student*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Students</p>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a href="{{url('admin/student/appeal')}}" class="nav-link {{ request()->is('admin/student/appeal') || request()->is('admin/student/appeal*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Appeal</p>
                        </a>
                    </li>
                </ul>
            </li>
       
             
         
         
            
        
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                        {{--                        <span class="right badge badge-danger">New</span>--}}
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
