$(document).ready(function(){
	$(".loading").hide();
	$(".loading_details").hide();
	$('.abhijitscript').keyup(function(){
	$(".loading").show();
		var cls=$('.checking').find('option:selected').val();
		var section=$('.section_change').find('option:selected').val();
		var query_string = $.trim($(this).val());
		//alert(query_string.length);
		if(query_string != ''){
			$.ajax({
			type: "POST",
			url: "search.php",
			data: { name:query_string,class:cls,sec:section},
			success: function(data)
			{
				$(".loading").hide();
				$("#student-list").html(data);
			}
		});
		}
	});
	
	
});