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
                    <li><a href="profileview"><i class="fa fa-user"></i> Profile</a></li>
                    <li class="active"><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="historytr"><i class="fas fa-shopping-cart"></i> History Transaction</a></li>
                    <li><a href="toko"><i class="fa fa-home"></i> TOKO</a></li>
                    <li></li>
                    <li><a href="/" rel="stylesheet">Home</a></li>
                    <li>
                        {{-- post logout method from route --}}
                        <form action="{{ route('logout.post') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-pill"
                                style="width:190px; margin-left:30px; margin-top:420px; ">Logout</button>
                    </li>
                </ul>
            </div>

        </div>

        <!-- profile up -->
        <section class="row" style="background-color: #eee; height: 100%;">
            <div class="container py-5 ">
                <div class=" row">
                    <div class="profview col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="profileview">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Settings Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="profileup d-flex container ">
                    <div class="d-flex container mt-5 justify-content-center bg-white bg-opacity-100"
                        style="border-radius: 1px; width: 65rem; height: 40rem; ">

                        <hr class="ms-2 me-2 mt-0 mb-0">
                        <div class="dds card-body">
                            <form action="{{ route('profile.update') }}" method="PUT" enctype="multipart/form-data">
                                @csrf
                                <h2 class="boltext text-center m-3">UPDATE PROFILE</h2>
                                <label class="mb-2" for="name">Name</label><br>
                                <input class="profin form-control mb-2" type="text" name="name" id="name"
                                    required placeholder="Your Name">
                                <label class="mb-2" for="email">E-mail</label><br>
                                <input class="profin form-control mb-2" type="text" name="email" id="email"
                                    required placeholder="Your E-mail">
                                <label class="mb-2" for="phone">Phone Number</label><br>
                                <input class="profin form-control mb-2" type="text" name="phone" id="phone"
                                    required placeholder="Phone Number">
                                <label class="mb-2" for="address">Address</label><br>
                                <input class="profin form-control mb-2" type="text" name="address" id="address"
                                    required placeholder="Your Address">
                                <label class="tf1" for='image'>Photo Profile</label>
                                <input type='file' class='profin form-control' id='image' name='image'
                                    style='height: 35px; width: 15rem;'>
                                <div class="text-center pt-2 mb-2 mt-3 ">
                                    <a href="{{ 'login' }}"><button class="submit1" type="submit"
                                            name="submit">UPDATE</button></a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <!-- end profile up -->
        </section>
    @endsection
