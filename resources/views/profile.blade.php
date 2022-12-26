@extends('layouts.layout')
@section('content')
<section>
        <style>
            body
            {
                background-image : url("https://s3.bukalapak.com/img/363716661/large/abu-abu.jpg");
                background-repeat : no-repeat;
                background-size : cover;
            }
        </style> 

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <!-- Container wrapper -->
        <div class="container-fluid">

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand">
            <img
                src="assets/img/logowh.png"
                height="45"
                alt=""
                loading="lazy"
            />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="profile"></a>
            </li>

            </ul>
            <!-- Left links -->
        </div>
        <form class="navlogbut d-flex">
            <button class="btn btn-outline-light bg-secondary=" type="submit" ><a class="nav-link" href="/">Home</a></button>
        </form>
        
        
    </nav>
    <!-- Navbar -->

        <!-- profile view -->
        <div class="profileview d-flex container ">
            <div class="d-flex container mt-5 justify-content-center bg-success bg-opacity-50" style="width: 20rem; height: 25rem; ">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="dds card-body">
                    <form action="" method="post">
                        <h2 class="boltext text-center m-3">PROFILE</h2>
                        <label for='inputGroupFile01'>Image</label>
                        <p style="">FOTO MOBIL</p>
                        <label class="profin mb-1" for="nama">Name</label><br>
                        <input class="form-control mb-2 text-center" type="text" name="nama" id="nama" required placeholder="Your Name">
                        <label class="profin mb-1" for="email">E-mail</label><br>
                        <input class="form-control mb-2 text-center" type="text" name="email" id="email" required placeholder="Your E-mail">
                        <label class="profin mb-1" for="nohp">Phone Number</label><br>
                        <input class="form-control mb-2 text-center" type="text" name="nohp" id="nohp" required placeholder="Phone Number">
                    </form>

                </div>
            </div>
        </div>
        <!-- end profile view -->

        <!-- profile up -->
        <div class="profileup d-flex container ">
            <div class="d-flex container mt-5 justify-content-center bg-success bg-opacity-50" style="width: 45rem; height: 33rem; ">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="dds card-body">
                    <form action="" method="post">
                        <h2 class="boltext text-center m-3">UPDATE</h2>
                        <label class="tf1 profin mb-1" for="nama">Name</label><br>
                        <input class="form-control mb-1" type="text" name="nama" id="nama" required placeholder="Your Name">
                        <label class="tf1 profin mb-1" for="email">E-mail</label><br>
                        <input class="form-control mb-1" type="text" name="email" id="email" required placeholder="Your E-mail">
                        <label class="tf1 profin mb-1" for="nohp">Phone Number</label><br>
                        <input class="form-control mb-1" type="text" name="nohp" id="nohp" required placeholder="Phone Number">
                        <label class="tf1 profin mb-1" for="address">Address</label><br>
                        <input class="form-control mb-1" type="text" name="address" id="address" required placeholder="Your Address">
                        <label class="tf1 profin mb-1" for="pass">Password</label><br>
                        <input class="form-control mb-1" type="Password" name="pass" id="pass" required placeholder="Password">
                        <label class="tf1" for='inputGroupFile01'>Photo Profile</label>
                        <input type='file' class='form-control' id='inputGroupFile01' value='" "' name='gambar' style='height: 35px; width: 15rem;'>
                        <div class="text-center pt-2 mb-1 mt-3 ">
                            <button class="btn btn-dark" type="submit" name="submit" onclick="" style="width: 200px ">Update</button>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
        <!-- end profile up -->
        </section>
@endsection
       