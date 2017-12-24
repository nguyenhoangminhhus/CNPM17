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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lọc<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Giá thấp</a></li> 
								<li><a href="#">Giá cao</a></li>
								<li><a href="#">Gần đây nhất</a></li> 
								<li><a href="#">Phổ biến</a></li> 
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
								<button class="w3ls-cart pw3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="100.00" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
							</div>
						</div> 
					</div>
					
					</div>
					@endforeach
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">{{$sp_theoloai->links()}}</div>
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
			<div class="recommend">
				<h3 class="w3ls-title">Sản phẩm gợi ý </h3> 
				<div id="owl-demo5" class="owl-carousel">
					@foreach($sp_khac as $sp_k)	
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag">
								@if($sp_k->promotion_price!=0)
								<h6 style="color: black">%Sale<br></h6>
								@endif
							</div>
							<a href="{{route('chi-tiet-san-pham',$sp_k->products_id)}}"><img src="source/images/{{$sp_k->image}}" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">{{$sp_k->name}}</a></h4>
								<p>{{$sp_k->description}}</p>
									<h5><div> @if($sp_k->promotion_price!=0)
											<h6><del>{{$sp_k->unit_price}}</del>  {{$sp_k->promotion_price}} đ</h6> 
												@else

												<span style="font-size: 18px">{{$sp_k->unit_price}} đ</span>
												@endif	
										</div>
									</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div> 
					</div>
					 @endforeach

				</div>    
			</div>
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->
@endsection