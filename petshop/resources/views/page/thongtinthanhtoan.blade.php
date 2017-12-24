@extends('master')
@section('content')

<div class="payment">
	<div class="container">
		<div class="collpse tabs">
			<div class="panel-group">
				<div class="col-md-6 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingThree">
									<h4 class="panel-title">
										<a class="pa_italic">
											<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Thông tin thanh toán<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-payment">
										<div class="row">
											<div class="col-md-12">
												<div class="panel-group">
													<div class="row">
														<div class="col-md-8 total">Tổng giá sản phẩm</div>
														<div class="col-md-4"> <?php echo Cart::subtotal(0,0,'');?><span>VNĐ</span></div>
													</div>
													<div class="row">
														<div class="col-md-8">Mã giảm giá</div>
														<div class="col-md-4"><?php echo $giamgia; ?>
															<span>VNĐ</span>
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">Phí giao hàng</div>
														<div class="col-md-4"><?php echo $phigiaohang; ?> <span>VNĐ</span></div>
													</div>
													<div class="row">
														<div class="col-md-8">Tổng giá đơn hàng</div>
														<div class="col-md-4"><?php echo $tonggiadonhang;?> <span>VNĐ</span></div>
													</div>
													<div class="row">
														<a href="{{route('trang-chu')}}" class="btn btn-success">Back</a>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			</div>
		</div>
	</div>
</div>

@endsection