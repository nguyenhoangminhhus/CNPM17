@extends('master')
@section('content')

	<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<h3 class="w3ls-title">Tìm Kiếm</h3>
						<h6 class="w3ls-title">Tìm được {{count($product)}} sản phẩm</h6>
						
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
									@foreach($product as $pro)

									<div class="item">
										
										<div class="glry-w3agile-grids agileits"> 
											<a href="{{route('chi-tiet-san-pham',$pro->products_id)}}"><img src="source/images/{{$pro->image}}" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">{{$pro->name}}</a></h4>
												<p>{{$pro->description}}</p>
												<h5><div> @if($pro->promotion_price!=0)
											<h6><del>{{$pro->unit_price}}</del>  {{$pro->promotion_price}} đ</h6> 
												@else

												<span style="font-size: 18px">{{$pro->unit_price}} đ</span>
													@endif	</div></h5> 
												<button class="w3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>   
										</div> 
										
										
									</div>

								@endforeach  


							</div>
							
						</div>
						
					</div>
					
				</div>  
			</div>  	
		</div>  
	
@endsection