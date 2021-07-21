$(document).ready(function(){
	$('#query').keyup(function(){
		var txt = $(this).val();

		if (txt != '') {

			$('#result').html('');
			$.ajax({
				url: "fetch_data.php",
				method: "post",
				data: {search:txt},
				dataType: "text",
				success:function(data) {

					$('#result').html(data);
					
				}

			});

		}
		
	});

});