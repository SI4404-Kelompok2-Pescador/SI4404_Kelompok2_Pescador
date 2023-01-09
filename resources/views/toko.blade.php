@extends('layouts.profile-layout')
@section('content')
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/toko.css') }}">

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



<section>
<div id="sidebar"> 
            <div class="white-label">
              <img src="assets/img/logowh.png" alt="">
            </div> 
            <div id="sidebar-nav">   
              <ul>               
                <li><a href="profileview"><i class="fa fa-user"></i> Profile</a></li>  
                <li><a href="profileupdate"><i class="fa fa-cog"></i> Settings</a></li>   
                <li><a href="historytr"><i class="fa fa-shopping-cart"></i> History Transaction</a></li>         
                <li class="active"><a href=""><i class="fa fa-home"></i> TOKO</a></li>
                <li class=""><a href="addtoko"><i class="fa fa-home"></i> TOKO VIEW</a></li>
                <li></li>
                <li><a href="/" rel="stylesheet">Home</a></li>
                <!-- <li>
                  {{-- post logout method from route --}}
                  <form action="{{ route('logout.post') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger rounded-pill" style="width:190px; margin-left:30px; margin-top:420px; ">Logout</button>
                </li> -->
              </ul>
            </div>

</section>
<section class="row" style="background-color: #eee; height: 100vh;">
  <div class="container py-5 ">
    <div class=" row">
      <div class="profview col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="profileview">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toko</li>
          </ol>
        </nav>
      </div>
    </div>

    
      <section class="" id="">
    
        <div class="text-center shadow-lg p-3 mb-5 bg-white rounded" style="margin-top:270px; margin-left:40vh; width:100vh;">
          <!-- <div class="text-center">
            <img src="https://c4.wallpaperflare.com/wallpaper/254/791/584/the-city-people-train-thailand-bangkok-hd-wallpaper-preview.jpg" alt="" style="width:1000px; border-radius:20px;">
          
          
          </div> -->
            <div class="">
              <h1>Mari Daftarkan Toko Anda</h1>
            </div>
            
            <div class="mt-4" >
            <button class="subt btn btn-success rounded-pill mb-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" >DAFTARKAN TOKO</button>
            <a href="login"><button class="subt btn btn-primary rounded-pill mb-3">LOGIN TOKO</button></a>
            

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">FORM TOKO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <form>
                            <div class="mb-3">           
                            <label for="recipient-name" class="col-form-label">NAME</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="NAMA TOKO">
                            <label for="recipient-name" class="col-form-label">EMAIL</label>
                              <input type="text" class="form-control" name="email" id="email" placeholder="EMAIL">
                            <label for="recipient-name" class="col-form-label">PHONE NUMBER</label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE NUMBER">
                            <label for="recipient-name" class="col-form-label">ADDRESS</label>
                              <input type="text" class="form-control" name="address" id="address" placeholder="ADDRESS">
                            <label for="recipient-name" class="col-form-label">PASSWORD</label>
                              <input type="text" class="form-control" name="password" id="password" placeholder="PASSWORD">
                            <label for="recipient-name" class="col-form-label">IMAGE</label>
                              <input type="file" class="form-control" name="image" id="image" name="gambar" style="height: 40px;">  
                
                            </div>
                            <!-- <div class="mb-3">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div> -->
                          </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>       
                        <a href="{{'logintoko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">DAFTAR</button></a>   
                      </div>
                    </div>
                  </div>
                </div>



        </div>

<!-- 
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">PRODUCT</span>
                </p>
                <p class="mb-1" style="font-size: .77rem;">January</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">June</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-center mb-2 mt-4">
                <a href="historytr"><button type="button" class="btn btn-primary" style="width: 15rem;">View</button></a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">HISTORY TRANSAKSI</span>
                </p>
              <div class="col-sm-9">
                <p class="text-muted mb-0">History Belanja Anda</p>
              </div>
              <div class="d-flex justify-content-center mb-2 mt-4">
                <a href="historytr"><button type="button" class="btn btn-primary" style="width: 15rem;">View</button></a>
              </div>
            </div>
          </div>
        </div>

        
        

 -->

</section>



@endsection
       