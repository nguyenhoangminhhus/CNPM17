@extends('master')
@section('content')
	<!-- offers-page -->
	<div class="wthree-offers">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Khuyến mãi </h3>
			<div class="w3ls-add-grids w3agile-add-products">
				<a href="#"> 
					<h4>Top 10 sản phẩm đang giảm giá <span>20%</span></h4>
					<h6>Xem ngay <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
				</a>
			</div> 
			<div class="row offer-card-row">
				@foreach($sale_hienthi as $sale)
				<div class="col-md-4 offer-card-grids" style="background: url(source/images/{{$sale->sale_image}}) no-repeat;">
					<h4>{{$sale->sale_name}} </h4>
					<p>{{$sale->sale_description}}</p>
					<a href="{{route('san-pham-khuyen-mai', $sale->sale_id)}}">Xem ngay <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				</div>
				@endforeach
			</div>
			<div class="row offer-card-row">{{$sale_hienthi->links()}}</div>
			@include('offers_cards')
		</div>
	</div>
	<!-- //offers-page --> 
@endsection