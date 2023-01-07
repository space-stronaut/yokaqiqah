@extends('layouts.frontend')
@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            @auth
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand">
                    <img src="assets/img/logowh.png" height="35" alt="" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#coursel">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lamankedua">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lamanke5">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lamankeenam">Kontak</a>
                    </li>
                </ul>
                <div class="dropdown ms-4">
                    <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="{{ '/profile/'.auth()->user()->id }}">Profile</a></li>
                        {{-- Logout --}}
                        <li>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Left links -->
            </div>
            @else
            <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand">
                    <img src="assets/img/logowh.png" height="35" alt="" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#coursel">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lamankedua">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lamanke5">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lamankeenam">Kontak</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <form class="navlogbut d-flex">
                <button class="btn btn-outline-danger bg-secondary=" type="submit"><a class="nav-link" href="login">LOGIN</a></button>
            </form>
            @endauth
    </nav>
    <!-- Navbar -->


    <!-- Coursel -->
    <section class="coursel" id="coursel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button-->
            </div>
            <div class="carousel-inner" style="width: 100%; height: 650px;">
                <div class="carousel-item active">
                    <img src="assets/img/deskop.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                    <div>
                        <img src="assets/img/Frame 16.png" alt="" style="width: 100%; " ;>
                    </div>

                    >
                </div>

                >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
    <!-- EndCoursel -->


    <!-- Halaman ke 2 -->
    <section class="lamankedua" id="lamankedua">
        <div>
            <img src="assets/img/bg22.jpg" alt="" style="width: 100%; " ;>
        </div>
        <div class="icon1">
            <img src="assets/img/logo.png" alt="" style="width: 10%;">
        </div>
        <div class="ml1" style="">
            <h1>Kenapa Harus YokAqiqah</h1>
            <p1>YokAqiqah adalah web Untuk Ayah Bunda yang tidak ingin ribet dalam Aqiqah
                <br>Disini kami menyediakan paket Aqiqah tanpa ribet
                <br>Hewan yang kami pilih adalah hewan-hewan pilihan
                <br>Hewan yang sehat dan yang pasti hewan kita memiliki kualitas yang bagus
                <br>Disini kita menyediakan sistem perayaan Aqiqah
                <br>Ketika ayah bunda ingin memelakukan perayaan aqiqah
                <br>Kami dari tim yok Aqiqah bisa bantu dalam perancangan nya untuk konsultasi.
            </p1>

        </div>
    </section>
    <!-- Halaman ke 2 -->


    <!-- Halaman ke 3 yokaqiqah -->
    <section class="lamanketiga" id="lamanketiga">
        <div class="laman2">
            <<img src="assets/img/bg12.png" alt="" style="width:100%;" ;-->

        </div>
        <div class="ml2" style="">
            <h1>Kenapa Harus YokAqiqah</h1>
            <div class="textlt1" style="">
                <h1>Hewan Ternak pilihan</h1>
                <img src="assets/img/kambing.jpg" alt="" style="width: 500px; height: 500px;">
            </div>
            <div class="textlt2" style="">
                <h1>Siap saji Dan Bisa Lansung Dinikmati</h1>
                <img src="assets/img/home.jpg" alt="" style="width: 500px; height: 500px;">
                <!--div class="carousel-inner" style="width: 50%; height: 650px;">
                <img src="assets/img/home.jpg" class="d-block w-100" alt="..."-->

            </div>

    </section>
    <!-- Halaman ke 3 -->


    <!-- Halaman ke 4 -->
    <section class="lamankeempat" id="lamankeempat">
        <div>
            <img src="assets/img/bg23.png" alt="" style="width: 50%;" ;>
        </div>
        <div class="textlt3" style="">
            <h1>Apa yang Anda ingin tanyakan tentang kami?</h1>
            <h4>YokAqiqah adalah website yang mempermudah aqiqah dimanapun dan kapanpun
                <br>Bagi orang tua yang ingin melakukan aqiqah
                <br>namun kesulitan dikarenakan waktu yang terbatas
                <br>Kami menyediakan layanan Aqiqah dengan hewan yang higenis serta menu yang
                <br>bervariasi dibawah pengawasan Dewan Syariah yang bisa diantar kapanpun dan dimanapun

            </h4>
            .


        </div>

    </section>



    <!-- Card -->
    <section class="cardsl" id="cardsl" style="">
        <section class="lamanke5" id="lamanke5">
            <div>
                <div class="container mt-5">
                    <div class="row">
                        <h2>Berikut Layanan-Layanan Kami </h2>
                        <div class="splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Penyedia Hewan Ternak</h5>
                                                <img src="assets/img/kambing.jpg" alt="" style="width: 400px; height: 200px;">
                                                <p class="card-text">Disini kita menyediakan hewan ternak siap potong untuk Aqiqah!.
                                                    <br>
                                                    <br>
                                                </p>
                                                <a href="#" class="btn btn-success">Silahkan Kunjungi</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Persiapan perayaan Aqiqah</h5>
                                                <img src="assets/img/wo.jpg" alt="" style="width: 400px; height: 200px;">
                                                <p class="card-text"> Bagi ayah bunda yang bingung dalam proses peayaan aqiqah kami disini
                                                    menyediakan beberapa referensi untuk ayah bunda dalam proses perayaan aqiqah .

                                                </p>
                                                <a href="#" class="btn btn-success">Silahkan Kunjungi</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Jasa Layanan antar lansung</h5>
                                                <img src="assets/img/send.png" alt="" style="width: 400px; height: 200px;">
                                                <p class="card-text">Kami disini menyediakan jasa antar lansung
                                                    untuk kambing yang sudah masak dan siap santap
                                                    untuk Bandung dan sekitarannya
                                                </p>
                                                <a href="#" class="btn btn-success">Silahkan Kunjungi</a>
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
            <!-- Products Start -->
            <div class="container mt-5">
                    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-succ pr-3">Pilihan Paket</span></h2>
                <div class="row px-xl-5">
                    @foreach ($pakets as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="" src="data:image/png;base64,{{ $item->foto_paket }}" alt="" style="width: 400px; height: 200px;">
                                <div class="product-action">
                                    
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{ route('paket.index') }}">{{ $item->nama_paket }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h8>{{ $item->deskripsi }}</h8>
                                    
                                    
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <h9>@currency($item->harga)</h9>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="" src="assets/img/paket1.png" alt="" style="width: 400px; height: 200px;">
                                <div class="product-action">
                                    
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="">Paket Keluarga</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h8>Memberikan Dekorasi dan kambing terbaik saat aqiqah dengan gulai kambing dengan souvenir yang cantik untuk 100 orang</h8>
                                    
                                    
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <h9>Rp.9.500.000</h9>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                
                                <div class="product-action">

                                </div>
                            </div>
                            <div class="text-center py-4">
                               
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                   
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="" src="assets/img/paket2.png" alt="" style="width: 400px; height: 200px;">
                                <div class="product-action">
                                    
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="">Paket Keluarga Besar</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                <h8>Memberikan Dekorasi dan kambing terbaik saat aqiqah dengan sate dan gulai kambing serta souvenir yang cantik untuk 150 orang</h8> 
                                    
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                <h9>Rp.10.250.000</h9>
                                    
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    < </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            <!-- Products End -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
            <script>
                var splide = new Splide('.splide', {
                    type: 'loop',
                    perPage: 3,
                    rewind: true,
                });

                splide.mount();
            </script>
            </div>
        </section>
        <!-- End Card -->


        <!-- Halaman ke 6 -->
        <section class="lamankeenam" id="lamankeenam">
            <div>
                <<img src="assets/img/bgend.png" alt="" style="width: 100%;" ;>
            </div>
            <div class="logoyokaqiqah">
                <img src="assets/img/logowh.png" alt="" style="width: 20%;">
            </div>
            <div>
                <div class="textll1">
                    <div>
                        <h4>Perusahaan</h4>
                        <p>Tentang YokAqiqah</p>
                        <p>Blog</p>
                        <p>Hubungi kami</p>
                        <p>Syarat & Ketentuan</p>
                        <p>FAQ</p>
                    </div>



                </div>

                <div class="textll2">
                    <div>
                        <h4>Produk</h4>
                        <p>Tentang YokAqiqah</p>
                        <p>Blog</p>
                        <p>Hubungi kami</p>
                        <p>Syarat & Ketentuan</p>
                        <p>FAQ</p>
                    </div>

                </div>

                <div class="textll3">
                    <div>
                        <h4>Download Our Apps</h4>
                        <p>Tentang YokAqiqah</p>
                        <p>Blog</p>
                        <p>Hubungi kami</p>
                        <p>Syarat & Ketentuan</p>
                        <p>FAQ</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Halaman ke 6 -->


</body>
@endsection