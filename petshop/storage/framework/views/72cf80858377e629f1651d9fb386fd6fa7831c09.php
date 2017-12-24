<?php $__env->startSection('content'); ?>
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
			<div class="carousel-inner" role="listbox">  
				<div class="item active"><!-- First-Slide -->
					<img src="source/images/Anh-bia-dong-vat-01.jpg" alt="" class="img-responsive" />
					<div class="carousel-caption kb_caption kb_caption_right">
						<h3 data-animation="animated flipInX" style="font-style: italic;">Đẹp<span>--</span>Dễ thương</h3>
						<h4 data-animation="animated flipInX">Sale liên tục</h4>
					</div>
				</div>  
				<div class="item"> <!-- Second-Slide -->
					<img src="source/images/hinh-nen-nhung-chu-cun-de-thuong-2.jpg" alt="" class="img-responsive" />
					<div class="carousel-caption kb_caption kb_caption_right">
						<h3 data-animation="animated fadeInDown">Đặt hàng nhanh</h3>
						<h4 data-animation="animated fadeInUp">Giao hàng tới liền</h4>
					</div>
				</div> 
				<div class="item"><!-- Third-Slide -->
					<img src="source/images/3.jpg" alt="" class="img-responsive"/>
					<div class="carousel-caption kb_caption kb_caption_center">
						<h3 data-animation="animated fadeInLeft">Bão Sale</h3>
						<h4 data-animation="animated flipInX">Nhanh tay.nhanh nào....</h4>
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
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
								<?php $__currentLoopData = $sanpham_khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="item">
										
										<div class="glry-w3agile-grids agileits"> 
											<a href="<?php echo e(route('chi-tiet-san-pham',$sp_km->products_id)); ?>"><img src="source/images/<?php echo e($sp_km->image); ?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html"><?php echo e($sp_km->name); ?></a></h4>
												<p><?php echo e($sp_km->description); ?></p>
												<h5><div> <?php if($sp_km->promotion_price!=0): ?>
											<h6><del><?php echo e($sp_km->unit_price); ?></del>  <?php echo e($sp_km->promotion_price); ?> đ</h6> 
												<?php else: ?>

												<span style="font-size: 18px"><?php echo e($sp_km->unit_price); ?> đ</span>
													<?php endif; ?>	</div></h5> 
												<button class="w3ls-cart my-cart-btn" data-id="1" data-name="<?php echo e($sp_km->name); ?>" data-summary="summary 1" data-price="<?php echo e($sp_km->promotion_price); ?>" data-quantity="1" data-image="source/images/<?php echo e($sp_km->image); ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>   
										</div> 
										
										
									</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

							</div>
						</div>
						
					</div>
					<div class="item"><?php echo e($sanpham_khuyenmai->Links()); ?></div>
				</div>  
			</div>  	
		</div>  	
	</div> 
	<!-- //welcome -->
	<!-- add-products -->
	<!-- <div class="add-products"> 
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
	</div> -->
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
				<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-<?php echo e($cate->cot); ?> focus-grid"> 
					<a href="products.html" class="wthree-btn" style="color: <?php echo e($cate->color); ?>"> 
						<div class="focus-image"><i class="<?php echo e($cate->category_icon); ?>"></i></div>
						<h4 class="clrchg"><?php echo e($cate->name); ?></h4> 
					</a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<div class="clearfix"> </div>
			</div>  	
		</div>  	
	</div> 
	<!-- //deals --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>