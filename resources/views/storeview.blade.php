@extends('layouts.profile-layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<section>
<div id="sidebar"> 
            <div class="white-label">
              <img src="assets/img/logowh.png" alt="">
            </div> 
            <div id="sidebar-nav">   
              <ul>
                <li><a href="admindash"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="settings"><i class="fa fa-cog"></i> Settings</a></li>    
                <li class="active"><a href="storeview"><i class="fas fa-shopping-cart"></i> View Store</a></li>   
                <li><a href="category"><i class="fa fa-th-large"></i> Create Category</a></li> 
                <li></li>
                <li>
                  {{-- post logout method from route --}}
                  <form action="{{ route('logout.post') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger rounded-pill" style="width:190px; margin-left:30px; margin-top:500px;">Logout</button>
                </li>
              </ul>
            </div>

</section>
<section class="row" style="background-color: #eee; height: 100%;">
  <div class="container py-5 ">
    <div class=" row">
      <div class="profview col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="profileview">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Store</li>
          </ol>
        </nav>
      </div>
    </div>

<div class="row row-cols-1 row-cols-md-5">
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->
        <div class="view overlay">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRkCoBDVC2u2B_LkmNhy66Io4p50iQWqLnJw&usqp=CAU"
            alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">JAYA ABADI</h4>
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-light-blue btn-md">Read more</button>

        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->
        <div class="view overlay">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRkCoBDVC2u2B_LkmNhy66Io4p50iQWqLnJw&usqp=CAU"
            alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">PESISIR RAYA</h4>
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-light-blue btn-md">Read more</button>

        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->
        <div class="view overlay">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
            alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">SAMUDERA</h4>
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-light-blue btn-md">Read more</button>

        </div>

        </div>
        <!-- Card -->
    </div>

</div>

</section>
@endsection
       