@extends('master')
@section('content')
	<!-- list_bill -->
	<div class="infor">	 
		<div class="container">  
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<div class="w3ls-title">
					<h3>Danh sách đơn hàng</h3> 
				</div>
					<div class="col-sm-12">
						<table id="table2" class="display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Mã đơn hàng</th>
									<th>Ngày đặt hàng</th>
									<th>Tổng tiền</th>
									<th>Trạng thái đơn hàng</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">234</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">567</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
								<tr>
									<td><a href="">123456</a></td>
									<td>22/5/2016</td>
									<td>57000000 VNĐ</td>
									<td>Hoàn thành</td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
			<!-- //collapse --> 
			@include('recommendations')
			@include('offers_cards')
		</div>
	</div>
	<!--//list_bill-->
@endsection