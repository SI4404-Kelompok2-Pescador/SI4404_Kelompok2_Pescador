@extends('layouts.layout')
@section('content')
<section id="login">
    <style>
        body {
            background-image: url(assets/img/loginn.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <div class="d-flex container mt-5 justify-content-end">
        <div class="d-flex container mt-5 justify-content-start">

            <div class="border-we d-flex container mt-5 justify-content-center bg-white bg-opacity-50 "
                style="width: 35rem;">

                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf
                        <h2 class="boltext text-center d-flex justify-content-center">Login</h2>
                        <label class="mb-2" for="email">Email</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required
                            placeholder="Your E-mail">
                        <label class="mb-2" for="password">Kata Sandi</label><br>
                        <input class="form-control mb-2" type="password" name="password" id="password" required
                            placeholder="Password">
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember</label>
                        </div>
                        <div class="d-flex justify-content-center text-start mt-4 ">
                            <button class="btn btn-secondary" type="submit" name="submit" onclick=""
                                style="width: 200px">Login</button>
                        </div>
                    </form>

                    <div class="text-center d-flex justify-content-center mt-3">
                        <p class="me-1"><a href="{{ 'register' }}" class="fw-bold text-body"><u>Create
                                    Account</u></a>
                        </p>
                    </div>
                    <div class="text-center d-flex justify-content-end mt-2">
                        <a href="register">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection