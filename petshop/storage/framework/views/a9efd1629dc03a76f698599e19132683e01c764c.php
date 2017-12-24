<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop Pet Corner / Phụ kiện chó - mèo</title>
	<base href="<?php echo e(asset('')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="shopet corner, phụ kiện chó mèo, shop phụ kiện" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="source/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="source/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
	<link href="source/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
	<link href="source/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="source/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider --> 
	<link href="source/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all">  <!-- dataTable -->  
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="source/css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons 
	<!-- web-fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<!-- web-fonts --> 
	

</head>
<body>
	<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	
	<!-- js --> 
	
	<script src="source/js/jquery-2.2.3.min.js"></script> 
	<script src="source/js/owl.carousel.js"></script>  
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({ 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds 
		  items :4,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [480,2],
		  navigation : true

		}); 
		}); 
	</script>
	<script type="text/javascript" src="source/js/jquery.marquee.min.js"></script>
	<script>
		$('.marquee').marquee({ pauseOnHover: true });
		//@ sourceURL=pen.js
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo1").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items :4,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4],
			navigation : true
			});
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo2").owlCarousel({

			autoPlay: 3000, //Set AutoPlay to 3 seconds

			items :4,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4],
			navigation : true

			});
										
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo3").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds

				items :4,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4],
				navigation : true

			});
										
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo4").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds

				items :4,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4],
				navigation : true

			}); 
		}); 
	</script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo5").owlCarousel({
					 
				autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
				items :4,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4],
				navigation : true
					 
			});
						
		}); 
	</script>
	<script src="source/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {

	        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

	        $('.header-two').scrollToFixed();  
	        // previous summary up the page.

	        var summaries = $('.summary');
	        summaries.each(function(i) {
	        	var summary = $(summaries[i]);
	        	var next = summaries[i + 1];

	        	summary.scrollToFixed({
	        		marginTop: $('.header-two').outerHeight(true) + 10, 
	        		zIndex: 999
	        	});
	        });
	    });
	</script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="source/js/move-top.js"></script>
	<script type="text/javascript" src="source/js/easing.js"></script>	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			
			var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};	
			$().UItoTop({ easingType: 'easeOutQuart' });	
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<script src="source/js/bootstrap.js"></script>	
	<!-- mycart-js -->
	<script type='text/javascript' src="source/js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function () {

			var goToCartIcon = function($addTocartBtn){
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500 , "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				currencySymbol: '$',
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				classProductQuantity: 'my-product-quantity',
				classProductRemove: 'my-product-remove',
				classCheckoutCart: 'my-cart-checkout',
				affixCartIcon: true,
				showCheckoutModal: true,
				numberOfDecimals: 2,
				cartItems: [
				],
				clickOnAddToCart: function($addTocart){
					goToCartIcon($addTocart);
				},
				afterAddOnCart: function(products, totalPrice, totalQuantity) {
					console.log("afterAddOnCart", products, totalPrice, totalQuantity);
				},
				clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
					console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
				},
				checkoutCart: function(products, totalPrice, totalQuantity) {
					var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
					checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
					$.each(products, function(){
						checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
					});
					alert(checkoutString)
					console.log("checking out", products, totalPrice, totalQuantity);
				},
				getDiscountPrice: function(products, totalPrice, totalQuantity) {
					console.log("calculating discount", products, totalPrice, totalQuantity);
					return totalPrice * 0.5;
				}
			});

			$("#addNewProduct").click(function(event) {
				var currentElementNo = $(".row").children().length + 1;
				$(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
			});
		});
	</script>
	<!-- //mycart-js -->	
	<script type="text/javascript">
		$('.dropdown-menu').click(function(event){
			event.stopPropagation();
		})
	</script>
	<!-- countdown.js -->	
	<script src="source/js/jquery.knob.js"></script>
	<script src="source/js/jquery.throttle.js"></script>
	<script src="source/js/jquery.classycountdown.js"></script>
	<script>
		$(document).ready(function() {
			$('#countdown1').ClassyCountdown({
				end: '1388268325',
				now: '1387999995',
				labels: true,
				style: {
					element: "",
					textResponsive: .5,
					days: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#1abc9c",
							lineCap: 'round'
						},
						textCSS: 'font-weight:300; color:#fff;'
					},
					hours: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#05BEF6",
							lineCap: 'round'
						},
						textCSS: ' font-weight:300; color:#fff;'
					},
					minutes: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#8e44ad",
							lineCap: 'round'
						},
						textCSS: ' font-weight:300; color:#fff;'
					},
					seconds: {
						gauge: {
							thickness: .10,
							bgColor: "rgba(0,0,0,0)",
							fgColor: "#f39c12",
							lineCap: 'round'
						},
						textCSS: ' font-weight:300; color:#fff;'
					}

				},
				onEndCallback: function() {
					console.log("Time out!");
				}
			});
		});
	</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="source/js/jquery.menu-aim.js"> </script>
	<script src="source/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<script src="source/js/custom.js"></script>
	<!-- script for tabs -->
	<script type="text/javascript">
		$(function() {
					
			var menu_ul = $('.faq > li > ul'),
			menu_a  = $('.faq > li > a');
						
			menu_ul.hide();
					
			menu_a.click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass('active')) {
				menu_a.removeClass('active');
				menu_ul.filter(':visible').slideUp('normal');
				$(this).addClass('active').next().stop(true,true).slideDown('normal');
			} else {
				$(this).removeClass('active');
				$(this).next().stop(true,true).slideUp('normal');
			}
			});
					
		});
	</script>
	<!-- script for tabs --> 
	<!-- dataTable -->
	<script src="source/js/tablePrice.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#table1').tablePrice({
				space: true,
				initCost: '.def-price',
				amount: '.product-summ',
				totalSelector: '#total-cost span',
				deleteSelector: 'delete-product'
			});
		} );
	</script>
	<script src="source/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table1').DataTable({
				"lengthChange": false,
				"searching" : false,
				"language": {
					"search": "Tìm kiếm:",
					"paginate": {
						"first":      "Đầu tiên",
						"last":       "Cuối cùng",
						"next":       "Trang sau",
						"previous":   "Trang trước "
					},
					"info": "Hiển thị trang _PAGE_ trên _PAGES_",
					"emptyTable":     "Không có dữ liệu để hiển thị",
				}
			});
		} );
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table2').DataTable({
				"lengthChange": false,

				"language": {
					"search": "Tìm kiếm:",
					"paginate": {
						"first":      "Đầu tiên",
						"last":       "Cuối cùng",
						"next":       "Trang sau",
						"previous":   "Trang trước "
					},
					"info": "Hiển thị trang _PAGE_ trên _PAGES_",
					"emptyTable":     "Không có dữ liệu để hiển thị",
				}
			});
		} );
	</script>
	<!-- //dataTable -->
	<!--flex slider-->
	<script defer src="source/js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="source/css/flexslider.css" type="text/css" media="screen" />
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
		  $('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		  });
		});
	</script>
	<!--flex slider-->
	<script src="source/js/imagezoom.js"></script>
	
	
	<!-- //js -->
</body>
</html>