 <!-- begin:: Header -->
 <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/assets') }}/images/logo-sm.png" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/assets') }}/images/logo-dark.png" alt=""
                                height="17" />
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/assets') }}/images/logo-sm.png" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/assets') }}/images/logo-light.png" alt=""
                                height="17" />
                        </span>
                    </a>
                </div>

               

              
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                </div>
                {{-- <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class="bx bx-fullscreen fs-22"></i>
                    </button>
                </div> --}}

                {{-- <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class="bx bx-moon fs-22"></i>
                    </button>
                </div> --}}

               

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('admin/assets') }}/images/users/user-dummy-img.jpg" alt="Header Avatar" />
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                                {{-- <span
                                    class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span> --}}
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome !</h6>
                        
                       
                        <a class="dropdown-item"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href=""><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
