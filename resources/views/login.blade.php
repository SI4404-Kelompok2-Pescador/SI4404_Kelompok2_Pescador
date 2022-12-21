<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- load css file --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <title>Login</title>
        <style>
            body
            {
                background-image : url(assets/img/loginn.png);
                background-repeat : no-repeat;
                background-size : cover;
            }
        </style>
        
    </head>

    <body>     
        <div class="d-flex container mt-5 justify-content-end">
            <div class="d-flex container mt-5 justify-content-start">
            
                <div class="d-flex container mt-5 justify-content-center bg-white bg-opacity-50 " style="width: 35rem;">
                    
                    <hr class="ms-2 me-2 mt-0 mb-0">
                    <div class="card-body">
                        <form action="{{route('login.post')}}" method="post">
                            @csrf
                            <h2 class="boltext text-center d-flex justify-content-center">Login</h2>
                            <label class="mb-2" for="email">Email</label><br>
                            <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Your E-mail">
                            <label class="mb-2" for="pass">Kata Sandi</label><br>
                            <input class="form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Password">
                            <div class="mt-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember</label>
                            </div>
                            <div class="d-flex justify-content-center text-start mt-4 ">
                                <button class="btn btn-secondary" type="submit" name="submit" onclick="" style="width: 200px">Login</button>
                            </div>  
                        </form>

                            <div class="text-center d-flex justify-content-center mt-3">
                                <p class="me-1"><a href="register"
                                class="fw-bold text-body"><u>Create Account</u></a></p>               
                            </div>
                            <div class="text-center d-flex justify-content-end mt-2">
                                <a href="register">Forgot Password?</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
       