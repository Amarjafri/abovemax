@php $admin=App\Models\User::find(Auth::id()); @endphp
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
      
        <a href="" class="logo logo-light mt-2">
            <span class="logo-sm">
       

            </span>
            <span class="logo-lg">

                
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                {{-- <li class="menu-title"><span data-key="t-menu">Menu</span></li> --}}

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link menu-link">
                        <i class="ri-dashboard-2-line"></i>
                        <span>Dashboards</span>
                    </a>

                </li>



               


                <li class="nav-item">
                    <a href="{{ route('admin.companies.index') }}" class="nav-link menu-link">
                        <i class="ri-home-3-fill"></i>
                        <span>Company</span>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.employees.index') }}" class="nav-link menu-link">
                        <i class="ri-shield-user-fill"></i>
                        <span>Employees</span>
                    </a>

                </li>
                


                
                





                

                <li class="nav-item">
                    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link menu-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="#6d7080" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2" />
                                <path d="M9 12h12l-3-3m0 6l3-3" />
                            </g>
                        </svg>
                        <span>Logout</span>
                    </a>

                </li>







            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
