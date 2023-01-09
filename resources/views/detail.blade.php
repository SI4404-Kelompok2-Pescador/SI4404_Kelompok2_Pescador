@extends('layouts.layout')
@section('content')
<head>
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

<script>
        const myModal = document.getElementById('Modal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
</script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
></script>


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


  
    <!-- Coursel -->



    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5" style="margin-top: 15px;">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>IKAN KAKAP MERAH</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(23 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">Rp.32.000</h3>
                    <p class="mb-4">IKAN KAKAP MERAH hasil tangkapan nelayan.</p>
                   
                    
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>                
                        <a class="" href="cart"><button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i></button></a>    

                        <div>
                            <button class="btn btn-primary px-3 ml-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-buy mr-1" ></i> BUY NOW</button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">TOP UP</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="dropdown">
                                            <!--  -->
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Payment Method
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">BCA - 102993322 (BILEM GSHOCK AJ)</a></li>
                                            <li><a class="dropdown-item" href="#">MANDIRI - 534234344 (BILEM GSHOCK AJ)</a></li>
                                            <li><a class="dropdown-item" href="#">BNI - 634512343 (BILEM GSHOCK AJ)</a></li>
                                            <li><a class="dropdown-item" href="#">QRIS</a></li>
                                        </ul>
                                        </div>
                                            <!--  -->
                                        </div>

                                        <div class="modal-body">
                                            <h3 class="text-center">QRIS</h3>
                                            <img src="https://1.bp.blogspot.com/-FTQm_MW2tpc/XbznCfNSYwI/AAAAAAAAAs8/BRHfAp2MsjIbv2caSh_UkH6ju2PMGwrawCLcBGAsYHQ/s1600/QR_code_for_mobile_English_Wikipedia.svg.png" class="rounded mx-auto d-block alt=" style="width:300px; ">
                                            <p class="text-center">PT.MENCARI CINTA SEJATI</p>
                                        </div>
                        
                                        <!-- <div class="modal-body">
                                            <h1 class="text-center">
                                                <label class="mb-1" for="">TOTAL</label><br>
                                                <input type="text" style="width:29rem; height:2rem;"></input>
                                            </h1>                               
                                        </div> -->
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>          
                                            <a href="product"><button type="button" class="btn btn-primary">BUY</button></a>
                                        </div>
                                        </div>
                            </div>
                        </div>     

                </div>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (1)</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>Hasil tangkapan laut.</p>
                            <p>DIJAMIN FRESH DAN TANGKAPAN BARU.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Alamat Jalan Pasir putih No.37 NO HP.081377263652.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            -
                                        </li>
                                        <li class="list-group-item px-0">
                                            -
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            -
                                        </li>
                                        <li class="list-group-item px-0">
                                            -
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "Product Name"</h4>
                                    <div class="media mb-4">
                                        <img src="https://awsimages.detik.net.id/community/media/visual/2021/02/01/kacau-beli-cumi-cumi-di-pasar-saat-direbus-malah-jadi-bubur.jpeg?w=626" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>Abdul Simapeang<small> - <i>01 Jan 2023</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Wah IKANNYA masih fresh banget cocok buat dimasak asam manis. Keren deh amanah penjualnya sesuai deskripsi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->





    <!-- Footer Start -->
    <section class="lamankeenam" id="lamankeenam">
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

    <script src="assets/js/main.js"></script>
</body>

@endsection