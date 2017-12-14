@extends('master')
@section('content')
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Tạo tài khoản của bạn</h3>  
			<div class="login-body">
				<form action="#" method="post">
					<input type="text" class="user" name="name" placeholder="Nhập tên của bạn" required="">
					<input type="text" class="user" name="name" placeholder="Nhập tên tài khoản" required="">
					<input type="text" class="user" name="email" placeholder="Nhập email của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu" required="">
					<input type="submit" value="Đăng Ký ">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nhớ mật khẩu</label>
						<div class="forgot">
							<a href="#">Quên mật khẩu?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6>Bạn đã có tài khoản? <a href="login.html">Đăng nhập ngay »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
@endsection