<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Smp Muhammadiyah 1 Malang</title>
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
        <style>
            .center {
                display: block;
                width: 60%;
            }
        </style> 
    </head>

    <body>
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ url ('http://127.0.0.1:8000/') }}">SMP MUHASA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a href="{{ url ('http://127.0.0.1:8000/cermus_list') }}" class="get-started-btn">Kembali</a>
            </div>
        </header><!-- End Header -->
        <div class="container-xl p-3 mt-5 border pt-5">
            <div class="text-center">
                <h4><strong>CERITA MUHASA</strong></h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-8">
                    <div>
                        <img src="/storage/lainya/{{$cermus->foto}}" class="center" style="object-fit: contain'"alt="">
                        <div class="row">
                            <div class="col">
                                <label for="">Created By : {{$cermus->created_by}}</label>
                            </div>
                            <div class="col">
                                <label for="">Upload Date : {{date("d-m-Y", strtotime($cermus->created_at))}}</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="title mb-3">
                        <h3><strong>{{$cermus->judul}}</strong></h3>
                    </div>
                    <div class="deskripsi">
                        <?php
                            echo $cermus->deskripsi                
                        ?>
                    </div>
                </div>
                <div class="col-4 border p-3">
                    <h4><strong>CERITA LAINYA</strong></h4>
                    <hr>
                @foreach($cermus_list as $value)
                    <div class="align-items-stretch">
                        <div class="course-item">
                        <img src="/storage/lainya/{{$value->foto}}" alt="..." width="394px" height="325px">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3 row mt-2">
                                    <div class="col-7">
                                        <h5 class="bg-white"><a href="{{route('detail_cermus' , $value->id)}}">{{$value->judul}}</a></h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="price">{{date("d-m-Y", strtotime($value->created_at))}}</h5>
                                    </div>
                                </div>
                                <?php echo $value->deskripsi ?>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>



        <!-- Vendor JS Files -->
<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>

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
</script>
    </body>
</html>
