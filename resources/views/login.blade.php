<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 19:00:16 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sign In | AboveMax - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{asset('/page/assets')}}/img/f.png"> --}}


    <!-- Layout config Js -->
    <script src="{{ asset('admin/assets') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/assets') }}/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            {{-- <div class="bg-overlay"></div> --}}

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-2 mt-sm-3 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <h4>AboveMax</h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-dark">Welcome Back !</h5>
                                    <p class="text-dark">Sign in to continue to <b>AboveMax</b> </p>
                                </div>
                                <div class="p-2 mt-2">
                                    <form action="{{ route('account.login_submit') }}" method="post"
                                        novalidate="novalidate">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input class="form-control" type="email" name="email" id="username"
                                                placeholder="Enter Email Address">

                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">

                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5"
                                                    placeholder="Enter password" name="password" autocomplete="off"
                                                    id="password">
                                                <i class="ri-eye-fill" id="togglePassword"
                                                    style="position: absolute; right: 3%; top: 29%; cursor: pointer; color: gray"></i>

                                            </div>
                                        </div>



                                        <div class="mt-4">
                                            <button class="btn btn-dark w-100" type="submit">Sign In</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            {{-- <p class="mb-0">Don't have an account ? <a href="{{route('account.register')}}" class="fw-semibold text-dark text-decoration-underline"> Signup </a> </p> --}}
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">



                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Developed <a target="_blank" href="#">AboveMax</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script src="{{ asset('admin/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('admin/assets') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('admin/assets') }}/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{ asset('admin/assets') }}/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('admin/assets') }}/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{ asset('admin/assets') }}/js/pages/password-addon.init.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 19:00:17 GMT -->

</html>