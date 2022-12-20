<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HeroBiz Bootstrap Template - Home 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/aksi/img/favicon.png" rel="icon">
  <link href="/aksi/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/aksi/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/aksi/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/aksi/vendor/aos/aos.css" rel="stylesheet">
  <link href="/aksi/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/aksi/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="/aksi/css/variables.css" rel="stylesheet">
  <!-- <link href="/aksi/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="/aksi/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="/aksi/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="/aksi/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="/aksi/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="/aksi/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="/aksi/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ url ('http://127.0.0.1:8000/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="/aksi/img/logo.png" alt=""> -->
        <h1>AKSI<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url ('http://127.0.0.1:8000/aksimuhasa') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!-- <div class="btn-getstarted scrollto">+62-8133-0951-615 (SMP Muhasa) Jl. Brigjend Slamet Riadi No.134, Oro-oro Dowo, Kec. Klojen, Kota Malang</div> -->

    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="/aksi/img/aksiLogo.png" class="img-fluid animated">
      <h2>Selamat Datang di <span>Aksi</span></h2>
      <p>AKSI merupakan singkatan dari Ajang Kompetisi dan Kreativitas Siswa yang diselenggarakan oleh SMP Muhammadiyah 1 Malang. Bertujuan untuk mengembangkan jiwa kepemimpinan siswa/i. Selain itu,
        kegiatan lomba ini juga dapat meningkatkan mutu dan kualitas remaja muslim sehingga
        dapat memberikan kontribusi positif untuk kemajuan bangsa Indonesia.
      </p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Tentang Aksi</a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <p>Waktu</p>
              <h4>Pelaksanaan</h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <h4>24 Agustus 2022</h4>
              <p>Pembukaan Pendaftaran.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <h4>25 Agustus 2022</h4>
              <p>Penutupan Pendaftaran.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <h4>26 Agustus 2022</h4>
              <p>Pembukaan, Penutupan Acara Monaco 2022 dan Pengumuman Pemenang Lomba.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="about" class="cta">
      <div class="container" data-aos="zoom-out">
        <div class="row g-5">
          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Tentang <em>Aksi</em></h3>
            <p>
            AKSI merupakan acara yang diselenggarakan oleh SMP Muhammadiyah 1 Malang. Acara ini mengadakan serangkaian lomba yang ditujukan kepada siswa/i SD terutama kelas 4, 5, dan 6.
            Diharapkan AKSI ini bisa menjadi ajang dan wadah bagi para pelajar di Se Malang Raya untuk mengembangkan jiwa kepemimpinan siswa/i. Selain itu,
            kegiatan lomba ini juga dapat meningkatkan mutu dan kualitas remaja muslim sehingga
            dapat memberikan kontribusi positif untuk kemajuan bangsa Indonesia.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="/aksi/img/aksiLogo.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

  <ul class="nav nav-tabs row gy-4 d-flex justify-content-center text-center">
    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
        <!-- <i class="bi bi-binoculars color-cyan"></i> -->
        <h4>Lomba Tari</h4>
      </a>
    </li><!-- End Tab 1 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
        <!-- <i class="bi bi-box-seam color-indigo"></i> -->
        <h4>Lomba Menggambar dan Mewarnai</h4>
      </a>
    </li><!-- End Tab 2 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
        <!-- <i class="bi bi-brightness-high color-teal"></i> -->
        <h4>Olimpiade MIPA</h4>
      </a>
    </li><!-- End Tab 3 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
        <!-- <i class="bi bi-brightness-high color-teal"></i> -->
        <h4>Lomba Islami</h4>
      </a>
    </li><!-- End Tab 4 Nav -->

  </ul>

  <div class="tab-content">

    <div class="tab-pane active show" id="tab-1">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
          <h3>Lomba Tari</h3>
          <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a target="_blank" href="https://drive.google.com/file/d/1BhGieNprFFj5Lxgm4haTyneIGiVj_cMN/view?usp=sharing" class="btn btn-outline-primary">Juknis Lomba Seni</a>
          <a target="_blank" href="https://bit.ly/LombaTari_AKSI2022" class="btn btn-outline-primary">Pendaftaran Lomba Tari</a>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="/aksi/img/lombaSeni.png" alt="" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 1 -->

    <div class="tab-pane" id="tab-2">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
        <h3>Lomba Menggambar dan Mewarnai</h3>
          <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a target="_blank" href="https://drive.google.com/file/d/1BhGieNprFFj5Lxgm4haTyneIGiVj_cMN/view?usp=sharing" class="btn btn-outline-primary">Juknis Lomba Seni</a>
          <a target="_blank" href="https://bit.ly/LombaMenggambar_AKSI2022" class="btn btn-outline-primary">Pendaftaran Lomba Tari</a>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="/aksi/img/lombaSeni.png" alt="" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 2 -->

    <div class="tab-pane" id="tab-3">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
          <h3>Olimpiade Mipa</h3>
          <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a target="_blank" href="https://drive.google.com/file/d/1Vj9LuGrrUVWacMMctnLohZpuzkEfbIJ3/view?usp=sharing" class="btn btn-outline-primary">Juknis Olimpiade MIPA</a>
          <a target="_blank" href="https://s.id/FormulirOlimpiade" class="btn btn-outline-primary">Pendaftaran Olimpiade MIPA</a>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="/aksi/img/olimpiadeMipa.png" alt="" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 3 -->

    <div class="tab-pane" id="tab-4">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
          <h3>Lomba Islami</h3>
          <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a target="_blank" href="https://drive.google.com/file/d/1BhGieNprFFj5Lxgm4haTyneIGiVj_cMN/view?usp=sharing" class="btn btn-outline-primary">Juknis Lomba Islami</a>
          <a target="_blank" href="https://bit.ly/LombaMenggambar_AKSI2022" class="btn btn-outline-primary">Pendaftaran Lomba Islami</a>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="/aksi/img/lombaIslami.png" alt="" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 4 -->
  </div>
  </div>
</section><!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Kontak Kami</h2>
        </div>

      </div>

      <div class="map">
      <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.3262140828665!2d112.62717!3d-7.965200000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8670066f016a7940!2sSchool%20SMP%20Muhammadiyah%201%20Malang!5e0!3m2!1sen!2sus!4v1669865562112!5m2!1sen!2sus" width="100%" height="371.59" allowfullscreen="" loading="lazy"></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-9 gx-lg-9 d-flex justify-content-between">

          <div class="col-lg-3">
            <div class="info">
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Narahubung 1:</h4>
                  <p>+62-8564-6717-897</p>
                  <p>(Bu Ulfa)</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-5">
            <div class="info">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p class="text-center">Jl. Brigjend Slamet Riadi No.134, Oro-oro Dowo, Kec. Klojen, Kota Malang</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p class="text-center">smpm1.mlg@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-3">
            <div class="info">
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Narahubung 2:</h4>
                  <p>+62-8133-0951-615</p>
                  <p>(Bu Vini)</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="/aksi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/aksi/vendor/aos/aos.js"></script>
  <script src="/aksi/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/aksi/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/aksi/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/aksi/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/aksi/js/main.js"></script>

</body>

</html>