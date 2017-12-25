<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">Sản phẩm gợi ý </h3> 
				<div id="owl-demo5" class="owl-carousel">
					@foreach($sp_khac as $sp_k)	
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag">
								@if($sp_k->promotion_price!=0)
								<h6 style="color: black">%Sale<br></h6>
								@endif
							</div>
							<a href=""><img src="source/images/{{$sp_k->image}}" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">{{$sp_k->name}}</a></h4>
								<p>{{$sp_k->description}}</p>
									<h5><div> @if($sp_k->promotion_price!=0)
											<h6><del>{{$sp_k->unit_price}}</del>  {{$sp_k->promotion_price}} đ</h6> 
												@else

												<span style="font-size: 18px">{{$sp_k->unit_price}} đ</span>
												@endif	
										</div>
									</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>        
						</div> 
					</div>
					 @endforeach
				</div>    
			</div>
			<!-- //recommendations -->