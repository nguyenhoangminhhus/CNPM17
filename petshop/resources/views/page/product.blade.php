@extends('master')
@section('content')
	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">

								<li data-thumb="source/images/{{$sanpham->image}}">
									<div class="thumb-image detail_images"> <img src="source/images/{{$sanpham->image}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="source/images/{{$sanpham->image}}">
									 <div class="thumb-image"> <img src="source/images/{{$sanpham->image}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="source/images/{{$sanpham->image}}">
								   <div class="thumb-image"> <img src="source/images/{{$sanpham->image}}" data-imagezoom="true" class="img-responsive" alt=""> </div>

								<li data-thumb="source/images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="source/images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="source/images/s2.jpg">
									 <div class="thumb-image"> <img src="source/images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="source/images/s3.jpg">
								   <div class="thumb-image"> <img src="source/images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>

								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">

						<h3 class="item_name">{{$sanpham->name}}</h3>
						<p>{{$sanpham->description}}</p>
						<div class="single-rating">
							<!-- <ul>
								<li class="rating"><i class="fa fa-eye" aria-hidden="true"></i>20 lượt xem sản phẩm</li>
								<li class="rating"><i class="fa fa-shopping-cart" aria-hidden="true"></i>20 lượt mua sản phẩm</li>
							</ul> --> 
						</div>
						<div class="single-price">
							<ul>
								<li>{{number_format($sanpham->unit_price)}} VNĐ</li>  
								<li><del>{{number_format($sanpham->promotion_price)}} VNĐ</del><span class="w3off"></span></li> 
						<h3 class="item_name">Thẻ tên</h3>
						<p>(*Sản phẩm dành cho chó*)</p>
						<div class="single-rating">
							<ul>
								<li class="rating"><i class="fa fa-eye" aria-hidden="true"></i>20 lượt xem sản phẩm</li>
								<li class="rating"><i class="fa fa-shopping-cart" aria-hidden="true"></i>20 lượt mua sản phẩm</li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li>100.000.000 VNĐ</li>  
								<li><del>600.000.000 VNĐ</del><span class="w3off">Giảm 10%</span> kết thúc: 5 / 11</li> 
							</ul>	
						</div> 
						<button class="w3ls-cart my-cart-btn" data-id="8" data-name="Audio speaker" data-summary="summary 1" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
					</div>
				   <div class="clearfix"> </div>  
				</div>
				<div class="single-page-icons social-icons"> 
					<ul>
						<li><h4>Chia sẻ</h4></li>
						<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					</ul>
				</div>
			</div> 
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">Thông tin sản phẩm</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Miêu tả <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								{{$sanpham->description}}
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> Thông tin chi tiết <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">

								{{$sanpham->description}}

								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Bình luận <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								@if(Auth::check())
								<form  action="comment/{{$sanpham->products_id}}" role="form">
									
									<div class="form-group">
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-primary"> Gửi</button>
								</form>
							</div
							@endif
						</div>
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Bình luận (5) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 	
			@include('offers_cards')
			@include('recommendations')
			@include('offers_cards')
		</div>
	</div>
	<!--//products-->
@endsection