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
                <li class="active"><a href="storeview"><i class="fas fa-shopping-cart"></i> Order</a></li>   
                <li><a href="productview"><i class="fa fa-th-large"></i> Product</a></li> 
                <li></li>
                <li>
                  {{-- post logout method from route --}}
                  <form action="{{ route('logout.post') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger rounded-pill" style="width:190px; margin-left:30px; margin-top:630px;">Logout</button>
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
            <li class="breadcrumb-item active" aria-current="page">Order</li>
          </ol>
        </nav>
      </div>
    </div>

<div class="row row-cols-1 row-cols-md-5">
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body text-center">

            <!--Title-->
            <h4 class="card-title">ORDER 1</h4>

            <!--Text-->

            <p class="card-text"><b>ID </b> <br> 34b48090-648d-45d8-abaf-9fa98ce1ab1c</p>
            <p class="card-text"><b>SHIPPING PRICE </b> <br>  Rp.80.000</p>
            <p class="card-text"><b>PRODUCT </b><br> Rp.80.000</p>
            <p class="card-text"><b>TOTAL </b> <br> Rp.160.000</p> 
            <p class="card-text"><b>DATE </b> <br> 10-01-2022 09:30</p> 
            <p class="card-text"><b>STATUS </b></p> 
            <p class="card-text"><i class="fas fa-check text-success"></i></p> 
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">DONE</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>
        </div>

        </div>
        <!-- Card -->
    </div>

    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body text-center">

            <!--Title-->
            <h4 class="card-title">ORDER 2</h4>
            <!--Text-->

            <p class="card-text"><b>ID </b> <br> a51fa46c-4538-4ab1-a527-de3c84e4ccfe</p>
            <p class="card-text"><b>SHIPPING PRICE </b> <br>  Rp.80.000</p>
            <p class="card-text"><b>PRODUCT </b><br> Rp.10.000</p>
            <p class="card-text"><b>TOTAL </b> <br> Rp.90.000</p> 
            <p class="card-text"><b>DATE </b> <br> 10-01-2022 12:59</p>
            <p class="card-text"><b>STATUS </b></p> 
            <p class="card-text"><i class="fas fa-times text-danger"></i></p> 

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">DONE</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>

        </div>

        </div>
        <!-- Card -->
    </div>


    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body text-center">

            <!--Title-->
            <h4 class="card-title">ORDER 3</h4>
            <!--Text-->

            <p class="card-text"><b>ID </b> <br> 1f8b4b08-4229-465b-a46a-55573a924d06</p>
            <p class="card-text"><b>SHIPPING PRICE </b> <br>  Rp.80.000</p>
            <p class="card-text"><b>PRODUCT </b><br> Rp.150.000</p>
            <p class="card-text"><b>TOTAL </b> <br> Rp.230.000</p> 
            <p class="card-text"><b>DATE </b> <br> 10-01-2022 11:30</p> 
            <p class="card-text"><b>STATUS </b></p> 
            <p class="card-text"><i class="fas fa-check text-success"></i></p> 
            

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">DONE</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>

        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body text-center">

            <!--Title-->
            <h4 class="card-title">ORDER 4</h4>
            <!--Text-->
            <p class="card-text"><b>ID </b> <br> a51fa46c-4538-4ab1-a527-de3c84e4ccfe</p>
            <p class="card-text"><b>SHIPPING PRICE </b> <br>  Rp.80.000</p>
            <p class="card-text"><b>PRODUCT </b><br> Rp.100.000</p>
            <p class="card-text"><b>TOTAL </b> <br> Rp.180.000</p> 
            <p class="card-text"><b>DATE </b> <br> 10-01-2022 12:59</p>
            <p class="card-text"><b>STATUS </b></p> 
            <p class="card-text"><i class="fas fa-spinner text-primary"></i></p> 
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">DONE</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>

        </div>

        </div>
        <!-- Card -->
    </div>

</div>

</section>
@endsection
       