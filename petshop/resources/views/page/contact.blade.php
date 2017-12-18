@extends('master')
@section('content')
	<!-- contact-page -->
	<div class="contact">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Liên Hệ</h3>  
			<div class="map-info">
				<div class="col-md-6 map-grids">
					<h4>Địa chỉ Shopet Corner chi nhánh 1</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2410721907654!2d105.80324831535897!3d21.02303799334854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5d5161f909%3A0x4dafaf500ce22be3!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBOZ2_huqFpIHRoxrDGoW5n!5e0!3m2!1svi!2s!4v1513600575433"></iframe>
				</div>
				<div class="col-md-6 map-grids">
					<h4>Địa chỉ Shopet Corner chi nhánh 2</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.2965472280997!2d105.81748817923065!3d20.985172401279932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aced68f8df2f%3A0x806e2435a29b641e!2zMzU4IELDuWkgWMawxqFuZyBUcuG6oWNoLCBLaMawxqFuZyDEkMOsbmgsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1513411527183"></iframe>
				</div>   
				<div class="col-md-6 map-grids">
					<h4>Địa chỉ Shopet Corner chi nhánh 3</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4851.135123262741!2d105.86847248902144!3d58.25136049196456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5cf6e6f5eed7e5eb%3A0xfec064728556bbad!2sTokma%2C+Irkutsk+Oblast%2C+Russia%2C+666639!5e0!3m2!1sen!2sin!4v1470650971228"></iframe>
				</div>   
				<div class="col-md-6 map-grids">
					<h4>Địa chỉ Shopet Corner chi nhánh 4</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen=""></iframe>
				</div> 
				<div class="clearfix"> </div>
			</div>  
			<div class="contact-form-row">
				<h3 class="w3ls-title w3ls-title1">Gửi tin nhắn cho chúng tôi</h3>  
				<div class="col-md-7 contact-left">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Tên của bạn" required="">
						<input class="email" type="text" name="Email" placeholder="Email của bạn" required="">
						<textarea placeholder="Tin nhắn" name="Message" required=""></textarea>
						<input type="submit" value="GỬI">
					</form>
				</div> 
				<div class="col-md-4 contact-right">
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Quản lý đơn đặt hàng của bạn <br>Dễ dàng theo dõi đơn đặt hàng & trả về </p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row cnt-w3agile-row-mdl">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-bell" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Thông báo <br>Nhận thông báo có liên quan & giới thiệu</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>Yêu cầu<br> Với mong muốn, nhận xét, đánh giá</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact-page --> 
@endsection