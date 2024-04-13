        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin')}}">
                {{-- <div class="sidebar-brand-icon rotate-n-15">  Disini tempat taro logo
                    <i class="fas fa-laugh-wink"></i>
                </div> --}}
                <div class="sidebar-brand-text mx-3">Guest Book</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{request()->is('admin') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt "></i>
                    <span>Dashboard</span>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
                        <!-- Nav Item - Charts -->
            <li class="nav-item {{request()->is('admin/tamu') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin-tamu')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span class="">Data Buku Tamu</span></a>
            </li>

        </ul>