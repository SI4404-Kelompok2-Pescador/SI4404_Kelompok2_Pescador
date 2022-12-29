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

</section>
<section class="vh-100" >
  <div class="profview container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100 w-25">
      <div class="col col-md-9 col-lg-7 col-xl-5 ">
      <div>
        <h3>Profile</h3>
      </div>
        <div class="card" style="border-radius: 1px; width: 65rem; height: 18rem; background-color: #fffff">
          <div class="card-body p-4 " style=" ">
            <div class="d-flex text-black" >
              <div class="flex-shrink-0">
                <img src="https://imgx.motorplus-online.com/crop/0x0:0x0/700x0/filters:watermark(file/2017/gridoto/img/watermark_motorplus.png,5,5,60)/photo/2022/07/16/sim-gresikjpg-20220716100711.jpg"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 200px; height: 240px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Sambo Ganteng</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">uhuymen@gmail.com</p>
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div>
                    <p class="small text-muted mb-1">Address</p>
                    <p class="mb-0">Jl.Duren Tiga No.77</p>
                    <p class="small text-muted mb-1">Phone Number</p>
                    <p class="mb-0">081299387367</p>
                  </div>
                  </div>
                  <div class="d-flex pt-1">
                  <button type="button" class="btn btn-secondary flex-grow-1"><a href="{{ 'profileupdate' }}" class="fw-bold text-body">UPDATE</a></button>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
       