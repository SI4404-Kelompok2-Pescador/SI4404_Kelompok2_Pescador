@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/logreg.css') }}">
<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="{{'login'}}"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return Login</a></div>
				<div class="contact" style="height: 34rem;">
					<form action="{{route('register.post')}}" method="post" enctype="multipart/form-data">
						@csrf
						<h3>SIGN UP</h3>
                        <input type="text" name="name" id="name" placeholder="NAME">
						<input type="text" name="email" id="email" placeholder="E-MAIL">
                        <input type="text" name="phone" id="phone" placeholder="PHONE NUMBER">
                        <input type="text" name="address" id="address" placeholder="ADDRESS">
						<input type="password" name="password" id="password" placeholder="PASSWORD">  
                        <input type="file" class="form-control" id="inputGroupFile01" name="image" style="height: 40px;">  					
                        <a href="{{'login'}}"><button class="submit1" type="submit" name="submit">REGISTER</button></a>
					</form>
				</div>
                
			</div>
			<div class="right">
				<div class="right-text">
					<h2>Pescador</h2>
					<h5>Solusi Kami untuk Dunia Akuakultur</h5>
				</div>
				<div class="right-inductor"><img src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft" alt=""></div>
			</div>
		</div>
	</section>
@endsection