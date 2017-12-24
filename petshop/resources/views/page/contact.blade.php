@extends('master')
@section('content')
	<!-- contact-page -->
	<div class="contact">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Liên Hệ</h3>  
			<div class="map-info">
				@foreach($map as $mp)
				<div class="col-md-6 map-grids">
					<h4>{{$mp->Addresss_name}}</h4>
					<h5>{{$mp->Addresss_description}}</h5>
					<iframe src="{{$mp->Addresss_linkmap}}"></iframe>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>  
			<div class="contact-form-row">
				<h3 class="w3ls-title w3ls-title1">Gửi tin nhắn cho chúng tôi</h3>  
				<div class="col-md-7 contact-left">
					<form action="{{route('lien-he')}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
							@if(count($errors)>0)
								<div class="alert alert-danger">
									@foreach($errors->all() as $err)
										{{$err}}
									@endforeach
								</div>
							@endif
							@if(Session::has('thanhcong'))
								<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
							@endif
						<input type="text" name="name" placeholder="Tên của bạn" required="">
						<input class="email" type="text" name="email" placeholder="Email của bạn" required="">
						<textarea placeholder="Tin nhắn" name="Message" required=""></textarea>
						<input type="submit" value="GỬI">
					</form>
				</div> 
				<div class="col-md-4 contact-right">
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Quản lý đơn đặt hàng của bạn <br>Dễ dàng theo dõi đơn đặt hàng & trả về </p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row cnt-w3agile-row-mdl">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-bell" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Thông báo <br>Nhận thông báo có liên quan & giới thiệu</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Yêu cầu<br> Với mong muốn, nhận xét, đánh giá</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact-page --> 
@endsection