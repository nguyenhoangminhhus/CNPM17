@extends('master')
@section('content')
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Kích hoạt tài khoản</h3>  
			<div class="login-body">
				<form action="{{route('kich-hoat')}}" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))

						<div class="alert alert-success">{{Session::get('thanhcong')}}<a href="{{route('dang-nhap')}}"> Đăng nhập ngay</a></div>

						<script type="text/javascript">
							alertify.alert("{{Session::get('thanhcong')}}", function(){
								window.location.href = "{{URL::to('dang-nhap')}}";
    							alertify.message('OK');
  							}).setting({'label':'Thành công', 'closable':false}); 
						</script>

					@elseif(Session::has('thatbai'))
						<div class="alert alert-danger">{{Session::get('thatbai')}}</div>
					@endif
					<input type="text" class="lock" name="account" placeholder="Nhập tài khoản của bạn" required="">
					<input type="text" name="code" class="lock" placeholder="Nhập mã kích hoạt" required="">
					<input type="submit" value="Đồng ý">
				</form>
			</div>  
		</div>
	</div>
	<!-- //login-page -->
@endsection