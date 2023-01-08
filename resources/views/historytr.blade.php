@extends('layouts.profile-layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/history.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <li class="active"><a href="historytr"><i class="fas fa-shopping-cart"></i> History Transaction</a></li>
                <li><a href="toko"><i class="fa fa-home"></i> TOKO</a></li>
                <li></li>
                <li><a href="/" rel="stylesheet">Home</a></li>
                <li><a href="login" rel="stylesheet">Log Out</a></li>
              </ul>
            </div>

</section>


<section class="historytp row" style="background-color: #eee; height: 100vh;">

    <section class="topupcard"> 
        <div class="wrapper rounded">
            <nav class="navbar navbar-expand-lg navbar-dark dark d-lg-flex align-items-lg-start">
            <a class="navbar-brand" href="#">Transactions
            <p class="text-muted pl-1">Welcome to your transactions Joni Setiawan</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="fa fa-bell-o font-weight-bold"></span><span class="notify">Notifications</span></a>
                    </li>
                    <li class="nav-item ">
                        <a href="#"><span class="fa fa-search"></span></a><input type="search" class="dark" placeholder="Search"></li>
                </ul>
            </div>
            </nav>
            <div class="row mt-2 pt-2">
                <div class="col-md-6" id="income">
                    <div class="d-flex justify-content-start align-items-center">
                        <p class="fa fa-long-arrow-down"></p>
                        <p class="text mx-3">Your Saldo</p>
                        <p class="text-white ml-4 money">Rp.758.223</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end align-items-center">
                        <div class="fa fa-long-arrow-up"></div>
                        <div class="text mx-3">Expense</div>
                        <div class="text-white ml-4 money">Rp.261.223</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <ul class="nav nav-tabs w-75">
                    <li class="nav-item">
                        <a class="nav-link active" href="#history">History</a>
                    </li>
                 
                </ul>
                <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">+ Top Up Saldo</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">TOP UP</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="dropdown">
                            <!--  -->
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Payment Method
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">BCA</a></li>
                            <li><a class="dropdown-item" href="#">MANDIRI</a></li>
                            <li><a class="dropdown-item" href="#">BNI</a></li>
                        </ul>
                        </div>
                            <!--  -->
                        </div>

                        <div class="modal-body">
                            <img src="https://1.bp.blogspot.com/-FTQm_MW2tpc/XbznCfNSYwI/AAAAAAAAAs8/BRHfAp2MsjIbv2caSh_UkH6ju2PMGwrawCLcBGAsYHQ/s1600/QR_code_for_mobile_English_Wikipedia.svg.png" alt="">
                        </div>
        
                        <div class="modal-body">
                            <label class="mb-1" for="">NOMINAL</label><br>
                            <input type="text"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>          
                            <a href="historytr"><button type="button" class="btn btn-primary">Request</button></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-dark table-borderless">
                <thead>
                <tr>
                    <th scope="col">Activity</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Date</th>
                    <th scope="col" class="text-right">Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">
                        <span class="fa fa-shopping-cart mr-3"></span> IKAN BAWAL
                    </td>
                    <td>
                        <span class="fa fa-credit-card"></span>
                    </td>
                    <td class="text-muted">12 Jul 2022, 12:30 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-up mr-1"></span> Rp.23.000
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span class="fa fa-shopping-cart mr-3""></span> CUMI-CUMI
                    </td>
                    <td>
                        <span class="fa fa-credit-card"></span>
                    </td>
                    <td class="text-muted">11 Jul 2022, 2:00 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-up mr-1"></span> Rp.92.000
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span class="fa fa-money mr-3"></span> TOP UP
                    </td>
                    <td>
                        <span class="fa fa-cc-mastercard"></span>
                    </td>
                    <td class="text-muted">11 Jul 2022, 2:00 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-down mr-1"></span> Rp.350.000
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span class="fa fa-shopping-cart mr-3"></span> GURITA
                    </td>
                    <td>
                        <span class="fa fa-credit-card"></span>
                    </td>
                    <td class="text-muted">12 May 2022, 4:30 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-up mr-1"></span> Rp.55.000
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span class="fa fa-shopping-cart mr-3"></span> IKAN NILA
                    </td>
                    <td>
                        <span class="fa fa-credit-card"></span>
                    </td>
                    <td class="text-muted">11 May 2022, 5:30 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-up mr-1"></span> Rp.12.000
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span class="fa fa-shopping-cart mr-3""></span> IKAN TENGGIRI
                    </td>
                    <td>
                        <span class="fa fa-credit-card"></span>
                    </td>
                    <td class="text-muted">10 May 2022, 01:30 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-up mr-1"></span> Rp.42.000
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span class="fa fa-shopping-cart mr-3""></span>  TERIPANG
                    </td>
                    <td>
                        <span class="fa fa-credit-card"></span>
                    </td>
                    <td class="text-muted">09 May 2022, 01:30 PM</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <span class="fa fa-long-arrow-up mr-1"></span> Rp.33.000
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center results">
                <span class="pl-md-3">Showing<b class="text-white">1-7 0f 50</b> trasactions</span>
                <div class="pt-3">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&lt;</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&gt;</span></a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    



</section>
@endsection
       