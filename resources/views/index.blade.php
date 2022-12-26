<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMP Muhammadiyah 1 Malang</title>
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

    <!-- index carousel -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="/indexCarousel/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
    
    <style>
        .course-content .deskripsi{
            word-wrap: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
            white-space: nowrap;
            
            }
    </style>

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="{{ url ('http://127.0.0.1:8000/') }}">SMP MUHASA</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <!-- <li><a class="active" href="{{ url ('http://127.0.0.1:8000/') }}">Home</a></li> -->
            <li><a class="active" href="#hero">Home</a></li>
            <li><a href="#main">Profile</a></li>
            <li><a href="#cermus">Cerita Muhasa</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#kegiatanKami">Kegiatan Kami</a></li>
            <li><a href="{{ route('page.matpel') }}">Mata Pembelajaran</a></li>
            <li><a href="{{ url ('http://127.0.0.1:8000/ppdb') }}">PPDB</a></li>
            <li><a href="{{ url ('http://127.0.0.1:8000/aksimuhasa') }}">AKSI</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->

    <a href="{{ url ('http://127.0.0.1:8000/ppdb') }}" class="get-started-btn">Daftar Sekarang</a>
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="position: absolute; z-index: 1;" data-interval="100">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/indexCarousel1.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%); size: 100px;">
        </div>
    </div>
</div>
    <div style="position: absolute; z-index: 2;">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>SMP MUHAMMADIYAH 1 MALANG</h1>
            <h2>Berjiwa Pemimpin - Berakhlak Islami</h2>
            <a href="{{ url ('http://127.0.0.1:8000/ppdb') }}" class="btn-get-started">Daftar Sekarang</a>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <br>
    <br>
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="100">
            <img src="/storage/lainya/{{$fotoKepsek}}" class="img-fluid" alt="">
        </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <div class="section-title">
                <h2>Kepala Sekolah</h2>
                <p>{{$nama_kepsek}}</p>
            </div>
                    <!-- <summary>Sambutan Kepala Sekolah</summary> -->
                    <h3>Assalamu’alaikum Warahmatullahi Wabarakatuh</h3>
                    <p class="fst-italic">
                    Saya ucapkan selamat datang di Laman Website Resmi SMP Muhammadiyah 1 Malang.
                    </p>
                <details>
                    <summary id="bsambutan" style="margin-left: 22px; background: #5fcf80; color: #fff; border-radius: 50px; padding: 8px 25px; white-space: nowrap; transition: 0.3s; font-size: 14px; display: inline-block;">
                        Baca Selengkapnya
                    </summary>
                    <p id="sambutan">
                        {{$sambutan}}
                    </p>
                    <h3>Wassalamu’alaikum Warahmatullahi Wabarakatuh</h3>
                    <p style="text-align: right;">
                        Kepala Sekolah SMP Muhammadiyah 1 Malang
                    </p>
                </details>
            </div>
        </div>
    </div>
    </section>
    <!-- End About Section -->
    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
    <div class="container">

        <div class="row counters">
            <div class="col-lg-6 col-12 text-center">
                <span>Visi</span>
                <ul>
                    @foreach($visi as $value)
                    <li><p>{{$value->lainya}}</p></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-6 col-12 text-center">
                <span>Misi</span>
                <ul>
                    @foreach($misi as $value)
                        <li><i class="bi bi-check-circle"></i> {{$value->lainya}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-left" data-aos-delay="100">
            <img src="/img/depanSekolah.jpg" class="img-fluid" alt="" style="height: 480px; width: 450px;">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Profile Sekolah</h3>
            <p class="fst-italic">
            SMP Muhammadiyah 1 Malang (Muhasa)
            </p>
            <p style="text-align: justify;">
            Berdiri setahun setelah Indonesia Merdeka, tepatnya pada tanggal 18 Agustus 1946 atas prakarsa para tokoh Muhammadiyah Kota Malang. 
            Muhasa adalah cikal bakal pendidikan naungan Muhammadiyah Kota Malang yang dirintis oleh KH. M. Bedjo Dermalaksono, bersama Djoko Raharjo, Suryawiyana, dan Abdul Rahman. 
            Pada awal perintisannya sempat beberapa kali berpindah tempat, yang akhirnya menetap sejak tahun 1951 hingga sekarang di Jalan Bridjen Slamet Riyadi No. 134 (dulu Oroo-oro Dowo 134) yang tidak lain adalah kediaman Kh. M. Bedjo Dermolaksono.
            </p>

        </div>
        </div>

    </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch text-center">
            <div class="content">
            <h3 style="text-align: center; font-size: 250%;-webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: #3C4048;">SMP MUHAMMADIYAH 1 MALANG</h3>
            <hr>
            <h3>Kenapa Harus Muhasa?</h3>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">

                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <!-- <i class="bx bx-receipt"></i> -->
                    <img src="/img/icon/sabe.png" style="width: height; height: 50px; margin-bottom: 50px;">
                    <h4>Salat Berjamaah</h4>
                    <p>Membiasakan siswa untuk melakukan sholat sunnah dhuha sebelum memulai kegiatan belajar dan juga membiasakan siswa untuk sholat berjamaah tepat waktu</p>
                </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <!-- <i class="bx bx-receipt"></i> -->
                    <img src="/img/icon/taqu.png" style="width: height; height: 50px; margin-bottom: 50px;">
                    <h4>Tahfidz Qur'an</h4>
                    <p>Program Hafalan Juz 30 bagi Setiap Siswa dan Program Tahfidz Lanjutan untuk Siswa yang Sudah Hafal Juz 30</p>
                </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <!-- <i class="bx bx-receipt"></i> -->
                    <img src="/img/icon/olim.png" style="width: height; height: 50px; margin-bottom: 50px;">
                    <h4>Olimpiade</h4>
                    <p>Program Pendampingan Siswa untuk Mengembangkan Kemampuannya dalam Bidang Akademik maupun Non-akademik serta Mengikutsertakan Siswa dalam Pelbagai Lomba Lokal, Nasional hingga Internasional</p>
                </div>
                </div>
            </div>
            </div>
            <!-- End .content-->
        </div>
        </div>

    </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
    <div class="container">

        <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$jml_siswa->lainya}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Siswa</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$jml_mapel->lainya}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Mata Pelajaran</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$jml_guru->lainya}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Guru</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$jml_ekskul->lainya}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Ekstrakulikuler</p>
        </div>
        </div>
    </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="cermus" class="courses">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>CERMUS</h2>
            <p>Cerita Muhasa</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">


        @foreach($cermus as $value)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item shadow-sm bg-body rounded">
            <img src="/storage/lainya/{{$value->foto}}" alt="..." width="394px" height="325px">
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
        <!-- End Course Item-->
        
        </div>
        <div class="mt-3 d-flex flex-row-reverse p-2 bd-highlight">
                <a href="{{ route('cermus.list') }}" class="get-started-btn">Berita Lainnya</a>
        </div>
    </div>
    </section><!-- End Popular Courses Section -->
    
    <!-- Gallery Start -->
<div id="galeri" class="trainers container-xxl py-5 w-150">
<br><br>
    <div class="container" data-aos="fade-up">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="section-title">
                <p>Galeri Muhasa</p>
                <h2></h2>
            </div>
        </div>

        <div class="row g-4 portfolio-container">
            @foreach($galeri as $value)
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="/storage/lainya/{{$value->lainya}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Kegiatan Kami Start -->
    <section id="kegiatanKami" class="testimonials">
      <div class="container" data-aos="fade-up">
        <br><br>
      <div class="section-title ms-lg-5">
        <h2>Ekstrakulikuler</h2>
        <p>Kegiatan Kami</p>
    </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/hisbulWathan.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Hisbul Watan</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/tapakSuci.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Tapak Suci</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/englishClub.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">English Club</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/kontenCreator.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Konten Kreator</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/eSport.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">E - Sport</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/tari.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Tari</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/drumBand.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Drumband</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/service-1.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Bina Vokal</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/service-1.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Band</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/ekstrakulikuler/futsal.jpg" class="testimonial-img" alt="">
                  <p class="fs-4">Futsal</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
<!-- Kegiatan Kami End -->

<!-- Projects Start -->
<div class="container-xxl py-3 w-75">
        <div class="container">
        <div class="section-title">
            <h2>Testimoni</h2>
            <p>Testimoni Alumni</p>
        </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="/img/testimoni/rayhan.jpeg" alt="">
                        <div class="portfolio-text">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <h4 class="text-white mb-4">Rayhan Rezanabil Risadi</h4>
                                <h4 class="text-white mb-4">S1 Desain Produk, STT</h4>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-3">
                                            Dulu waktu di Muhasa saya adalah pribadi yang tidak begitu paham dengan ajaran agama, di Muhasa saya mempelajari banyak pengetahuan tentang agama sehingga saat ini sangat membantu. dari situ pribadi dan akhlak saya terbentuk , terimakasih Muhasa.
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="/img/testimoni/haqqi.jpeg" alt="">
                        <div class="portfolio-text">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <h4 class="text-white mb-4">M. Haqqi Mustofa Kamil</h4>
                                <h4 class="text-white mb-4">D3 Teknik Sipil, Polinema</h4>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-3">
                                            Selama sekolah di Muhasa saya merasa nyaman dan senang karena gurunya baik-baik dan sabar kalo mengajar. Dan nilai nilai Islam di SMP ini sangat dijunjung tinggi sehingga keimanan siswa akan semakin kuat dan bertambah
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="/img/testimoni/riven.jpeg" alt="">
                        <div class="portfolio-text">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <h4 class="text-white mb-4">Riven Ayudita</h4>
                                <h4 class="text-white mb-4">S1 Pend Matematika, UMM</h4>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-3">
                                            Bersekolah di Muhasa selama tiga tahun saya didik oleh guru-guru yang sangat profesional pada bidangnya masing-masing. Disini saya dididik untuk bisa menjadi pribadi maju, kreatif dan tentunya berakhlak yang sampai saat ini saya ingat pesan itu.
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <section class="venue section-padding" id="section_6">
            <div class="container" data-aos="fade-up">
                <div class="row">
                <div class="section-title">
                    <h2>Lokasi</h2>
                    <p>Lokasi SMP MUHASA</p>
                </div>

                    <div class="col-lg-6 col-12">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.3262140828665!2d112.62717!3d-7.965200000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8670066f016a7940!2sSchool%20SMP%20Muhammadiyah%201%20Malang!5e0!3m2!1sen!2sus!4v1669865562112!5m2!1sen!2sus" width="100%" height="371.59" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="venue-thumb bg-white shadow-lg">
                            
                            <div class="venue-info-title">
                                <h2 class="text-white mb-0">SMP Muhammadiyah 1 Malang</h2>
                            </div>

                            <div class="venue-info-body">
                                <h4 class="d-flex">
                                    <i class="bi-geo-alt me-2"></i> 
                                    <span>Jl. Brigjend Slamet Riadi No.134, Oro-oro Dowo, Kec. Klojen, Kota Malang</span>
                                </h4>


                                <div class="row">
                                    <div class="col">
                                    <h5 class="mt-4 mb-3">
                                        <a target="_blank" href="https://www.instagram.com/smpmuhammadiyahsatu/">
                                            <i class="bi bi-instagram me-2"></i>
                                            Instagram
                                        </a>
                                    </h5>
                                    <h5 class="mt-4 mb-3">
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6281330951615&text=Saya%20Berminat%20Mendaftar%20di%20SMP%20MUHASA">
                                            <i class="bi bi-whatsapp me-2"></i>
                                            Whatsapp
                                        </a>
                                    </h5>
                                    </div>

                                    <div class="col">
                                    <h5 class="mt-4 mb-3">
                                        <a target="_blank" href="https://www.youtube.com/@smpmuhammadiyahsatu3906">
                                            <i class="bi bi-youtube me-2"></i>
                                            Youtube
                                        </a>
                                    </h5>
                                    <h5 class="mt-4 mb-3">
                                        <a target="_blank" href="https://web.facebook.com/SmpMuhammadiyah1Malang">
                                            <i class="bi bi-facebook me-2"></i>
                                            Facebook
                                        </a>
                                    </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

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
<script src="https://kit.fontawesome.com/3f31db6242.js" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Index Carousel -->

<!-- Template Main JS File -->
<script src="/js/main.js"></script>
<script>
    btn.addEventListener('click', () => {
    // 👇️ hide button
    btn.style.display = 'none';

    // 👇️ show div
    const box = document.getElementById('sambutan');
    box.style.display = 'block';
    });

// modal
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });
</script>

</body>

</html>