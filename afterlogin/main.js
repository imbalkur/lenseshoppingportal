$(document).ready(function(){
	cat();
	product();
	function cat(){
	$.ajax({
		url: "action.php",
		method: "POST",
		data : {category:1},
		success: function(data){
			$("#get_category").html(data);
		}
	})
	}
	
	
	function product(){
	$.ajax({
		url: "action.php",
		method: "POST",
		data : {getProduct:1},
		success: function(data){
			$("#get_product").html(data);
		}
	})
	}
}