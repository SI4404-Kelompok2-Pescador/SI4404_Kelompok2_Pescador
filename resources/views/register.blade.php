@extends('layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/logreg.css') }}">
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="{{ 'login' }}"><img
                            src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                            alt="">Return Login</a></div>
                <div class="contact" style="height: 34rem;">
                    <form action="{{ route('register.post') }}" method="post">
                        @csrf
                        <h2 class="boltext text-center m-3">Register</h2>
                        {{-- <label class="mb-2" for="name">Name</label><br> --}}
                        <input class="form-control mb-2" type="text" name="name" id="name" required
                            placeholder="Your Name">
                        {{-- <label class="mb-2" for="email">E-mail</label><br> --}}
                        <input class="form-control mb-2" type="text" name="email" id="email" required
                            placeholder="Your E-mail">
                        {{-- <label class="mb-2" for="phone">Phone Number</label><br> --}}
                        <input class="form-control mb-2" type="text" name="phone" id="phone" required
                            placeholder="Phone Number">
                        {{-- <label class="mb-2" for="address">Address</label><br> --}}
                        
                        <input class="form-control mb-2" type="text" name="address" id="address" required
                            placeholder="Your Address">
                        {{-- input image --}}
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        {{-- <label class="mb-2" for="password">Password</label><br> --}}
                        <input class="form-control mb-2" type="password" name="password" id="password" required
                            placeholder="Password">
                        <div class="text-start pt-2 mb-2">
                            <a href="{{ 'login' }}"><button type="submit" name="submit" onclick=""
                                    style="width: 150px" class="btn btn-dark">Register</button></a>
                        </div>
                    </form>

                </div>

            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Pescador</h2>
                    <h5>Solusi Kami untuk Dunia Akuakultur</h5>
                </div>
                <div class="right-inductor"><img
                        src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft"
                        alt=""></div>
            </div>
        </div>
    </section>
@endsection
