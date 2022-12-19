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
                <a href="{{ url ('http://127.0.0.1:8000/ppdb') }}" class="nav-item nav-link active">HOME</a>
                <a href="#about" class="nav-item nav-link">TENTANG KAMI</a>
                <a href="#kegiatan" class="nav-item nav-link">KEGIATAN KAMI</a>
                <a href="{{ url ('http://127.0.0.1:8000/cermus_list') }}" class="nav-item nav-link" target="_blank">CERITA MUHASA</a>
                <a href="{{ url ('http://127.0.0.1:8000/register') }}" class="nav-item nav-link">DAFTAR PPDB</a>
                <a href="{{ url ('http://127.0.0.1:8000/login') }}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-lg-block nav-item nav-link">MASUK<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 style="font-size: 40px;" class="text-white mb-4 animated slideInDown">SMP MUHAMMADIYAH 1 MALANG</h2>
                                    <h2 style="color: #FED049;" class="mb-4 animated slideInDown">Berjiwa Kepemimpinan - dan - Berakhlak Islami</h2>
                                    <h3 class="text-white mb-4 animated slideInDown">PPDB SMP MUHASA TELAH DIBUKA, Mari bergabung dengan kami.</h3>
                                    <a href="{{ url ('https://ppdb.smpmuhasa.sch.id/register') }}" class="btn btn-primary py-sm-3 px-sm-4">JOIN NOW</a>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Carousel End -->

<!-- Features Start -->
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">TENTANG</p>
                <h1 class="display-5 mb-4">SMP MUHAMMADIYAH 1 MALANG</h1>
                <p class="mb-4">SMP MUHASA merupakan sekolah yang berfokus pada pengembangan karakter Islami.</p>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                        <img style="width: 55px; height: width;" class="text-primary" src="/img/ppdb/icon/shalatbersama.png">
                                    </div>
                                    <h4 class="mb-0">Sholat Berjamaah</h4>
                                    <h5 class="mb-0">Pembiasaan sholat berjamaah merupakan salah satu upaya sekolah untuk membentuk karakter islami peserta didik.</h5>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <img style="width: 55px; height: width;" class="text-primary" src="/img/ppdb/icon/hafalan.png">
                                    </div>
                                    <h4 class="mb-0">Target Hafalan Alqur'an</h4>
                                    <h5 class="mb-0">Siswa mempunyai target hafalan minimal juz ke-30 dengan harapan setiap lulusan SMP Muhasa minimal hafal juz ke-30.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <img style="width: 55px; height: width;" class="text-primary" src="/img/ppdb/icon/tahfidz.png">
                                    </div>
                                    <h4 class="mb-0">Program Tahfidz</h4>
                                    <h5 class="mb-0">Program ini untuk memfasilitasi siswa yang sudah hafal juz ke-30 di jenjang studi sebelumnya, sehingga di SMP Muhasa ditingkatkan lagi hafalannya untuk juz berikutnya.</h5>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <img style="width: 55px; height: width;" class="text-primary" src="/img/ppdb/icon/polim.png">
                                    </div>
                                    <h4 class="mb-0">Program Olimpiade</h4>
                                    <h5 class="mb-0">Program sekolah dalam upaya mengembangkan kemampuan siswa dalam bidang akademik sehingga siswa mampu bersaing dalam kompetisi tingkat kota, propinsi, nasional maupun internasional.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="display-4 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <a target="_blank" href="https://web.facebook.com/SmpMuhammadiyah1Malang">
                    <i class="fa-brands fa-facebook text-white"></i><br>
                    <h2 class="fs-5 fw-semi-bold text-light">Facebook</h2>
                </a>
            </div>
            <div class="display-4 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <a target="_blank" href="https://www.instagram.com/smpmuhammadiyahsatu/">
                    <i class="fa-brands fa-instagram text-white"></i><br>
                    <h2 class="fs-5 fw-semi-bold text-light">Instagram</h2>
                </a>
            </div>
            <div class="display-4 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <a target="_blank" href="https://www.youtube.com/@smpmuhammadiyahsatu3906">
                    <i class="fa-brands fa-youtube text-white"></i><br>
                    <h2 class="fs-5 fw-semi-bold text-light">Youtube</h2>
                </a>
            </div>
            <div class="display-4 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=6281330951615&text=Saya%20Berminat%20Mendaftar%20di%20SMP%20MUHASA">
                    <i class="fa-brands fa-whatsapp text-white"></i><br>
                    <h2 class="fs-5 fw-semi-bold text-light">Whatsapp</h2>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Projects Start -->
<div class="container-xxl py-5" id="kegiatan">
    <br><br>
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kegiatan</p>
                <h1 class="display-5 mb-5">Ekstrakulikuler</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Hisbul Watan</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Tapak Suci</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">English Club</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Konten Kreator</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">E-Sport</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Tari</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Drumband</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Bina Vokal</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Band</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Futsal</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">Testimoni Alumni Kami</h1>
                <p class="mb-4">Kami memiliki lulusan yang terbaik, berikut beberapa alumni dari sekolah kami.</p>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="/img/testimoni/rayhan.jpeg" alt="">
                        <p class="fs-5">Dulu waktu di MUHASA saya adalah pribadi yang tidak begitu paham dengan ajaran agama, di muhasa saya mempelajari banyak pengetahuan tentang agama sehingga saat ini sangat membantu. dari situ pribadi dan akhlak  saya terbentuk, terimakasih muhasa, very cool...</p>
                        <h4>Rayhan Rezanabil Risadi</h4>
                        <span>S1 Desain Produk STT</span>
                    </div>
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="/img/testimoni/haqqi.jpeg" alt="">
                        <p class="fs-5">Alhamdulillah sekali dulu pas SMP saya sekolah di SMP MuHUSA, saya merasa nyaman dan senang karena guru"nya baik-baik dan sabar kalo mengajar. Dan nilai nilai Islam di SMP ini sangat dijunjung tinggi sehingga keimanan siswa akan semakin kuat dan bertambah</p>
                        <h4>Muhammad Haqqi Musthafa Kamil</h4>
                        <span>D3 Jurusan Teknik Sipil Polinema</span>
                    </div>
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="/img/testimoni/riven.jpeg" alt="">
                        <p class="fs-5">Sebelum itu saya pernah bersekolah di SMP Muhammadiyah 1 Malang  selama tiga tahun saya didik  oleh guru-guru yang sangat profesional pada bidangnya masing-masing, beliau sangat telaten dalam mengajari saya ketika saya belum mampu memahami yang diajarkan. Disini didiik untuk bisa menjadi pribadi maju,kreatif dan tentunya berakhlak yang sampai saat ingat pesan ini.</p>
                        <h4>Riven Ayudita</h4>
                        <span>S1 Pendidkan Matematika UMM</span>
                    </div>
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="/img/testimoni/user.png" alt="">
                        <p class="fs-5">Selama saya belajar di SMP Muhammadiyah 1 Malang. Saya merasa mudah memahami pelajaran karena sistem mengajar belajarnya yang baik dan guru-gurunya yang ramah. Saya juga jadi bisa mengenal banyak teman dari beragam latar belakang. Yang paling saya suka dari kenangan di sana adalah dibudayakannya sholat fardhu berjamaah di Masjid.</p>
                        <h4>Anggara Mahatma Wicaksono</h4>
                        <span>D4 Teknik Sipil Politeknik Negeri Malang</span>
                    </div>
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="/img/testimoni/user.png" alt="">
                        <p class="fs-5">Saya bangga dan bersyukur bisa menempuh penddidikan di SMP Muhammadiyah 1 Malang karena selain membangun akademik siswa, akhlak dan daya pikir siswa pun ikut diasah.</p>
                        <h4>Ageng Maulana</h4>
                        <span>D4 Teknik Sipil Kelas Internasional Politeknik Negeri Malang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Quote Start -->
<div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.3262140828665!2d112.62717!3d-7.965200000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8670066f016a7940!2sSchool%20SMP%20Muhammadiyah%201%20Malang!5e0!3m2!1sen!2sus!4v1669865562112!5m2!1sen!2sus" width="100%" height="371.59" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0 align-center">
                        <div class="venue-thumb bg-white shadow-lg">

                            <div class="venue-info-body">
                                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                                    <h1 class="">LOKASI KAMI</h1>
                                    <p>SMP MUHAMMADIYAH 1 MALANG</p>
                                </div>
                                <h4 class="d-flex text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                                    <i class="bi-geo-alt me-2"></i> 
                                    <span>Jl. Brigjend Slamet Riadi No.134, Oro-oro Dowo, Kec. Klojen, Kota Malang</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

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

<script src="/crousel/lib/wow/wow.min.js"></script>
<script src="/crousel/lib/easing/easing.min.js"></script>
<script src="/crousel/lib/waypoints/waypoints.min.js"></script>
<script src="/crousel/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/crousel/lib/counterup/counterup.min.js"></script>

<!-- Template Javascript -->
<script src="/js/ppdbmain.js"></script>
<script src="/carousel/js/main.js"></script>
</body>

</html>