@extends('master')
@section('content')
	<!-- edit-infor -->
	<div class="infor">	 
		<div class="container">  
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<form action="{{route('sua-thong-tin-tai-khoan')}}" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="w3ls-title">
						<h3>Sửa thông tin tài khoản</h3> 
					</div>
					
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
								window.location.href = "{{URL::to('thong-tin-tai-khoan')}}";
    							alertify.message('OK');
  							}).setting({'label':'Thành công', 'closable':false}); 
						</script>
					@endif
					<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Thông tin cá nhân <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-4">Họ tên(*):</div>
												<div class="col-md-8"><input type="text" class="form-control" name="fullname" placeholder="Họ tên" value="{{$user->fullname}}"></div>
											</div>
											<div class="row">
												<div class="col-md-4">Số điện thoại:</div>
												<div class="col-md-8"><input type="" class="form-control" name="phone" placeholder="Số điện thoại" value="{{$user->phone}}"></div>
											</div>
											<div class="row">
												<div class="col-md-4">Email(*):</div>
												<div class="col-md-8"><input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> Địa chỉ <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
											</a> 
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-2">Địa chỉ 1:</div>
												<div class="col-md-10"><input type="text" class="form-control" placeholder="Địa chỉ 1" name="address" value="{{$user->address}}"></div>
											</div>
											<div class="row">
												<div class="col-md-2">Địa chỉ 2:</div>
												<div class="col-md-10"><input type="text" class="form-control" placeholder="Địa chỉ 2" disabled="disabled"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<button type="submit" class="btn btn-success">Lưu thay đổi</button>
					</div>
				</form>
			</div>
			<!-- //collapse --> 
			@include('offers_cards')
		</div>
	</div>
	<!--//edit-infor--> 
@endsection 