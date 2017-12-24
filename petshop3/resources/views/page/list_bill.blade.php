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
								@foreach($usertran as $item)
									<tr>
										<td><?php echo $item->transaction_id; ?></td>
										<td><?php echo $item->date_oder; ?></td>
										<td><?php echo $item->total; ?></td>
										<td><?php if($item->status == 0) {
											echo "Chưa Hoàn Thành";
										} else{
											echo "Hoàn Thành";
										} ?></td>
									</tr>
								@endforeach
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