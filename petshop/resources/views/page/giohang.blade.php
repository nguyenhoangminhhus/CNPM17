@extends('master')
@section('content')
	<!-- gio hang -->
	<div class="payment giohang">	 
		<div class="container">  
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<div class="w3ls-title">
					<h3>Gi? hàng c?a b?n</h3> 
				</div>
				<div class="panel-group">					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingThree">
									<h4 class="panel-title">
										<a class="pa_italic">
											<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Danh sách s?n ph?m<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<table id="table1" class="display" cellspacing="0" width="100%">
											<thead>
												<tr>
													<td>?nh</td>
													<td>S?n ph?m</td>
													<td>Ðon giá</td>
													<td>S? lu?ng</td>
													<td>T?ng</td>
													<td>Xóa s?n ph?m</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src=""></td>
													<td>Laptop msiiiiiiiiiiiiii</td>
													<td class="def-holder"><span class="def-price">50000000</span> VNÐ</td>
													<td ><input type="text" id="quantity" class="spinner" value="1"/></td>
													<td class="amount-holder"><span class="product-summ"></span> VNÐ</td>
													<td><a href="" class="delete-product">Xóa</a></td>
												</tr>
												<tr>
													<td><img src=""></td>
													<td>Laptop msiiiiiiiiiiiiii</td>
													<td class="def-holder"><span class="def-price">50000000</span> VNÐ</td>
													<td ><input type="text" id="quantity" class="spinner" value="1"/></td>
													<td class="amount-holder"><span class="product-summ"></span> VNÐ</td>
													<td><a href="" class="delete-product">Xóa</a></td>
												</tr>
												<tr>
													<td><img src=""></td>
													<td>Laptop msiiiiiiiiiiiiii</td>
													<td class="def-holder"><span class="def-price">50000000</span> VNÐ</td>
													<td ><input type="text" id="quantity" class="spinner" value="1"/></td>
													<td class="amount-holder"><span class="product-summ"></span> VNÐ</td>
													<td><a href="" class="delete-product">Xóa</a></td>
												</tr>
												<tr>
													<td><img src=""></td>
													<td>Laptop msiiiiiiiiiiiiii</td>
													<td class="def-holder"><span class="def-price">50000000</span> VNÐ</td>
													<td ><input type="text" id="quantity" class="spinner" value="1"/></td>
													<td class="amount-holder"><span class="product-summ"></span> VNÐ</td>
													<td><a href="" class="delete-product">Xóa</a></td>
												</tr>
												<tr>
													<td><img src=""></td>
													<td>Product #2</td>
													<td class="def-holder"><span class="def-price">58</span> VNÐ</td>
													<td><input type="text" class="spinner" value="1"/></td>
													<td class="amount-holder"><span class="product-summ"></span> VNÐ</td>
													<td><a href="" class="delete-product">Xóa</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-12">
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
											<div class="col-md-12" style="margin-top: 2%">
												<div class="panel-group">
													<div class="row">
														<div class="col-md-8 total">T?ng giá s?n ph?m</div>
														<div class="col-md-4"> 100000000<span>VNÐ</span></div>
													</div>
													<button type="button" class="btn btn-primary">Quay l?i</button>
													<button type="button" class="btn btn-success pull-right" style="margin-right: 5%">Thanh toán</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
			<!-- offers-cards --> 

			<div class="w3single-offers offer-bottom"> 
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<h4>Special Gift Cards</h4> 
						<h6>More brands, more ways to shop. <br> Check out these ideal gifts!</h6>
					</div>
				</div>
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
						<h4>Flat $10 Discount</h4> 
						<h6>The best Shopping Offer <br> On Fashion Store</h6>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>


			@include('offers_cards')


			<!-- //offers-cards -->
		</div>
	</div>
	<!--//gio hang--> 
@endsection