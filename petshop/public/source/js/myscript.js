$(document).ready(function () {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$(".updatecart").click(function(e){
		e.preventDefault();
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find(".qty").val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'http://webshop.test/cap-nhat/'+rowid+'/'+qty,
			type:'GET',
			success:function(data) {

					alert("Update Thành Công");
				
			}
		});
	});
});