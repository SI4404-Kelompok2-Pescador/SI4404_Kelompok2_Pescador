@extends('layouts.profile-layout')
@section('content')
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/toko.css') }}">
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

    
      <section class="lamanke5" id="lamanke5">
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjrLwf7ixSgnVaBxzMlz0x7pJyWxVk487rTTixdQnzM0M2nTe1pdL5xh3oXIYDZDqtYys&usqp=CAU" alt="" style="width: 100%; height:50vh">
        </div>
        <div class="textll1">
            <h1>Mari Daftarkan Toko Anda</h1>
            <div class="mt-4" >
            <button class="subt btn btn-success rounded-pill mb-3" type="submit" ><a class="nav-link" href="login">DAFTARKAN TOKO</a></button>
            </div>

        </div>



</section>



@endsection
       