@extends('layouts.layout')
@section('content')
<section id="register">
        <style>
            body
            {
                background-image : url(assets/img/loginn.png);
                background-repeat : no-repeat;
                background-size : cover;
            }
        </style>
        <div class="d-flex container mt-5 justify-content-end">
            
            <div class="kokom d-flex container mt-5 justify-content-center bg-white bg-opacity-50" style="width: 40rem;">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="{{route('register.post')}}" method="post">
                        @csrf
                        <h2 class="boltext text-center m-3">Register</h2>
                        <label class="mb-2" for="name">Name</label><br>
                        <input class="form-control mb-2" type="text" name="name" id="name" required placeholder="Your Name">
                        <label class="mb-2" for="email">E-mail</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Your E-mail">
                        <label class="mb-2" for="phone">Phone Number</label><br>
                        <input class="form-control mb-2" type="text" name="phone" id="phone" required placeholder="Phone Number">
                        <label class="mb-2" for="address">Address</label><br>
                        <input class="form-control mb-2" type="text" name="address" id="address" required placeholder="Your Address">
                        <label class="mb-2" for="password">Password</label><br>
                        <input class="form-control mb-2" type="password" name="password" id="password" required placeholder="Password">
                        <div class="text-start pt-2 mb-2">
                            <a href="{{'login'}}"><button type="submit" name="submit" onclick="" style="width: 150px" class="btn btn-dark">Register</button></a>
                        </div>
                    </form>
                    <div class="text-center d-flex justify-content-end">
                        <p class="ME-1">Have already an account? <a href="{{'login'}}"
                            class="fw-bold text-body"><u>Login here</u></a></p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection