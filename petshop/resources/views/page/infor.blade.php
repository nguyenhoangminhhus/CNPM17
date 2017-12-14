@extends('master')
@section('content')
	<!-- infor -->
	<div class="infor">	 
		<div class="container">  
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<div class="w3ls-title">
					<h3>Thông tin tài khoản</h3> 
					<a href="edit_infor.html" type="button" class="btn btn-default">Sửa thông tin cá nhân</a>
				</div>
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Thông tin cá nhân <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">Họ tên:</div>
											<div class="col-md-8">alo</div>
										</div>
										<div class="row">
											<div class="col-md-4">Số điện thoại:</div>
											<div class="col-md-8">alo</div>
										</div>
										<div class="row">
											<div class="col-md-4">Email:</div>
											<div class="col-md-8">1234@gmail.com</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> Địa chỉ <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
										</a> 
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">Địa chỉ 1:</div>
											<div class="col-md-8">Hà Nội</div>
										</div>
										<div class="row">
											<div class="col-md-4">Địa chỉ 2:</div>
											<div class="col-md-8">Hà Nội</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Thông tin thẻ tín dụng 1<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">Chủ thẻ:</div>
											<div class="col-md-8">1234@gmail.com</div>
										</div>
										<div class="row">
											<div class="col-md-4">Số thẻ:</div>
											<div class="col-md-8">1234@gmail.com</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> Thông tin thẻ tín dụng 2 <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">Chủ thẻ:</div>
											<div class="col-md-8">1234@gmail.com</div>
										</div>
										<div class="row">
											<div class="col-md-4">Số thẻ:</div>
											<div class="col-md-8">1234@gmail.com</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
			@include('recommendations')
			@include('offers_cards')
		</div>
	</div>
	<!--//infor-->
@endsection