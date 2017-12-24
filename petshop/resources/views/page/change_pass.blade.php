@extends('master')
@section('content')
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Đổi mật khẩu</h3>  
			<div class="login-body">
				<form action="{{route('doi-mat-khau')}}" method="post">
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
								window.location.href = "{{URL::to('dang-xuat')}}";
    							alertify.message('OK');
  							}).setting({'label':'Thành công', 'closable':false}); 
						</script>
					@elseif(Session::has('thatbai'))
						<div class="alert alert-danger">{{Session::get('thatbai')}}</div>
					@endif
					<input type="password" class="lock" name="passwordold" placeholder="Nhập mật khẩu cũ của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu mới" required="">
					<input type="password" name="re_password" class="lock" placeholder="Nhập lại mật khẩu mới" required="">
					<input type="submit" value="Đổi mật khẩu">
				</form>
			</div>  
		</div>
	</div>
	<!-- //login-page -->
@endsection>