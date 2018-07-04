$(document).ready(function(){
	kategori();
	produk();

	function kategori(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {jenis:1},
			success : function(data){
				$('#get_jenis').html(data);
			}
		})
	}

function ras(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{ras:1},
			success	:	function(data){
				$("#get_ras").html(data);
			}
		})
	}

	$("body").delegate(".hewan","click",function(event){
		event.preventDefault();
		$("$get_hewan").html("<h3>Loading...</h3>");
		var jid = $(this).attr('id_jenis');

		$.ajax({
			url: "action.php",
			method: "POST",
			data : {get_selected_jenis:1,jenis : jid},
			success : function(data){
				$('#get_hewan').html(data);
				if ($("body").width() < 480 ) {
					$("body").scrollTop(683);
				}
			}
		})
	})

	$("body").delegate(".ras","click",function(event){
		event.preventDefault();
		$("#get_hewan").html("<h3>Loading...</h3>");
		var rid = $(this).attr('id_jenis');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{selected_ras:1,ras:rid},
			success	:	function(data){
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	})

	$("#login").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url	:	"login.php",
			method:	"POST",
			data	:$("#login").serialize(),
			success	:function(data){
				if(data == "login_success"){
					window.location.href = "profile.php";
				}else if(data == "cart_login"){
					window.location.href = "cart.php";
				}else{
					$("#e_msg").html(data);
					$(".overlay").hide();
				}
			}
		})
	})

	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "register.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data == "register_success") {
					window.location.href = "cart.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})

	$("body").delegate("#hewan","click",function(event){
		var hid = $(this).attr("hid");
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {addToCart:1,proId:pid},
			success : function(data){
				count_item();
				getCartItem();
				$('#product_msg').html(data);
				$('.overlay').hide();
			}
		})
	})

	count_item();
	function count_item(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {count_item:1},
			success : function(data){
				$(".badge").html(data);
			}
		})
	}

	getCartItem();
	function getCartItem(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {Common:1,getCartItem:1},
			success : function(data){
				$("#cart_product").html(data);
			}
		})
	}

	$("body").delegate(".qty","keyup",function(event){
		event.preventDefault();
		var row = $(this).parent().parent();
		var price = row.find('.price').val();
		var qty = row.find('.qty').val();
		if (isNaN(qty)) {
			qty = 1;
		};
		if (qty < 1) {
			qty = 1;
		};
		var total = price * qty;
		row.find('.total').val(total);
		var net_total=0;
		$('.total').each(function(){
			net_total += ($(this).val()-0);
		})
		$('.net_total').html("Total : $ " +net_total);
	})

	$("body").delegate(".remove","click",function(event){
		var remove = $(this).parent().parent().parent();
		var remove_id = remove.find(".remove").attr("remove_id");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{removeItemFromCart:1,rid:remove_id},
			success	:	function(data){
				$("#cart_msg").html(data);
				checkOutDetails();
			}
		})
	})

})