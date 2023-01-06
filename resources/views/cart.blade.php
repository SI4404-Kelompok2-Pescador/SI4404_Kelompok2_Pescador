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
                <a class="nav-link" href="/">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profileview">Profile</a>
            </li>

            </ul>
            <!-- Left links -->
        </div>
        <form class="navlogbut d-flex">
            <a href="cart" class="btn px-0 ml-2">
                <i class="fas fa-shopping-cart text-warning"></i>
                <span class="badge text-light border border-light rounded-circle" style="padding-bottom: 2px;">5</span>
            </a>
            <a href="product" class="btn px-0 ml-2">
                <i class="fas fa-heart text-warning"></i>
                <span class="badge text-light border border-light rounded-circle" style="padding-bottom: 2px;">10</span>
            </a>
        </form>
        
        
    </nav>


    <!-- Navbar End -->


    <!-- Cart Start -->
    <div class="container-fluid pb-5" style="margin-top: 100px;">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="" style="width: 50px;"> IKAN KAKAP MERAH</td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="" style="width: 50px;"> IKAN KAKAP MERAH</td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="" style="width: 50px;"> IKAN KAKAP MERAH</td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="" style="width: 50px;"> IKAN KAKAP MERAH</td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="https://doktersehat.com/wp-content/uploads/2020/03/manfaat-ikan-kakap-doktersehat.jpg" alt="" style="width: 50px;"> IKAN KAKAP MERAH</td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rp.32.000</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-dark">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>Rp.32.000</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Rp.6.000</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>Rp.38.000</h5>
                        </div>
                        <a href="payment"><button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Beli Sekarang</button></a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->




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
    <script src="assets/js/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</section>
@endsection