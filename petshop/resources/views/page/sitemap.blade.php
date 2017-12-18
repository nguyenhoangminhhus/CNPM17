@extends('master')
@section('content')
	<!-- site map -->
	<div class="sitemap">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sơ đồ website</h3>
			<div class="sitemap-row"> 
				<nav class="sitemap-tabs"> 
					<div  id="myNavbar">
						<ul> 
							@foreach($category as $cate)
							<li><a href="#" style="color: {{$cate->color}}; border-color: {{$cate->color}}"><i class="{{$cate->category_icon}}"></i> {{$cate->name}}</a></li>
							@endforeach
						</ul> 
					</div>
				</nav>	
			</div>
			
			<div class="sitemap-row2  sitemap-text"> 
				<h3 class="w3sitemap-title"><i class="fa fa-gears"></i>Dịch vụ shoppet Conner</h3>  
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="{{route('dich-vu')}}">Dịch vụ</a></li> 
						<li><a href="{{route('gia-tri-cot-loi')}}">Giá trị cốt lõi</a></li>
						<li><a href="{{route('chinh-sach-bao-mat')}}">Chính sách bảo mật</a></li>  
					</ul>
				</div>
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="{{route('thong-tin')}}">Thông tin</a></li> 
						<li><a href="{{route('lien-he')}}">Liên hệ</a></li>  
						
						<li><a href="{{route('giup-do')}}">Giúp đỡ</a></li>  
					</ul>
				</div>
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="{{route('dang-ky')}}">Đăng ký</a></li>  
						<li><a href="{{route('dang-nhap')}}">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //site map -->
@endsection