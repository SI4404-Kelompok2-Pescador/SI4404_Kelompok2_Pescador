@extends('layouts.profile-layout')
@section('content')
<section>
<div id="sidebar"> 
            <div class="white-label">
              <img src="assets/img/logowh.png" alt="">
            </div> 
            <div id="sidebar-nav">   
              <ul>
                <li><a href="profileview"><i class="pesanan"></i> Profile</a></li> 
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Settings</a></li>      
                <li></li>
                <li><a href="/" rel="stylesheet">Home</a></li>
                <li><a href="/" rel="stylesheet">Log Out</a></li>
              </ul>
            </div>

    </div>

        <!-- profile up -->
        <div class="profileup d-flex container ">
            <div class="d-flex container mt-5 justify-content-center bg-white bg-opacity-100" style="border-radius: 1px; width: 45rem; height: 37rem; ">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="dds card-body">
                    <form action="" method="post">
                        <h2 class="boltext text-center m-3">UPDATE PROFILE</h2>
                        <label class="mb-2" for="nama">Name</label><br>
                        <input class="profin form-control mb-2" type="text" name="nama" id="nama" required placeholder="Your Name">
                        <label class="mb-2" for="email">E-mail</label><br>
                        <input class="profin form-control mb-2" type="text" name="email" id="email" required placeholder="Your E-mail">
                        <label class="mb-2" for="nohp">Phone Number</label><br>
                        <input class="profin form-control mb-2" type="text" name="nohp" id="nohp" required placeholder="Phone Number">
                        <label class="mb-2" for="address">Address</label><br>
                        <input class="profin form-control mb-2" type="text" name="address" id="address" required placeholder="Your Address">
                        <label class="mb-2" for="pass">Password</label><br>
                        <input class="profin form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Password">
                        <label class="tf1" for='inputGroupFile01'>Photo Profile</label>
                        <input type='file' class='profin form-control' id='inputGroupFile01' value='" "' name='gambar' style='height: 35px; width: 15rem;'>
                        <div class="text-center pt-2 mb-2 mt-3 ">
                            <button class="btn btn-dark" type="submit" name="submit" onclick="" style="width: 200px ">Update</button>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
        <!-- end profile up -->
</section>
@endsection


  