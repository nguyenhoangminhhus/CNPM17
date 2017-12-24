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
							<a href=""><img src="source/images/<?php echo e($sp_k->image); ?>" alt="img"></a>
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