@extends('master')
@section('content')
<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
				<div class="w3ls-add-grids w3agile-add-products">
					<h4>{{$sale_view->sale_name}}</h4>
					<p>{{$sale_view->sale_description}}</p>
				</div> 
				<div class="products-row">
					@foreach($sp_theokhuyenmai as $sp)
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>Sale</h6></div>
							<a href="{{route('chi-tiet-san-pham', $sp->products_id)}}"><img src="source/images/{{$sp->image}}" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5>{{$sp->name}}</h5> 
								<h6><del>{{number_format($sp->unit_price)}}</del> {{number_format($sp->promotion_price)}} VNĐ</h6> 
								<a class="w3ls-cart my-cart-btn" href="{{ route('mua-hang',[$sp->products_id,$sp->name]) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
							</div>
						</div> 
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->
@endsection