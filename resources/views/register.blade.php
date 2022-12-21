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
        <title>Register</title>

        <style>
            body
            {
                background-image : url(ikan3.png);
                background-repeat : no-repeat;
                background-size : cover;
            }
        </style>
    </head>

    <body>
        <!-- REGISTRASI INPUT -->
        <div class="d-flex container mt-5 justify-content-end">
            <div class="d-flex container mt-5 justify-content-center bg-white bg-opacity-50" style="width: 40rem;">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="" method="post">
                        <h2 class="boltext text-center m-3">Register</h2>
                        <label class="mb-2" for="nama">Name</label><br>
                        <input class="form-control mb-2" type="text" name="nama" id="nama" required placeholder="Your Name">
                        <label class="mb-2" for="email">E-mail</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Your E-mail">
                        <label class="mb-2" for="nohp">Phone Number</label><br>
                        <input class="form-control mb-2" type="text" name="nohp" id="nohp" required placeholder="Phone Number">
                        <label class="mb-2" for="address">Address</label><br>
                        <input class="form-control mb-2" type="text" name="address" id="address" required placeholder="Your Address">
                        <label class="mb-2" for="pass">Password</label><br>
                        <input class="form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Password">
                        <div class="text-start pt-2 mb-2">
                            <button class="btn btn-dark" type="submit" name="submit" onclick="" style="width: 150px">Register</button>
                        </div>
                    </form>

                    <div class="text-center d-flex justify-content-end">
                        <p class="ME-1">Have already an account? <a href="login.php"
                            class="fw-bold text-body"><u>Login here</u></a></p>
                    </div>
                </div>
            </div>
        </div>
            <!-- END REGISTRASI INPUT -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            var gagal = document.getElementById('alertgagal');
            gagal.style.display = 'none'
        </script>
    </body>
</html>