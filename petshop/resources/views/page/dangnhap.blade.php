@extends('master')
@section('content')
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Đăng nhập vào tài khoản của bạn</h3>  
			<div class="login-body">
				<form action="#" method="post">
					<input type="text" class="user" name="email" placeholder="Nhập tài khoản của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu" required="">
					<input type="submit" value="Đăng nhập">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nhớ mật khẩu</label>
						<div class="forgot">
							<a href="#">Quên mật khẩu?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Bạn chưa có tài khoản? <a href="signup.html">Tạo tài khoản ngay »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Đăng nhập với tài khoản mạng xã hội</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
				</ul> 
			</div>
		</div>
	</div>
	<!-- //login-page --> 
@endsection