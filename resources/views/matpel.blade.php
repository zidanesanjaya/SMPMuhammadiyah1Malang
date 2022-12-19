<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Smp Muhammadiyah 1 Malang - Mata Pelajaran</title>
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

    <link rel="stylesheet" href="matpel/assets/css/fontawesome.css">
    <link rel="stylesheet" href="matpel/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="matpel/assets/css/owl.css">
    <link rel="stylesheet" href="matpel/assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="{{ url ('http://127.0.0.1:8000/') }}">SMP MUHASA</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

    <a href="{{ url ('http://127.0.0.1:8000/') }}" class="get-started-btn">Kembali</a>

    </div>
</header><!-- End Header -->

<section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">Semua Mata Pelajaran</li>
                  <li data-filter=".kelas7">Kelas 7</li>
                  <li data-filter=".kelas8">Kelas 8</li>
                  <li data-filter=".kelas9">Kelas 9</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                @foreach($matpel as $value)
                <!-- kelas 7 -->
                <?php
                  $arr = explode(' ',trim($value->kelas));

                ?>
                <div class="col-lg-4 templatemo-item-col all {{ strtolower($arr[0]).$arr[1]}}">
                  <div class="meeting-item">
                    <div class="down-content">
                      <div class="date">
                        <h6>{{$arr[0]}} <span>{{$arr[1]}}</span></h6>
                      </div>
                      <a href="{{ route('page.matpel_detail' ,[$value->kelas , $value->nama_materi , $value->nama_guru])}}"><h4>{{$value->nama_materi}}</h4></a>
                      <p>{{$value->nama_guru}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
        &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
    </div>
</footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/js/main.js"></script>

<script src="/matpel/vendor/jquery/jquery.min.js"></script>
<script src="/matpel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/matpel/assets/js/isotope.min.js"></script>
<script src="/matpel/assets/js/owl-carousel.js"></script>
<script src="/matpel/assets/js/lightbox.js"></script>
<script src="/matpel/assets/js/tabs.js"></script>
<script src="/matpel/assets/js/isotope.js"></script>
<script src="/matpel/assets/js/video.js"></script>
<script src="/matpel/assets/js/slick-slider.js"></script>
<script src="/matpel/assets/js/custom.js"></script>

</body>

</html>