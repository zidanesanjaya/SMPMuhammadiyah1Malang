<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cerita Muhasa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logohead.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url ('http://127.0.0.1:8000/') }}">SMP MUHASA</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ url ('http://127.0.0.1:8000/') }}">Home</a></li>
          <li><a class="active" href="{{ url ('http://127.0.0.1:8000/cermus') }}">Cerita Muhasa</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">
    <br><br>
    <!-- ======= Popular Courses Section ======= -->
    <section id="cermus" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Cerita Muhasa</p>
            <h2></h2>
        </div>

    <br>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        @foreach($cermus_list as $value)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
            <img src="/storage/lainya/{{$value->foto}}" class="img-fluid" alt="...">
                <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3 row">
                        <div class="col-7">
                            <h3 class="bg-white"><a href="{{route('detail_cermus' , $value->id)}}">{{$value->judul}}</a></h3>
                        </div>
                        <div class="col">
                            <p class="price">{{date("d-m-Y", strtotime($value->created_at))}}</p>
                        </div>
                    </div>

                    <div class="deskripsi">
                        <?php echo $value->deskripsi ?>
                    </div>
                    <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                            <img src="/img/user.png" class="img-fluid" alt="">
                            <span>{{$value->created_by}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Course Item-->
        @endforeach

        </div>
    </div>
    </section>
    <!-- End Popular Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>