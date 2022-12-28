@extends('layouts.profile-layout')
@section('content')
<section>
<div id="sidebar"> 
            <div class="white-label">
              <img src="assets/img/logowh.png" alt="">
            </div> 
            <div id="sidebar-nav">   
              <ul>
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Profile</a></li>
                <li><a href="profileupdate"><i class="pesanan"></i> Settings</a></li>        
                <li></li>
                <li><a href="/" rel="stylesheet">Home</a></li>
                <li><a href="/" rel="stylesheet">Log Out</a></li>
              </ul>
            </div>

    </div>
        <!-- profile view -->
        <div class="profileview d-flex container ">
            <div class="d-flex container mt-5 justify-content-center bg-dark bg-opacity-50" style="width: 30rem; height: 32rem; ">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="dds card-body">
                    <form action="" method="post">
          
                        <img class="ppstyle"src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/08/10/1106880019.jpg " alt="" style="width: 14rem; height: 13rem; ">
                        <label class="profin mb-1" for="nama"></label><br>
                        <label class="profin mb-1" for="nama">Name</label><br>
                        <input class="profin form-control mb-2 text-center" type="text" name="nama" id="nama" required placeholder="EDI FERDY SIMALUNGUN">
                        <label class="profin mb-1" for="email">E-mail</label><br>
                        <input class="profin form-control mb-2 text-center" type="text" name="email" id="email" required placeholder="SamboGTG@gmail.com">
                        <label class="profin mb-1" for="nohp">Phone Number</label><br>
                        <input class="profin form-control mb-2 text-center" type="text" name="nohp" id="nohp" required placeholder="081282770666">
                        <label class="profin mb-1" for="nohp">Address</label><br>
                        <input class="profin form-control mb-2 text-center" type="text" name="nohp" id="nohp" required placeholder="Jl.Duren Tiga">
                    </form>

                </div>
            </div>
        </div>  
        <!-- end profile view -->
</section>
@endsection
       