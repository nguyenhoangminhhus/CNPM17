@extends('master')
@section('content')
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Quên mật khẩu</h3>  
			<div class="login-body">

				<form action="#" method="post">
					<input type="text" class="user" name="fullname" placeholder="Nhập tên tài khoản của bạn" required="">

				<form action="{{route('quen-mat-khau')}}" method="post">
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
								window.location.href = "{{URL::to('dang-nhap')}}";
  							}).setting({'label':'Thành công', 'closable':false}); 
						</script>
					@elseif(Session::has('thatbai'))
						<div class="alert alert-danger">{{Session::get('thatbai')}}</div>
					@endif
					<input type="text" class="user" name="account" placeholder="Nhập tên tài khoản của bạn" required="">

					<input type="text" class="user" name="email" placeholder="Nhập email tương ứng" required="">
					<input type="submit" value="Đồng ý ">
				</form>
			</div>  
			<h6> Bạn chưa có tài khoản? <a href="{{route('dang-ky')}}">Tạo tài khoản ngay »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
@endsection