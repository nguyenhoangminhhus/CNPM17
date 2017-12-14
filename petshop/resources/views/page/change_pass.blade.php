@extends('master')
@section('content')
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Đổi mật khẩu</h3>  
			<div class="login-body">
				<form action="#" method="post">
					<input type="password" class="lock" name="password" placeholder="Nhập mật khẩu cũ của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu mới" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập lại mật khẩu mới" required="">
					<input type="submit" value="Đổi mật khẩu">
				</form>
			</div>  
		</div>
	</div>
	<!-- //login-page -->
@endsection