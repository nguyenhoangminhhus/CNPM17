<?php $__env->startSection('content'); ?>
<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
				<div class="product-top">
					<h4>Sản Phẩm : <?php echo e($loai_sp->name); ?></h4>
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
					<?php $__currentLoopData = $sp_theoloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="products-row">
					
					<div class="col-md-3 product-grids"> 
						<div class="agile-products">
							<div class="new-tag">
							<?php if($sp->promotion_price!=0): ?>
							<h6 style="color: black">%Sale<br></h6>
							<?php endif; ?>
							</div>
							<a href="<?php echo e(route('chi-tiet-san-pham',$sp->products_id)); ?>"><img src="source/images/<?php echo e($sp->image); ?>" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html"><?php echo e($sp->name); ?></a></h5> 
								<?php if($sp->promotion_price!=0): ?>
								<h6><del><?php echo e(number_format($sp->unit_price)); ?></del><?php echo e(number_format($sp->promotion_price)); ?> VNĐ</h6> 
								<?php else: ?>

									<span style="font-size: 18px"><?php echo e(number_format($sp->unit_price)); ?> VNĐ</span>
								<?php endif; ?>	
								<button class="w3ls-cart pw3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="100.00" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
							</div>
						</div> 
					</div>
					
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row"><?php echo e($sp_theoloai->links()); ?></div>
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
					<?php $__currentLoopData = $sp_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag">
								<?php if($sp_k->promotion_price!=0): ?>
								<h6 style="color: black">%Sale<br></h6>
								<?php endif; ?>
							</div>
							<a href="<?php echo e(route('chi-tiet-san-pham',$sp_k->products_id)); ?>"><img src="source/images/<?php echo e($sp_k->image); ?>" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html"><?php echo e($sp_k->name); ?></a></h4>
								<p><?php echo e($sp_k->description); ?></p>
									<h5><div> <?php if($sp_k->promotion_price!=0): ?>
											<h6><del><?php echo e($sp_k->unit_price); ?></del>  <?php echo e($sp_k->promotion_price); ?> đ</h6> 
												<?php else: ?>

												<span style="font-size: 18px"><?php echo e($sp_k->unit_price); ?> đ</span>
												<?php endif; ?>	
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
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>    
			</div>
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>