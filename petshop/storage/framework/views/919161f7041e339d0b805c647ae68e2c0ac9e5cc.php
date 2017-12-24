<?php $__env->startSection('content'); ?>
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Tạo tài khoản của bạn</h3>  
			<div class="login-body">
				<form action="<?php echo e(route('dang-ky')); ?>" method="post">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<?php if(count($errors)>0): ?>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($err); ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>
					<?php if(Session::has('thanhcong')): ?>
						<div class="alert alert-success"><?php echo e(Session::get('thanhcong')); ?></div>
					<?php endif; ?>
					<input type="text" class="user" name="fullname" placeholder="Nhập tên của bạn" required="">
					<input type="text" class="user" name="account" placeholder="Nhập tên tài khoản" required="">
					<input type="text" class="user" name="email" placeholder="Nhập email của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu" required="">
					<input type="password" name="re_password" class="lock" placeholder="Nhập lại mật khẩu" required="">
					<input type="submit" value="Đăng Ký ">
					<div class="forgot-grid">
						<div class="forgot">
							<a href="<?php echo e(route('quen-mat-khau')); ?>">Quên mật khẩu?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6>Bạn đã có tài khoản? <a href="<?php echo e(route('dang-nhap')); ?>">Đăng nhập ngay »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>