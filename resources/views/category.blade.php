@extends('layouts.profile-layout')
@section('content')

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
                <li><a href="storeview"><i class="fas fa-shopping-cart"></i> View Store</a></li>   
                <li class="active"><a href="category"><i class="fa fa-th-large"></i> Create Category</a></li> 
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
            <li class="breadcrumb-item active" aria-current="page">Create Category</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 shadow-lg bg-white rounded" style="border-radius:10px;">
                    <div class="product-img position-relative overflow-hidden">
                        <div class="product-action text-center" style="margin-top:30px">
                            <a class="btn btn-outline-dark btn-square" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-plus"></i></a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ADD CATEGORY</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">           
                                        <label for="recipient-name" class="col-form-label">NAME CATEGORY</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="">      
                                        </div>
                                        <!-- <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                        </div> -->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>   
                                    <a href=""><button type="submit" class="btn btn-primary">Add</button></a>
                                </div>
                                </div>
                            </div>
                            </div>



                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate">ADD CATEGORY</a>
                    </div>
                </div>
    </div>

    <!-- <div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 shadow-lg bg-white rounded" style="border-radius:10px;">
                    <div class="position-relative overflow-hidden">
                        <div class="product-action text-center"style="margin-top:50px;">
                            <a class="h6 text-decoration-none text-truncate" href="" >IKAN AIR TAWAR</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        
                    </div>
                </div>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 shadow-lg bg-white rounded style="border-radius:10px;">
                    <div class="position-relative overflow-hidden">
                        <div class="product-action text-center"style="margin-top:50px;">
                            <a class="h6 text-decoration-none text-truncate" href="" >IKAN LAUT</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        
                    </div>
                </div>
    </div>

    
    <div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 shadow-lg bg-white rounded" style="border-radius:10px;">
                    <div class="position-relative overflow-hidden">
                        <div class="product-action text-center"style="margin-top:50px;">
                            <a class="h6 text-decoration-none text-truncate" href="" >CUMI-CUMI</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        
                    </div>
                </div>
    </div>

 -->


    <div class="row row-cols-1 row-cols-md-5">
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">CUMI-CUMI</h4>
            <!--Text-->
            <p class="card-text"></p> 
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
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
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">UDANG</h4>
            <!--Text-->
            <p class="card-text"></p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
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
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">IKAN AIR TAWAR</h4>
            <p class="card-text"></p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>


        </div>

        </div>
        <!-- Card -->
    </div>

</div>


    
</section>
@endsection
       