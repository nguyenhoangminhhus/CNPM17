
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<ul>
					@if(Auth::check())
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>{{Auth::user()->fullname}} <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="{{route('thong-tin-tai-khoan')}}">Quản lý tài khoản </a></li> 
								<li><a href="{{route('danh-sach-don-hang')}}">Đơn hàng của tôi</a></li> 
								<li><a href="{{route('doi-mat-khau')}}">Đổi mật khẩu</a></li>  
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
						<a href="{{route('lien-he')}}" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Vị trí cửa hàng</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="{{route('credit-card')}}" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Thẻ tín dụng</a>
					</li> 
					<li class="dropdown head-dpdn">
						@if(Auth::check())
						<a class="dropdown-toggle" href="{{route('danh-sach-don-hang')}}"><i class="fa fa-trademark" aria-hidden="true"></i> Kiểm tra đơn hàng </a>
						@else
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="#"><i class="fa fa-trademark" aria-hidden="true"></i> Kiểm tra đơn hàng </a>
						<ul class="dropdown-menu">
							<li class="trademark">
								<h5>Nhập mã đơn hàng</h5>
								<form action="{{route('customer-bill')}}" method="POST" class="input-group">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="text" class="form-control" name="checkbill">
									<input type="submit" class="btn btn-primary" value="checkbill">
								</form>
							</li> 
						</ul>
						@endif
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
					<form action="{{route('search')}}" method="get" role="search">
						<input type="search" name="key" placeholder="Tìm kiếm sản phẩm..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="cart"> 
						<a href="{{route('gio-hang')}}"><button class="w3view-cart btn btn-primary">
							<i class="fa fa-cart-arrow-down">
								<span class="badge badge-notify my-cart-badge"><?php echo Cart::count(); ?></span>
							</i>
						</button></a>
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
								<li >
									<a href="{{route('loai-san-pham',$cate->category_id)}}">{{$cate->name}}</a> 
								</li> 
								@endforeach
								
								<li><a href="{{route('so-do-website')}}">Toàn bộ sản phẩm website </a></li>  
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
