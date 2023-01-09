<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Register - SMP MUHAMMADIYAH 1 MALANG</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href="/img/logohead.png" rel="icon">

        <link href="admin/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="admin/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>


    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="display-table">
            <div class="display-table-cell">
                <diV class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/school_logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center pt-3">
                                        <h4>Register Siswa PPDB</h4>
                                    </div>
                                    @if ($errors->has('auth'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Gagal !</strong> {{ $errors->first('auth') }}
                                    </div>
                                    @endif
                                    <div class="px-3 pb-3">
                                        <form class="form-horizontal m-t-20 mb-0" method="POST" action="{{ route('register.register_ppdb') }}">
                                        @csrf
                                            <div class="form-group row">
                                                <div class="col-12">
                                                <input type="text" placeholder="Username" id="name" class="form-control" name="name" required autofocus>
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <div class="col-12">
                                                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                                </div>
                                            </div>

                                            <div class="form-group text-right row m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-raised btn-block waves-effect waves-light" type="submit">Register</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="form-group m-t-10 mb-0 row text-center">
                                            <div class="col-sm-12 m-t-20">
                                                <p>Sudah Punya Akun? <a href="{{route('login')}}" class="text-muted">Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </diV>
            </div>
        </div>
    </div>


        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/popper.min.js"></script>
        <script src="admin/assets/js/bootstrap-material-design.js"></script>
        <script src="admin/assets/js/modernizr.min.js"></script>
        <script src="admin/assets/js/detect.js"></script>
        <script src="admin/assets/js/fastclick.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.js"></script>
        <script src="admin/assets/js/jquery.blockUI.js"></script>
        <script src="admin/assets/js/waves.js"></script>
        <script src="admin/assets/js/jquery.nicescroll.js"></script>
        <script src="admin/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>
        
    </body>
</html>