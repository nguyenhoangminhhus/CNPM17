
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<ul>
					@if(Auth::check())
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>{{Auth::user()->fullname}} <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="infor.html">Quản lý tài khoản </a></li> 
								<li><a href="signup.html">Đơn hàng của tôi</a></li> 
								<li><a href="change_pass.html">Đổi mật khẩu</a></li>  
								<li><a href="{{route('dang-xuat')}}">Đăng xuất</a></li> 
							</ul> 
						</li>
					@else
						<li class="dropdown head-dpdn">
							Chưa có tài khoản ? 
							<a href="{{route('dang-ky')}}" class="dropdown-toggle"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký ngay</a>
						</li> 
						<li class="dropdown head-dpdn hide1">
							//
						</li> 
						<li class="dropdown head-dpdn">
							Thành viên cũ ? 
							<a href="{{route('dang-nhap')}}" class="dropdown-toggle"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
						</li> 
					@endif
				</ul>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Vị trí cửa hàng</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Thẻ tín dụng</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="#"><i class="fa fa-trademark" aria-hidden="true"></i> Kiểm tra đơn hàng </a>
						<ul class="dropdown-menu">
							<li class="trademark">
								<h5>Nhập email muốn kiểm tra</h5>
								<form class="input-group">
									<input type="email" class="form-control" placeholder="Email">
									<span type="submit" class="btn input-group-addon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</form>
							</li> 
						</ul> 
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="{{route('trang-chu')}}"><span>S</span>hopet<i> Corner</i></a></h1>
					<h6>Cửa hàng của bạn. Địa điểm của bạn</h6> 
				</div>	
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Tìm kiếm sản phẩm..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="cart"> 
						<button class="w3view-cart my-cart-icon" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"><span class="badge badge-notify my-cart-badge"></span></i></button>
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Sản phẩm</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="{{route('khuyen-mai')}}">Khuyến mãi</a></li>
								@foreach($category as $cate)
								<li class="has-children">
									<a href="#">{{$cate->name}}</a> 
								</li> <!-- .has-children -->
								@endforeach
								<li><a href="sitemap.html">Toàn bộ sản phẩm website </a></li>  
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				<div class="move-text">
					<div class="marquee"><a href="{{route('khuyen-mai')}}"> Bộ sưu tập mới có tại đây...... <span>Giảm 10% tất cả sản phẩm | Không có phụ phí </span> <span> Thử vận chuyển miễn phí trong 15 ngày với số lần không giới hạn</span></a></div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
