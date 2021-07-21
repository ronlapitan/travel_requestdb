$(document).ready(function(){
	$("#tr_form").submit(function(event) {
		$.ajax({
			url: "submit_tr.php",
			method: "post",
			data: $(this).serialize(),
			dataType: "json",
			success:function(response)
			{
				if (response.status === 'error') {

					$('#submit_message').html(response.message);

				} else if (response.status === 'success') {

					$('#submit_message').html(response.message);

						$("#tr_form").each(function() {
							this.reset();
						});

						window.setTimeout(function() {
	  					  window.location.href = './admin_dashboard.php';
						}, 3000)
				}
				
			}
		});
	return event.preventDefault();
	});


});
