<?php $__env->startSection('content'); ?>

	<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<h3 class="w3ls-title">Tìm Kiếm</h3>
						<h6 class="w3ls-title">Tìm được <?php echo e(count($product)); ?> sản phẩm</h6>
						
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
									<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

									<div class="item">
										
										<div class="glry-w3agile-grids agileits"> 
											<a href="<?php echo e(route('chi-tiet-san-pham',$pro->products_id)); ?>"><img src="source/images/<?php echo e($pro->image); ?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html"><?php echo e($pro->name); ?></a></h4>
												<p><?php echo e($pro->description); ?></p>
												<h5><div> <?php if($pro->promotion_price!=0): ?>
											<h6><del><?php echo e($pro->unit_price); ?></del>  <?php echo e($pro->promotion_price); ?> đ</h6> 
												<?php else: ?>

												<span style="font-size: 18px"><?php echo e($pro->unit_price); ?> đ</span>
													<?php endif; ?>	</div></h5> 
												<button class="w3ls-cart my-cart-btn" data-id="1" data-name="Audio speaker" data-summary="summary 1" data-price="1000000" data-quantity="1" data-image="source/images/e1.png"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ hàng</button>
											</div>   
										</div> 
										
										
									</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  


							</div>
							
						</div>
						
					</div>
					
				</div>  
			</div>  	
		</div>  
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>