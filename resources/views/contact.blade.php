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



    <!-- Contact Start -->
    <div class="container-fluid" style="margin-top: 100px;">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-dark py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31848.933193930243!2d103.52551015590434!3d-3.784786323779405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3757e2910229f3%3A0x5f01ad0db47922b0!2sLahat%2C%20Kec.%20Lahat%2C%20Kabupaten%20Lahat%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1673200674370!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>No.13, Lahat, INDONESIA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>santayAja_@yahoo.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+62 877-6727-3916 (ABX AUVI)</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- Footer Start -->
    <section class="lamankeenam" id="lamankeenam" style="margin-top: 50px;">
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