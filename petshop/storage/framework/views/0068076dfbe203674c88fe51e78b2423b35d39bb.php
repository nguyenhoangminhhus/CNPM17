<?php $__env->startSection('content'); ?>
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Đăng nhập vào tài khoản của bạn</h3>  
			<div class="login-body">
				<form action="<?php echo e(route('dang-nhap')); ?>" method="post">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<?php if(count($errors)>0): ?>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($err); ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>
					<?php if(Session::has('flag')): ?>
						<div class="alert alert-<?php echo e(Session::get('flag')); ?>"><?php echo e(Session::get('message')); ?></div>
					<?php endif; ?>
					<?php if(session('warning')): ?>
                        <span class="alert alert-warning help-block">
                            <strong><?php echo e(session('warning')); ?></strong>
                        </span>
                    <?php endif; ?>
					<input type="text" class="user" name="account" placeholder="Nhập tài khoản của bạn" required="">
					<input type="password" name="password" class="lock" placeholder="Nhập mật khẩu" required="">
					<input type="submit" value="Đăng nhập">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nhớ mật khẩu</label>
						<div class="forgot">
							<a href="<?php echo e(route('quen-mat-khau')); ?>">Quên mật khẩu?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Bạn chưa có tài khoản? <a href="<?php echo e(route('dang-ky')); ?>">Tạo tài khoản ngay »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Đăng nhập với tài khoản mạng xã hội</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
				</ul> 
			</div>
		</div>
	</div>
	<!-- //login-page --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>