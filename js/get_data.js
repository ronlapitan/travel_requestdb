$(document).ready(function(){

	var flag = 0;
	
	$.ajax({

		type: "GET",
		url: "get_data.php",
		data: {
			'offset': 0,
			'limit': 3
		},
		success: function(data){
			$('#database').append(data);

			if (data == '') {

				$('#empty_message').html("<div class='usercheck'><div class='alert alert-info'><p>End of Results</p></div></div>");      

			}

			else {
			
			flag += 1;

			}
		}
	});

	$(window).scroll(function() {

		if($(window).scrollTop() >= $(document).height() - $(window).height()) {
			
				$.ajax({

					type: "GET",
					url: "get_data.php",
					data: {
						'offset': flag,
						'limit': 1
				},
				success: function(data){
					$('#database').append(data);
					
					if (data == '') {

						$('#empty_message').html("<div class='usercheck'><div class='alert alert-info'><p>End of Results</p></div></div>");

					}

					else {
					
					flag += 1;

					}
				}
			});

		}
	});

});