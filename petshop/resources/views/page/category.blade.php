@extends('master')
@section('content')
<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<div class="product-top">
					<h4>Electronics</h4>
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
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag"><h6>20%<br>Off</h6></div>
							<a href="single.html"><img src="source/images{$sp->image}" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">{{$sp->name}}</a></h5> 
								<h6><del>$200</del>{{$sp->price}}</h6> 
								<button class="w3ls-cart pw3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="100.00" data-quantity="1" data-image="images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
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
			
			<!-- recommendations -->
			@include('recommendations')
			<!-- //recommendations -->
		</div>
	</div>

	<!--//products-->  
@endsection