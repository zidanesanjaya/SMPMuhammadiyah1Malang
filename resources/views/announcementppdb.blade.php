<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPDB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/ppdbbootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/ppdbstyle.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <a href="https://api.whatsapp.com/send?phone=6281330951615&text=Saya%20Berminat%20Mendaftar%20di%20SMP%20MUHASA">
                        <span class="pointer-events: none;">+62-8133-0951-615</span>
                    </a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <a href="mailto:hello@yourgmail.com">
                        <span>smpm1.mlg@gmail.com</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ url ('http://127.0.0.1:8000/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">SMP MUHASA</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url ('http://127.0.0.1:8000/ppdb') }}" class="nav-item nav-link">HOME</a>
                <a href="{{ url ('http://127.0.0.1:8000/pengumumanppdb') }}" class="nav-item nav-link active">PENGUMUMAN</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
        <th>No.</th>
        <th>Nomor Pendaftaran</th>
        <th>Nama Calon Peserta Didik</th>
        <th>Asal Sekolah</th>
        <th>Nilai/Skor Akhir</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
            <p class="fw-bold mb-1">1.</p>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">109238109283</p>
      </td>
      <td>
        <p class="fw-normal mb-1">John Doe</p>
      </td>
      <td>SDN MALANG</td>
      <td>
        <p class="fw-normal mb-1">4.0</p>
      </td>
      <td>
        <span class="badge1 badge-danger rounded-pill d-inline">Tidak Diterima</span>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
            <p class="fw-bold mb-1">2.</p>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">109238109283</p>
      </td>
      <td>
        <p class="fw-normal mb-1">John Doe</p>
      </td>
      <td>SDN MALANG</td>
      <td>
        <p class="fw-normal mb-1">4.0</p>
      </td>
      <td>
        <span class="badge1 badge-success rounded-pill d-inline">Diterima</span>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
            <p class="fw-bold mb-1">3.</p>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">109238109283</p>
      </td>
      <td>
        <p class="fw-normal mb-1">John Doe</p>
      </td>
      <td>SDN MALANG</td>
      <td>
        <p class="fw-normal mb-1">4.0</p>
      </td>
      <td>
        <span class="badge1 badge-danger rounded-pill d-inline">Tidak Diterima</span>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/parallax/parallax.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://kit.fontawesome.com/3f31db6242.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>

    <!-- Template Javascript -->
    <script src="/js/ppdbmain.js"></script>
</body>

</html>