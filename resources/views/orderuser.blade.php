@extends('layouts.layout')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/product.css" rel="stylesheet">

</head>
<body>
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <!-- Container wrapper -->
        <div class="container-fluid">

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand">
            <img
                src="assets/img/logowh.png"
                height="45"
                alt=""
                loading="lazy"
            />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="detail">Detail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>

            </ul>
            <!-- Left links -->
        </div>
        <form class="navlogbut d-flex">
            <a href="orderuser" class="btn px-0 ml-2" style="margin-right:20px;">
                <i class="fas fa-truck text-warning"></i>
            </a>
            <a href="cart" class="btn px-0 ml-2">
                <i class="fas fa-shopping-cart text-warning"></i>
                <span class="badge text-light border border-light rounded-circle" style="padding-bottom: 2px;">5</span>
            </a>
            <a href="wishlist" class="btn px-0 ml-2">
                <i class="fas fa-heart text-warning"></i>
                <span class="badge text-light border border-light rounded-circle" style="padding-bottom: 2px;">10</span>
            </a>
          
        </form>
        
        
    </nav>
    <!-- Navbar End -->



    <!-- order -->

    <div class="row row-cols-1 row-cols-md-5" style="margin-top: 100px;">
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">ORDER 1</h4>
            <!--Text-->
            <p class="card-text">IKAN KAKAP MERAH</p>
            <p class="card-text text-center bg-success">DONE</p> 
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">ORDER 2</h4>
            <!--Text-->
            <p class="card-text">CUMI-CUMI</p>
            <p class="card-text text-center bg-primary">PROCESS</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">ORDER 3</h4>
            <!--Text-->
            <p class="card-text">UDANG</p>
            <p class="card-text text-center bg-primary">PROCESS</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        </div>

        </div>
        <!-- Card -->
    </div>

</div>

<!-- end order -->
    <!-- Footer Start -->
    <section class="lamankeenam" id="lamankeenam" style="margin-top: 590px;">
        <div>
            <img src="assets/img/bgend2.png" alt="" style="width: 100%;";>
        </div>
        <div class="logopescador">
            <img src="assets/img/logowh.png" alt=""style="
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
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


@endsection