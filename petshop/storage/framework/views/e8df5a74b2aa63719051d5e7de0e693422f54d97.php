<?php $__env->startSection('content'); ?>
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Quên mật khẩu</h3>  
			<div class="login-body">
				<form action="#" method="post">
					<input type="text" class="user" name="fullname" placeholder="Nhập tên tài khoản của bạn" required="">
					<input type="text" class="user" name="email" placeholder="Nhập email tương ứng" required="">
					<input type="submit" value="Đồng ý ">
				</form>
			</div>  
			<h6> Bạn chưa có tài khoản? <a href="<?php echo e(route('dang-ky')); ?>">Tạo tài khoản ngay »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>