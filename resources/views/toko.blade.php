@extends('layouts.profile-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/toko.css') }}">
<section>
<div id="sidebar"> 
            <div class="white-label">
              <img src="assets/img/logowh.png" alt="">
            </div> 
            <div id="sidebar-nav">   
              <ul>               
                <li><a href="profileview"><i class=""></i> Profile</a></li>  
                <li><a href="profileupdate"><i class="pesanan"></i> Settings</a></li>   
                <li><a href="historytr"><i class=""></i> History Transaction</a></li>         
                <li class="active"><a href="topup"><i class="fa fa-dashboard"></i> TOKO</a></li>
                <li></li>
                <li><a href="/" rel="stylesheet">Home</a></li>
                <li><a href="login" rel="stylesheet">Log Out</a></li>
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
            <li class="breadcrumb-item"><a href="profileview">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toko</li>
          </ol>
        </nav>
      </div>
    </div>

</section>


@endsection
       