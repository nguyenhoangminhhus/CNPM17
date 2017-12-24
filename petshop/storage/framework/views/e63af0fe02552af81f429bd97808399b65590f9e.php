<?php $__env->startSection('content'); ?>
	<!-- site map -->
	<div class="sitemap">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sơ đồ website</h3>
			<div class="sitemap-row"> 
				<nav class="sitemap-tabs"> 
					<div  id="myNavbar">
						<ul> 
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="#" style="color: <?php echo e($cate->color); ?>; border-color: <?php echo e($cate->color); ?>"><i class="<?php echo e($cate->category_icon); ?>"></i> <?php echo e($cate->name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul> 
					</div>
				</nav>	
			</div>
			
			<div class="sitemap-row2  sitemap-text"> 
				<h3 class="w3sitemap-title"><i class="fa fa-gears"></i>Dịch vụ shoppet Conner</h3>  
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="<?php echo e(route('dich-vu')); ?>">Dịch vụ</a></li> 
						<li><a href="<?php echo e(route('gia-tri-cot-loi')); ?>">Giá trị cốt lõi</a></li>
						<li><a href="<?php echo e(route('chinh-sach-bao-mat')); ?>">Chính sách bảo mật</a></li>  
					</ul>
				</div>
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="<?php echo e(route('thong-tin')); ?>">Thông tin</a></li> 
						<li><a href="<?php echo e(route('lien-he')); ?>">Liên hệ</a></li>  
						<li><a href="<?php echo e(route('dang-nhap')); ?>">Đăng nhập</a></li>  
					</ul>
				</div>
				<div class="col-md-4 sitemap-text-grids">
					<ul>  
						<li><a href="<?php echo e(route('dang-ky')); ?>">Đăng ký</a></li>  
						<li><a href="<?php echo e(route('giup-do')); ?>">Giúp đỡ</a></li>  
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //site map -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>