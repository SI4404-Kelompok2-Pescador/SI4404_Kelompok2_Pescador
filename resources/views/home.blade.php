@extends('layouts.layout')
@section('content')

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand">
                        <img src="assets/img/logowh.png" height="45" alt="" loading="lazy" />
                    </a>
                    @if (session('user'))
                        <!-- Left links -->
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#lamankedua">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#lamankeenam">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>

                        </ul>
                        <!-- Left links -->
                        <ul class="navbar-nav">
                        <!-- Avatar -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                                height="33" alt="Avatar" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="profileview">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="profileupdate">Settings</a>
                            </li>
                            <li>
                            {{-- post logout method from route --}}
                            <form action="{{ route('logout.post') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-dark rounded-pill" style="width:100px; margin-left:30px; margin-top:20px;">Logout</button>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    @else
                </div>
                {{-- @else --}}
                <form class="navlogbut d-flex">
                    <button class="btn btn-outline-light bg-secondary rounded-pill mb-3" type="submit"><a class="nav-link"
                            href="login">LOGIN</a></button>
                </form>
                @endif
        </nav>
        <!-- Navbar -->


        <!-- Coursel -->
        <section class="crl coursel" id="coursel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="width: 100%; height: 840px;">
                    <div class="carousel-item active">
                        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/04/Creative-Wallpaper-Fishing-Rod-New-York-fisherman.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Hello World</h5>
                            <p>Hallooooooooo</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/04/Fishing-Wallpaper-HD-Desktop.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperset.com/w/full/a/d/7/49826.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- EndCoursel -->

        <!-- Halaman ke 2 -->
        <section class="lamankedua" id="lamankedua">
            <div>
                <img src="assets/img/bg211.png" alt="" style="width: 100%; ";>
            </div>
            <div class="icon1">
                <img src="assets/img/logowh.png"
                    alt=""style="
            width: 15%; 
            display: block;
            margin-left: 50%;
            margin-right: 50%;
            ">
            </div>
            <div class="ml1" style="">
                <h1>Beri Makan Ikan untuk Dunia</h1>
                <p1>Pandemi menyebabkan dampak berkepanjangan pada ketahanan
                    <br>pangan global. Sekitar 660 juta orang masih akan menghadapi isu
                    <br>kelaparan di tahun 2030. Akuakultur, sebagai sektor bisnis dengan
                    <br>pertumbuhan yang pesat, memiliki potensi untuk berkontribusi
                    <br>secara signifikan terhadap ketahanan pangan. eFishery percaya
                    <br>bahwa “The Future is Aquaculture”. Menggunakan kemajuan
                    <br>teknologi, eFishery membangun value chain yang sistematis untuk
                    <br>bisnis budidaya ikan dan udang, menghasilkan ekosistem yang
                    <br>terintegrasi dan berkelanjutan untuk memperkuat ketahanan pangan
                    <br>global di masa mendatang.
                </p1>

            </div>
        </section>
        <!-- Halaman ke 2 -->


        <!-- Halaman ke 3 Pescador -->
        <section class="lamanketiga py-5" id="lamanketiga">
            <h1 class="d-flex justify-content-center">Solusi Kami untuk Dunia Akultur</h1>
            <div class="container d-flex gap-5 justify-content-center py-5 mt-5">
                <div class="card rounded-4 border border-0 shadow" style="width: 18rem;">
                    <div style="position: absolute;">
                        <img src="https://efishery.com/wp-content/uploads/2021/10/ikan-nila.png"
                            style="width: 190px; margin-top: -90px;" alt="">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Solusi untuk</h5>
                        <h6 class="card-subtitle mb-2 fw-bold">Pembudidaya Ikan</h6>
                        <p class="fw-nornal">Layanan lengkap, dari hulu ke hilir untuk Pembudidaya ikan. Rasakan kemudahan
                            transaksi pakan, akses ke program finansial, serta berita dan info terbaru terkait dunia
                            Akuakultur, semua tersedia untuk Pembudidaya!</p>
                        <a href="product" class="btn btn-success rounded-pill mb-3" style="margin-top: 95px">Cari tahu
                            lebih lanjut</a>
                    </div>
                </div>
                <div class="card rounded-4 border border-0 shadow" style="width: 18rem;">
                    <div style="position: absolute;">
                        <img src="https://efishery.com/wp-content/uploads/2021/10/udang.png"
                            style="width: 190px; margin-top: -90px;" alt="">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Solusi untuk</h5>
                        <h6 class="card-subtitle mb-2 fw-bold">Pembudidaya Udang</h6>
                        <p class="fw-nornal">Ekosistem budidaya udang terpadu, dibangun untuk meningkatkan produktivitas,
                            menjaga kualitas air tambak, mencegah wabah, dan merekomendasikan sistem pengelolaan tambak
                            berbasis data, untuk mendukung tambak para Pembudidaya udang.</p>
                        <a href="product" class="btn btn-success rounded-pill mt-5 mb-3">Cari tahu lebih lanjut</a>
                    </div>
                </div>
                <div class="card rounded-4 border border-0 shadow" style="width: 18rem;">
                    <div style="position: absolute;">
                        <img src="https://efishery.com/wp-content/uploads/2021/10/orang-1.png"
                            style="width: 130px; margin-top: -90px;" alt="">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Solusi untuk</h5>
                        <h6 class="card-subtitle mb-2 fw-bold">Pembeli & Konsumen</h6>
                        <p class="fw-nornal">Memastikan ikan dan udang kualitas terbaik dapat dinikmati di seluruh penjuru
                            negeri dengan mendistribusikan hasil panen Pembudidaya dalam bentuk hidup, segar, dan beku.</p>
                        <a href="product" class="btn btn-success rounded-pill mb-3" style="margin-top: 120px">Cari tahu
                            lebih lanjut</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Halaman ke 3 -->


        <!-- Halaman ke 4 -->
        <section class="lamankeempat" id="lamankeempat">
            <div>
                <img src="assets/img/bg22.png" alt="" style="width: 100%;";>
            </div>
            <div class="textle1" style="">
                <h1>Solusi Kami untuk Dunia Akuakultur</h1>
                <p1>Pandemi menyebabkan dampak berkepanjangan pada ketahanan
                    <br>pangan global. Sekitar 660 juta orang masih akan menghadapi isu
                    <br>kelaparan di tahun 2030. Akuakultur, sebagai sektor bisnis dengan
                    <br>pertumbuhan yang pesat, memiliki potensi untuk berkontribusi
                    <br>secara signifikan terhadap ketahanan pangan. eFishery percaya
                    <br>bahwa “The Future is Aquaculture”. Menggunakan kemajuan
                    <br>teknologi, eFishery membangun value chain yang sistematis untuk
                    <br>bisnis budidaya ikan dan udang, menghasilkan ekosistem yang
                    <br>terintegrasi dan berkelanjutan untuk memperkuat ketahanan pangan
                    <br>global di masa mendatang.
                </p1>

            </div>

        </section>
        <!-- Halaman ke 4 -->


        <!-- Halaman ke 5 -->
        <section class="lamanke5" id="lamanke5">
            <div>
                <img src="assets/img/bg3.png" alt="" style="width: 100%;";>
            </div>
            <div class="textll1">
                <h1>Dampak Kami Sejauh Ini</h1>
                <div class="mt-4">
                    <button class="btn btn-success rounded-pill mb-3" type="submit"><a class="nav-link"
                            href="login">Gabung bersama kami</a></button>
                    <button class="btn btn-success rounded-pill mb-3 bg-secondary" type="submit"><a class="nav-link"
                            href="login">Pelajari lebih lanjut</a></button>
                </div>

            </div>

            <div class="emo">
                <div class="tex">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Tumbuh bersama</p3>
                        </div>
                        <h5 style="font-weight: bold;">30.000+ Pembudidaya</h5>
                    </div>

                </div>

                <div class="tex mt-5">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Mendigitalisasi</p3>
                        </div>
                        <h5 style="font-weight: bold;">70.000 tambak ikan &
                            <br>udang
                        </h5>
                    </div>

                </div>

                <div class="tex">
                    <div class="judtextu1 mt-5">
                        <div class="judtext1">
                            <p3>Menghubungkan</p3>
                        </div>
                        <h5 style="font-weight: bold;">7.000+ Pembudidaya ke
                            <br>program pembiayaan
                            <br>yang lebih baik
                        </h5>
                    </div>
                </div>
            </div>
            <div class="emo2">
                <div class="tex">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Memberi makan dunia dengan</p3>
                        </div>
                        <h5 style="font-weight: bold;">13.000+ ton produk
                            <br>perikanan
                        </h5>
                    </div>

                </div>

                <div class="tex mt-5">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Mengurangi</p3>
                        </div>
                        <h5 style="font-weight: bold;">30% sumber pencemaran
                            <br>air yang dihasilkan dari
                            <br>proses budidaya
                        </h5>
                    </div>

                </div>
            </div>
        </section>
        <!-- Halaman ke 5 -->




        <!-- Card -->
        <section class="cardsl" id="cardsl" style="">
            <div>
                <div class="container mt-5">
                    <div class="row">
                        <h2>Solusi Kami untuk Dunia Akuakultur</h2>
                        <div class="splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Pembudidaya Ikan</h5>
                                                <img src="https://www.nusabali.com/article_images/129742/rendah-konsumsi-makan-ikan-di-tabanan-2022-11-18-102556_0.jpg"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text">Layanan lengkap, dari hulu ke hilir untuk Pembudidaya
                                                    ikan.
                                                    Rasakan kemudahan transaksi pakan, akses ke program finansial, serta
                                                    berita
                                                    dan info terbaru terkait dunia Akuakultur, semua tersedia untuk
                                                    Pembudidaya!</p>
                                                <a href="product" class="btn btn-success">Cari Tahu Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Pembudidaya Udang</h5>
                                                <img src="https://p1.pxfuel.com/preview/943/1012/845/shrimp-fruits-of-the-sea-fish-food-wallpaper.jpg"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text"> Ekosistem budidaya udang terpadu, dibangun untuk
                                                    meningkatkan
                                                    produktivitas, mencegah wabah, dan merekomendasikan
                                                    sistem pengelolaan tambak berbasis data, untuk mendukung tambak para
                                                    Pembudidaya
                                                    udang.</p>
                                                <a href="product" class="btn btn-success">Cari Tahu Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Pembudidaya Kepiting</h5>
                                                <img src="https://cdn-2.tstatic.net/pekanbaru/foto/bank/images/kepiting-rajungan.jpg"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text">Memastikan ikan dan udang kualitas terbaik dapat
                                                    dinikmati di seluruh
                                                    penjuru negeri dengan mendistribusikan hasil panen Pembudidaya dalam
                                                    bentuk hidup, segar, dan beku.</p>
                                                <a href="product" class="btn btn-success">Cari Tahu Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Pembeli & Konsumen</h5>
                                                <img src="https://images.unsplash.com/photo-1598063414123-d8fd7fb018b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGFzYXIlMjB0cmFkaXNpb25hbHxlbnwwfHwwfHw%3D&w=1000&q=80"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text">Memastikan ikan dan udang kualitas terbaik dapat
                                                    dinikmati di seluruh
                                                    penjuru negeri dengan mendistribusikan hasil panen Pembudidaya dalam
                                                    bentuk hidup, segar, dan beku.</p>
                                                <a href="product" class="btn btn-success">Cari Tahu Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                <img src="assets/img/bgend.png" alt="" style="width: 100%;";>
            </div>
            <div class="logopescador">
                <img src="assets/img/logowh.png"
                    alt=""style="
            width: 15%; 
            display: block;
            margin-left: 50%;
            margin-right: 50%;
            ">

            </div>
            <div>
                <div class="textll1">
                    <div>
                        <h4>Perusahaan</h4>
                        <p>Tentang Pescador</p>
                        <p>Blog</p>
                        <p>Hubungi kami</p>
                        <p>Syarat & Ketentuan</p>
                        <p>FAQ</p>
                    </div>



                </div>

                <div class="textll2">
                    <div>
                        <h4>Produk</h4>
                        <p>Tentang Pescador</p>
                        <p>Blog</p>
                        <p>Hubungi kami</p>
                        <p>Syarat & Ketentuan</p>
                        <p>FAQ</p>
                    </div>

                </div>

                <div class="textll3">
                    <div>
                        <h4>Download Our Apps</h4>
                        <p>Tentang Pescador</p>
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
