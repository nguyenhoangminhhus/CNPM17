@extends('master')
@section('content')
	<!-- infor_bill -->
	<div class="infor_bill">	 
		<div class="container">  
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<div class="w3ls-title">
					<h3>Thông tin đơn hàng</h3> 
				</div>
				<div class="panel-group">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<h4 class="panel-title">
										<a class="pa_italic">
											<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Thông tin khách hàng <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div class="panel-collapse" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-3">Họ tên:</div>
											<div class="col-md-9"><input type="text" name="" value="<?php echo $hoten;?>" readonly></div>
										</div>
										<div class="row">
											<div class="col-md-3">Số điện thoại:</div>
											<div class="col-md-9"><input type="text" name="" value="<?php echo $sdt;?>" readonly></div>
										</div>
										<div class="row">
											<div class="col-md-3">Email:</div>
											<div class="col-md-9"><input type="text" name="" value="<?php echo $mail;?>" readonly></div>
										</div>
										<div class="row">
											<div class="col-md-3">Địa chỉ:</div>
											<div class="col-md-9"><input type="text" name="" value="<?php echo $diachi;?>" readonly></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingThree">
									<h4 class="panel-title">
										<a class="pa_italic">
											<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Danh sách sản phẩm<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<table id="table1" class="display" cellspacing="0" width="100%">
											<thead>
												<tr>
													<td>Sản phẩm</td>
													<td>Đơn giá</td>
													<td>Số lượng</td>
													<td>Tổng</td>
												</tr>
											</thead>
											<tbody>
												@foreach(Cart::content() as $item)
												<tr>
													<td><?php echo $item->name; ?></td>
													<td><?php echo $item->price; ?></td>
													<td><?php echo $item->qty; ?></td>
													<td><?php echo $item->price * $item->qty; ?></td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-group2">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingThree">
									<h4 class="panel-title">
										<a class="pa_italic">
											<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Thông tin khác<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-voucher">
										<div class="row">
											<div class="col-md-12">
												<div class="panel-group">
													<a class="panel-title">Loại hình giao hàng</a>
													<form>
														<div>
															<label><?php echo $phuongthucvanchuyen; ?></label>
														</div>
														<div>
															<label>Trạng thái giao hàng: <?php
																if ($trangthai == 0) {
																	echo "chưa hoàn thành";
																} else{
																	echo "đã hoàn thành";
																}
															 ?></label>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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
														<div class="col-md-4"><?php echo $giamgia; ?> <span>VNĐ</span></div>
													</div>
													<div class="row">
														<div class="col-md-8">Phí giao hàng</div>
														<div class="col-md-4"><?php echo $phigiaohang; ?> <span>VNĐ</span></div>
													</div>
													<div class="row">
														<div class="col-md-8">Tổng giá đơn hàng</div>
														<div class="col-md-4"><?php echo $tonggiadonhang; ?> <span>VNĐ</span></div>
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
			<!-- //collapse --> 
			<?php Cart::destroy(); ?>
			@include('offers_cards')
		</div>
	</div>
	<!--//infor_bill--> 

@endsection