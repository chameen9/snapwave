<!doctype html>
<html lang="en" >

    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }} | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="SnapWave" name="description" />
        <meta content="SnapWave" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="adminassets/images/favicon.ico">

        <!-- DataTables -->
        <link href="adminassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="adminassets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
            type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="adminassets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
            type="text/css" />
            
        <!-- Sweet Alert-->
        <link href="adminassets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- jquery.vectormap css -->
        <link href="adminassets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="adminassets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="adminassets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="adminassets/css/app.min.css"  id="app-style"  rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="detached" data-topbar="colored">



        <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-end">

                            <div class="dropdown d-none d-lg-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if($userImage)
                                        <img src="{{'adminassets/images/users/'.$userImage}}" alt="" class="rounded-circle header-profile-user">
                                    @else
                                        <img src="adminassets/images/users/user.jpg" alt="" class="rounded-circle header-profile-user">
                                    @endif
                                    <span class="d-none d-xl-inline-block ms-1">{{$username}}</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item">
                                        <input type="radio" class="form-check-input theme-choice" id="dark-mode-switch"  />
                                        <label class="form-check-label" for="dark-mode-switch"><i class="bx bx-moon font-size-16 align-middle me-1"></i></label>
                                        <input type="radio" class="form-check-input theme-choice" id="light-mode-switch" checked />
                                        <label class="form-check-label" for="light-mode-switch"><i class="bx bx-sun font-size-16 align-middle me-1"></i></label>
                                    </a>
                                    <br>
                                    <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i>
                                        Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                                </div>
                            </div>

                            <div class="dropdown d-inline-block">
                                
                            </div>

                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="{{ route('admin.index') }}" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="adminassets/images/LOGO.png" alt="" height="30">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="adminassets/images/LOGO.png" alt="" height="39">
                                    </span>
                                </a>

                                <a href="{{ route('admin.index') }}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="adminassets/images/LOGO.png" alt="" height="30">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="adminassets/images/LOGO.png" alt="" height="39">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                                id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                        </div>

                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div class="h-100">

                <div class="user-wid text-center py-4">
                    <div class="user-img">
                        @if($userImage)
                            <img src="{{'adminassets/images/users/'.$userImage}}" alt="" class="avatar-md mx-auto rounded-circle">
                        @else
                            <img src="adminassets/images/users/user.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                        @endif
                    </div>

                    <div class="mt-3">

                        <a href="#" class="text-body fw-medium font-size-16">{{$username}}</a>
                        <p class="text-muted mt-1 mb-0 font-size-13">{{$type}}</p>

                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{route('admin.index')}}" class=" waves-effect">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.banner.index')}}" class=" waves-effect">
                                <i class="mdi mdi-book-open-outline"></i>
                                <span>Banners</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.brand.index')}}" class=" waves-effect" disabled>
                                <i class="mdi mdi-trademark"></i>
                                <span>Brands</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.video.index')}}" class=" waves-effect" disabled>
                                <i class="mdi mdi-video"></i>
                                <span>Videos</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.service.index')}}" class=" waves-effect" disabled>
                                <i class="mdi mdi-format-quote-open-outline"></i>
                                <span>Services</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.users.index')}}" class=" waves-effect" disabled>
                                <i class="mdi mdi-account-group-outline"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.profile')}}" class=" waves-effect">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="calendar.html" class=" waves-effect">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                                <span>Blogs</span>
                            </a>
                        </li>

                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <i class="mdi mdi-account-group-outline"></i>
                                <span>Team</span>
                            </a>
                        </li>

                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <i class="mdi mdi-checkbox-marked-outline"></i>
                                <span>Projects</span>
                            </a>
                        </li> -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

            <div class="main-content">

                <section>
                    @yield('content')
                </section>

                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © {{ config('app.name') }}.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    All rights reserved
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    @if ($message = Session::get('success'))
        <<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{!! $message !!}",
                    showConfirmButton: false,
                    timer: 3000,
                    // toast: true,
                });
            });
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "{!! $message !!}",
                    showConfirmButton: false,
                    timer: 3000,
                    // toast: true,
                });
            });
        </script>
    @endif 

    @if (count($errors)>0)
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let errorMessages = `{!! implode('<br>', $errors->all()) !!}`;

                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error!',
                    html: errorMessages, // Use HTML to display multiple errors
                    //timer: 5000, // Auto-close after 5 seconds
                    showConfirmButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'OK'
                    // toast: true,
                    // position: 'top-end'
                });
            });
        </script>
    @endif

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="adminassets/libs/jquery/jquery.min.js"></script>
    <script src="adminassets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminassets/libs/metismenu/metisMenu.min.js"></script>
    <script src="adminassets/libs/simplebar/simplebar.min.js"></script>
    <script src="adminassets/libs/node-waves/waves.min.js"></script>
    <script src="adminassets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- apexcharts -->
    <script src="adminassets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="adminassets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="adminassets/js/pages/sweet-alerts.init.js"></script>

    <!-- validation init -->
    <script src="adminassets/js/pages/form-validation.init.js"></script>

    <!-- jquery.vectormap map -->
    <script src="adminassets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="adminassets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <script src="adminassets/js/pages/dashboard.init.js"></script>

    <script src="adminassets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="adminassets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="adminassets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="adminassets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="adminassets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="adminassets/libs/jszip/jszip.min.js"></script>
    <script src="adminassets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="adminassets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="adminassets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="adminassets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="adminassets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="adminassets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="adminassets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="adminassets/js/pages/datatables.init.js"></script>

    <!-- apexcharts -->
    <script src="adminassets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- apexcharts init -->
    <script src="adminassets/js/pages/apexcharts.init.js"></script>

    <!-- init js -->
    <script src="adminassets/js/pages/form-editor.init.js"></script>
    <script src="adminassets/libs/tinymce/tinymce.min.js"></script>

    <!-- form repeater js -->
    <script src="adminassets/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="adminassets/js/pages/form-repeater.init.js"></script>

    <!-- App js -->
    <script src="adminassets/js/app.js"></script>

    </body>

</html>