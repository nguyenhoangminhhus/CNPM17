
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>Giao Hàng Miễn Phí</h4>
						<p>Mọi đơn hàng trên 180000 quý khách sẽ được giao hàng hoàn toàn miễn phí </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>Chăm Sóc Khách Hàng</h4>
						<p> Mr.Hùng: 0972479395 </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>Chất Lượng Sản Phẩm</h4>
						<p> Chúng tôi luôn cố gắng đi đầu về chất lượng sản phẩm </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Giữ liên lạc</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
				</ul> 
				<ul class="apps"> 
					<li><h4>Tải ứng dụng của chúng tôi: </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Đăng ký email và nhận mã giảm giá 25% !</h4>  
				<form action="{{route('emailsale')}}" method="post"> 
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
					<input type="text" name="email" placeholder="Nhập Email Của Bạn..." required="">
					<input type="submit" value="Đăng Ký">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="{{route('trang-chu')}}"><span>S</span>hopet<i> Corner</i></a></h2>
						<h6>Cửa hàng của bạn. Địa điểm của bạn.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 281 Trương Định-Hai Bà Trưng-Hà Nội.</li>
						<li><i class="fa fa-mobile"></i> 0972479395 </li>
						<li><i class="fa fa-phone"></i> 02431556222 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> meowcorner@gmail.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-3 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="{{route('thong-tin')}}">Về chúng tôi</a></li>

							<li><a href="{{route('dich-vu')}}">Địa điểm mua sắm</a></li>  

							<li><a href="{{route('dich-vu')}}">Marketplace</a></li>  

							<li><a href="{{route('gia-tri-cot-loi')}}">Giá trị cốt lõi</a></li>  
							<li><a href="{{route('chinh-sach-bao-mat')}}">Chính sách bảo mật</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grids">
						<h3>Dịch vụ</h3>
						<ul>
							<li><a href="{{route('lien-he')}}">Liên hệ với chúng tôi</a></li>
							<li><a href="{{route('giup-do')}}">Hướng dẫn</a></li>
							<li><a href="{{route('so-do-website')}}">Sơ đồ website</a></li>
						</ul> 
					</div>
					<div class="col-md-6 footer-grids">
						<h3>Phương thức thanh toán</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Thanh toán trực tuyến</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Thanh toán khi giao hàng</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Thẻ tín dụng / ghi nợ</li>
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 Shopet Corner . All rights reserved</p>
		</div>
	</div> 
