<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{route('patient.dashboard')}}" class="brand-link">
    <img src="{{asset('assets/backend/uploads/images/logo.png')}}" alt="logo">
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{auth()->user()->image}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{route('patient.dashboard')}}" class="d-block">patient</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="{{route('patient.dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>

            </li>

            @if(auth()->user()->status === 1)
                <li class="nav-item">
                    <a href="{{route('patient.history.index')}}" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>My Medical History</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('patient.appointment.all')}}" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>My Appointment</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.user.index')}}" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Inbox</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-burn nav-icon"></i>
                        <p>
                            Blood Bank

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-envelope nav-icon"></i>
                                <p>Find Blood</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-envelope nav-icon"></i>
                                <p>Blood Doner</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif
            <li class="nav-item">
                <a href="{{route('patient.profile')}}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>My Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <div>
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link bg-danger"><i class="fas fa-sign-out-alt"></i>Log Out</button>
                    </form>

                </div>
            </li>


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
