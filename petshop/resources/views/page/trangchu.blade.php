@extends('master')
@section('content')
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
			<div class="carousel-inner" role="listbox">  
				<div class="item active"><!-- First-Slide -->
					<img src="source/images/5.jpg" alt="" class="img-responsive" />
					<div class="carousel-caption kb_caption kb_caption_right">
						<h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
						<h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
					</div>
				</div>  
				<div class="item"> <!-- Second-Slide -->
					<img src="source/images/8.jpg" alt="" class="img-responsive" />
					<div class="carousel-caption kb_caption kb_caption_right">
						<h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
						<h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
					</div>
				</div> 
				<div class="item"><!-- Third-Slide -->
					<img src="source/images/3.jpg" alt="" class="img-responsive"/>
					<div class="carousel-caption kb_caption kb_caption_center">
						<h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
						<h4 data-animation="animated flipInX">cupidatat non proident</h4>
					</div>
				</div> 
			</div> 
			<!-- Left-Button -->
			<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
				<span class="sr-only">Trước</span>
			</a> 
			<!-- Right-Button -->
			<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
				<span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
				<span class="sr-only">Sau</span>
			</a> 
		</div>
	</div>
	<!-- //banner -->  
	<!-- welcome -->
	<div class="welcome"> 
		<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<h3 class="w3ls-title">Sản Phẩm Nổi Bật</h3>
					<div id="myTabContent" class="tab-content">
						
						<div role="tabpanel" class="tab-pane fade" id="" aria-labelledby="-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products.html"><img src="source/images/e1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Audio speaker</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>1.000.000 VNĐ</h5> 
												<button class="w3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>   
										</div>   
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="products.html"><img src="source/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Refrigerator</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p> 
												<h5>1.000.000 VNĐ</h5>
												<button class="w3ls-cart my-cart-btn" data-id="2" data-name="Refrigerator" data-summary="summary 2" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>       
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products.html"><img src="source/images/e3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Smart Phone</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>1.000.000 VNĐ</h5>
												<button class="w3ls-cart my-cart-btn" data-id="3" data-name="Smart Phone" data-summary="summary 3" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>        
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products.html"><img src="source/images/e4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Digital Camera</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>1.000.000 VNĐ</h5>
												<button class="w3ls-cart my-cart-btn" data-id="4" data-name="Digital Camera" data-summary="summary 4" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products.html"><img src="source/images/e1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Audio speaker</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>1.000.000 VNĐ</h5> 
												<button class="w3ls-cart my-cart-btn" data-id="5" data-name="Audio speaker" data-summary="summary 5" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>   
										</div>   
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="products.html"><img src="source/images/e2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Refrigerator</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p> 
												<h5>1.000.000 VNĐ</h5>
												<button class="w3ls-cart my-cart-btn" data-id="6" data-name="Refrigerator" data-summary="summary 6" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>       
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products.html"><img src="source/images/e3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Smart Phone</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>1.000.000 VNĐ</h5>
												<button class="w3ls-cart my-cart-btn" data-id="7" data-name="Audio speaker" data-summary="summary 1" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>        
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products.html"><img src="source/images/e4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">Digital Camera</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>1.000.000 VNĐ</h5>
												<button class="w3ls-cart my-cart-btn" data-id="8" data-name="Audio speaker" data-summary="summary 1" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>         
										</div>  
									</div>
								</div> 
							</div>
						</div>
						
					</div>   
				</div>  
			</div>  	
		</div>  	
	</div> 
	<!-- //welcome -->
	<!-- add-products -->
	<div class="add-products"> 
		<div class="container">  
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="products1.html"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Mua ngay <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-mdl">
					<a href="products1.html"> 
						<h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
						<h6>Mua ngay <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-mdl1">
					<a href="products.html"> 
						<h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
						<h6>Mua ngay <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="clerfix"> </div>
			</div>  	
		</div>  	
	</div>
	<!-- //add-products -->
	<!-- coming soon -->
	<div class="soon">
		<div class="container">
			<h3>Khuyến Mãi Lớn Của Tuần</h3>
			<h4>Chờ Đợi! Đừng Bỏ Lỡ!</h4>  
			<div id="countdown1" class="ClassyCountdownDemo"></div>
		</div> 
	</div>
	<!-- //coming soon -->
	<!-- deals -->
	<div class="deals"> 
		<div class="container"> 
			<h3 class="w3ls-title">SỰ KIỆN TRONG NGÀY </h3>
			<div class="deals-row">
				@foreach($category as $cate)
				<div class="col-md-{{$cate->cot}} focus-grid"> 
					<a href="products.html" class="wthree-btn" style="color: {{$cate->color}}"> 
						<div class="focus-image"><i class="{{$cate->category_icon}}"></i></div>
						<h4 class="clrchg">{{$cate->name}}</h4> 
					</a>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>  	
		</div>  	
	</div> 
	<!-- //deals --> 
@endsection