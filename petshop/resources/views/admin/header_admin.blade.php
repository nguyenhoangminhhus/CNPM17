<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="{{route('Admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>Shoppet Conner</span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				<img src="Admin_asset/images/img.jpg" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Xin chào,</span>
				<h2>John Doe</h2>
			</div>
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- menu trái -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>Danh mục chính</h3>
				<ul class="nav side-menu">
					<li><a href="{{route('Admin')}}"><i class="fa fa-home"></i> Trang chủ Admin <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-category')}}"><i class="fa fa-list"></i> Loại sản phẩm <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-product')}}"><i class="fa fa-product-hunt"></i> Danh sách sản phẩm <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-bill')}}"><i class="fa fa-file"></i> Danh sách hóa đơn <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-sale')}}"><i class="fa fa-bar-chart-o"></i> Danh sách khuyến mãi <span class="fa fa-chevron-right"></span></a></li>

				</ul>
			</div>
			<div class="menu_section">
				<h3>Danh mục phụ</h3>
				<ul class="nav side-menu">
					<li><a href="{{route('list-user')}}"><i class="fa fa-users"></i> Danh sách Tài khoản <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-inbox')}}"><i class="fa fa-envelope-o"></i> Danh sách tin nhắn <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-address')}}"><i class="fa fa-clone"></i> Danh sách địa chỉ <span class="fa fa-chevron-right"></span></a></li>
					<li><a href="{{route('list-slide')}}"><i class="fa fa-sliders"></i> Danh sách slide chạy <span class="fa fa-chevron-right"></span></a></li>
				</ul>
			</div>
		</div>
		<!-- /menu trái -->
	</div>
</div>

<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="images/img.jpg" alt="">John Doe
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="{{route('profile-admin')}}"><i class="fa fa-info pull-right"></i> Thông tin tài khoản</a></li>
						<li><a href="{{route('change-pass')}}"><i class="fa fa-key pull-right"></i> Đổi mật khẩu</a></li>
						<li><a href="{{route('login-admin')}}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
					</ul>
				</li>
				<!-- thông báo tin nhắn -->
				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">6</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
							<a>
								<span class="image"><img src="Admin_asset/images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="Admin_asset/images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="Admin_asset/images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="Admin_asset/images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<div class="text-center">
								<a href="{{route('list-inbox')}}">
									<strong>Xem tất cả tin nhắn</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- /thông báo tin nhắn -->
			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->