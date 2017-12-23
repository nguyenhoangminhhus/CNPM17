@extends('master')
@section('content')
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Tạo tài khoản của bạn</h3>  
			<div class="login-body">
				<form action="{{route('dang-ky')}}" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<script type="text/javascript">
							alertify.alert("{{Session::get('thanhcong')}}", function(){
								window.location.href = "{{URL::to('kich-hoat')}}";
    							alertify.message('OK');
  							}).setting({'label':'Thành công', 'closable':false}); 
						</script>
					@endif
					<input type="text" class="user" name="fullname" placeholder="Nhập tên của bạn" required="">
					<input type="text" class="user" name="account" placeholder="Nhập tên tài khoản" required="">
					<input type="text" class="user" name="email" placeholder="Nhập email của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu" required="">
					<input type="password" name="re_password" class="lock" placeholder="Nhập lại mật khẩu" required="">
					<input type="submit" value="Đăng Ký ">
					<div class="forgot-grid">
						<div class="forgot">
							<a href="{{route('quen-mat-khau')}}">Quên mật khẩu?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6>Bạn đã có tài khoản? <a href="{{route('dang-nhap')}}">Đăng nhập ngay »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
@endsection