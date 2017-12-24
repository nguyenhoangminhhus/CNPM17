@extends('master')
@section('content')
	<!-- payment -->
	<div class="payment">	 
		<div class="container">  

			<!-- collapse-tabs -->
			<form action="{{route('dat-hang')}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="collpse tabs">
				<div class="w3ls-title">
					<h3>Thanh toán</h3> 
				</div>
				
				<div class="panel-group">
				
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
													<td class="def-holder"><span class="def-price"><?php echo $item->price; ?></span> VNÐ</td>
													
													<td><input type="text" name="soluong" id="quantity" class="spinner" value="<?php echo $item->qty; ?>"  disabled /></td>
													<td class="amount-holder"><span class="product_sum"></span> VNĐ</td>
													
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<h4 class="panel-title">
										<a class="pa_italic">
											<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Thông tin khách hàng  (Nếu bạn đã đăng nhập hãy bỏ qua phần này) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div class="panel-collapse" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-3">Họ tên:</div>
											<div class="col-md-9"><input type="text" name="hoten"></div>
										</div>
										<div class="row">
											<div class="col-md-3">Số điện thoại:</div>
											<div class="col-md-9"><input type="text" name="phone"></div>
										</div>
										<div class="row">
											<div class="col-md-3">Email:</div>
											<div class="col-md-9"><input type="text" name="email"></div>
										</div>
										<div class="row">
											<div class="col-md-3">Địa chỉ:
										</div>
											<div class="col-md-9">
												<input type="text" name="address">
											</div>
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
											<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Ghi chú<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<input style="width: 100%;" type="text" name="note" />
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
													<div class="panel panel-default">
														<div class="panel-heading">
															<h5 class="panel-title">
																<a data-toggle="collapse" href="#collapse1">Click nếu bạn muốn sử dụng mã giảm giá</a>
															</h5>
														</div>
														<div id="collapse1" class="panel-collapse collapse">
															<input type="text" class="form-control" placeholder="Mã giảm giá" name="saleid">
														
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="panel-group">
													<a class="panel-title">Chọn loại hình giao hàng</a>
													<form>
														<div class="radio">
															<label><input type="radio" name="optradio" checked="checked" value="Giao hàng tiêu chuẩn (Thời gian: 3-5 ngày) - không mất phí giao hàng">Giao hàng tiêu chuẩn (Thời gian: 3-5 ngày) - không mất phí giao hàng</label>
														</div>
														<div class="radio">
															<label><input type="radio" name="optradio" value="Giao hàng nhanh (Thời gian: 1-2 ngày) - phí giao hàng: 30.000 VNĐ">Giao hàng nhanh (Thời gian: 1-2 ngày) - phí giao hàng: 30.000 VNĐ</label>
														</div>
													</form>
												</div>
											</div>
										</div>
										<input type="submit" value="Hoàn thành" class="btn btn-success">
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</div>
			</form>
			<!-- //collapse --> 
			@include('offers_cards')
		</div>
	</div>
	<!--//payment-->
@endsection