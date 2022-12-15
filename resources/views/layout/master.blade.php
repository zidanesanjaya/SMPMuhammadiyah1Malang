<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SMP MUHAMMADIYAH 1 MALANG</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- Dropzone css -->
        <link href="/admin/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet"> 
        
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="/admin/assets/plugins/fullcalendar/vanillaCalendar.css"/>
        <link rel="stylesheet" href="/admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css">
        <link rel="stylesheet" href="/admin/assets/plugins/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="/admin/assets/plugins/morris/morris.css">
        <link rel="stylesheet" href="/admin/assets/plugins/metro/MetroJs.min.css">

        <link rel="stylesheet" href="/admin/assets/plugins/carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/admin/assets/plugins/carousel/owl.theme.default.min.css">

        <link href="/admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
        <link href="/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="/admin/assets/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
        <link href="/admin/assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
  
         <!-- DataTables -->
        <link href="/admin/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="/admin/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> 

        <link href="/admin/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="/admin/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
        <link href="/admin/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/admin/assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="/admin/assets/js/jquery.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <img src="/img/logohead.png" alt="" class="logo-large">
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">
                    <div id="sidebar-menu">
                        <ul>
                            @if(Auth::user()->role == 'siswa')
                            <li>
                                <a href="{{route('dashboard')}}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('pembayaran')}}" class="waves-effect">
                                    <i class="mdi mdi-cash-usd"></i>
                                    <span> Pembayaran </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-cards"></i>
                                    <span> Form Wajib <span class="text-danger">*</span></span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{route('form_wajib')}}">Siswa</a>
                                    </li>
                                    <li>
                                        <a href="{{route('form_wajib_orang_tua')}}">Orang Tua</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('profile')}}" class="waves-effect">
                                    <i class="mdi mdi-account"></i>
                                    <span> Profile</span>
                                </a>
                            </li>
                            @elseif(Auth::user()->role == 'user')
                            <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span> Informasi </span>
                                        <span class="float-right">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('visimisi_page')}}">Visi dan Misi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('sambutan')}}">Sambutan kepala Sekolah</a>
                                        </li>
                                        <li>
                                            <a href="{{route('galeri')}}">Galeri</a>
                                        </li>
                                        <li>
                                            <a href="{{route('cermus')}}">Cerita Muhasa</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->role == 'admin')
                                <li>
                                    <a href="{{route('dashboard_admin')}}" class="waves-effect">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Dashboard</span>
                                    </a>
                                </li>
                                <!-- <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-animation"></i>
                                        <span> Informasi </span>
                                        <span class="float-right">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">Cerita Muhasa</a>
                                        </li>
                                        <li>
                                            <a href="#">Galeri</a>
                                        </li>
                                        <li>
                                            <a href="{{route('sosial_media.page')}}">Sosial Media</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span> Informasi </span>
                                        <span class="float-right">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('visimisi_page')}}">Visi dan Misi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('sambutan')}}">Sambutan kepala Sekolah</a>
                                        </li>
                                        <li>
                                            <a href="{{route('galeri')}}">Galeri</a>
                                        </li>
                                        <li>
                                            <a href="{{route('cermus')}}">Cerita Muhasa</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-cash-multiple"></i>
                                        <span> Pembayaran </span>
                                        <span class="float-right">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('gelombang')}}">Gelombang</a>
                                        </li>
                                        <li>
                                            <a href="{{route('list_pembayaran_lunas_page')}}">List Sudah Lunas</a>
                                        </li>
                                        <li>
                                            <a href="{{route('list_pembayaran_belum_lunas_page')}}">List Belum Lunas</a>
                                        </li>
                                        <li>
                                            <a href="{{route('list_pembayaran_page')}}">Pembayaran</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-account-circle"></i>
                                        <span> Siswa </span>
                                        <span class="float-right">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('user_siswa.page')}}">List Siswa</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="mdi mdi-account-key"></i>
                                        <span> Admin </span>
                                        <span class="float-right">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{route('user_admin.page')}}">List User & Admin</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="{{route('kelas.page')}}" class="waves-effect">
                                        <i class="mdi mdi-book-open-page-variant"></i>
                                        <span> Pelajaran </span>
                                    </a>
                                </li> -->
                            @endif  
                        </ul>
                    </div>
                <div class="clearfix"></div>
                </div>
                <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <ul class="list-inline float-right mb-0 mr-3">                         
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                        aria-expanded="false">
                                        @if(Auth::user()->path_foto != null)
                                        <img src="/storage/avatars/{{Auth::user()->path_foto}}" alt="user" class="rounded-circle img-thumbnail">
                                        @else
                                        <img src="/img/user.png" alt="user" class="rounded-circle img-thumbnail">
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-account-circle m-r-5 text-muted"></i> {{ Auth::user()->name }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('signout') }}">
                                            <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper dashborad-v">

                        <div class="container-fluid">
                           
                            @yield('content')
                        </div>
                        <!-- container -->

                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->

                <footer class="footer">
                    © 2018 Urora by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="/admin/assets/js/popper.min.js"></script>
        <script src="/admin/assets/js/bootstrap-material-design.js"></script>
        <script src="/admin/assets/js/modernizr.min.js"></script>
        <script src="/admin/assets/js/detect.js"></script>
        <script src="/admin/assets/js/fastclick.js"></script>
        <script src="/admin/assets/js/jquery.slimscroll.js"></script>
        <script src="/admin/assets/js/jquery.blockUI.js"></script>
        <script src="/admin/assets/js/waves.js"></script>
        <script src="/admin/assets/js/jquery.nicescroll.js"></script>
        <script src="/admin/assets/js/jquery.scrollTo.min.js"></script>


        <script src="/admin/assets/plugins/carousel/owl.carousel.min.js"></script>
        <script src="/admin/assets/plugins/fullcalendar/vanillaCalendar.js"></script>
        <script src="/admin/assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="/admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="/admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="/admin/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="/admin/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
        <script src="/admin/assets/plugins/metro/MetroJs.min.js"></script>
        <script src="/admin/assets/plugins/raphael/raphael.min.js"></script>
        <script src="/admin/assets/plugins/morris/morris.min.js"></script>
        <script src="/admin/assets/pages/dashborad.js"></script>
        <script src="/admin/assets/plugins/select2/select2.min.js"></script>

        <!-- Dropzone js -->
        <script src="/admin/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="/admin/assets/pages/upload-init.js"></script>
        <script src="/admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="/admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Plugins Init js -->
        <script src="/admin/assets/pages/form-advanced.js"></script>

          <!-- Required datatable js -->
        <script src="/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/admin/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="/admin/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/admin/assets/plugins/datatables/jszip.min.js"></script>
        <script src="/admin/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="/admin/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="/admin/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="/admin/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="/admin/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="/admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="/admin/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
        <!-- Datatable init js -->
        <script src="/admin/assets/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="/admin/assets/js/app.js"></script>
       
    </body>

</html>