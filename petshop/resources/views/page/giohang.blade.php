@extends('master')
@section('content')
	<!-- gio hang -->
	<div class="payment giohang">	 
		<div class="container">  
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<div class="w3ls-title">
					<h3>Giỏ Hàng Của Bạn</h3> 
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
									
									@if(Session::get('flash_message'))
										<div class="panel-body">
											{!! Session::get('flash_message') !!}
										</div>
									@endif
									
									<div class="panel-body">
										<form action="" method="POST">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<table id="table1" class="display" cellspacing="0" width="100%">
											<thead>
												<tr>
													<td>Ảnh</td>
													<td>Sản phẩm</td>
													<td>Ðơn giá</td>
													<td>số lượng</td>
													<td>Tổng</td>
													<td>Xóa sản phẩm</td>
													<td>Cập Nhật Sản Phẩm</td>
												</tr>
											</thead>
											<tbody>
												@foreach($content as $item)
												<tr>
													<td><img height="50" width="40" src="source/images/<?php echo $item->options->img; ?>"></td>
													<td><?php echo $item->name; ?></td>
													<td class="def-holder"><span class="def-price"><?php echo $item->price; ?></span> VNÐ</td>
													<td >
														
														<input type="number" name="soluong" id="quantity" class="spinner qty" value="<?php echo $item->qty; ?>"/>
														
														
													</td>
													
													<td class="amount-holder"><span><?php echo $item->price*$item->qty; ?></span> VNÐ</td>
													<td><a class="btn btn-danger" href="{{route('xoa-sp-giohang',$item->rowId)}}">Xóa</a></td>
													<td><a class="btn btn-primary updatecart" id="<?php echo $item->rowId; ?>" href="#">Update</a></td>
												</tr>
												@endforeach
											</tbody>
										</table>
										
									</form>
									<p>Khi thay đổi số lượng sp hãy click update</p>
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
														<div class="col-md-8 total">Tổng Giá Sản Phẩm</div>
														<div class="col-md-4"><?php echo Cart::subtotal(); ?><span> VNÐ</span></div>
													</div>
													<a class="btn btn-primary" style="margin-left: 5%" href="{{route('trang-chu')}}">Back</a>
													
													<a class="btn btn-success pull-right" style="margin-right: 5%" href="{{route('thanh-toan')}}">Thanh toán</a>
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