@extends('master')
@section('content')
<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
				<div class="product-top">
					<h4>Sản Phẩm : {{$loai_sp->name}}</h4>
					<ul> 
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Low price</a></li> 
								<li><a href="#">High price</a></li>
								<li><a href="#">Latest</a></li> 
								<li><a href="#">Popular</a></li> 
							</ul> 
						</li>
					</ul> 
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					@foreach($sp_theoloai as $sp)
					<div class="products-row">
					
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag">
							@if($sp->promotion_price!=0)
							<h6 style="color: black">%Sale<br></h6>
							@endif
							</div>
							<a href="{{route('chi-tiet-san-pham',$sp->products_id)}}"><img src="source/images/{{$sp->image}}" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">{{$sp->name}}</a></h5> 
								@if($sp->promotion_price!=0)
								<h6><del>{{number_format($sp->unit_price)}}</del>{{number_format($sp->promotion_price)}} VNĐ</h6> 
								@else

									<span style="font-size: 18px">{{number_format($sp->unit_price)}} VNĐ</span>
								@endif	
								{{-- <button class="w3ls-cart pw3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="100.00" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button> --}}

								<a class="w3ls-cart my-cart-btn" href="{{ route('mua-hang',[$sp->products_id,$sp->name]) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
							</div>
						</div> 
					</div>
					
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<!-- //add-products -->
			</div>
			<div class="clearfix"> </div>
			<!-- recommendations -->
			@include('recommendations')
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->
@endsection