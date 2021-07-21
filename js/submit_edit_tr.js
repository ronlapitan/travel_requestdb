$(document).ready(function(){
	$("#edit_travelform").submit(function(event) {
		$.ajax({
			url: "submit_edit_tr.php",
			method: "post",
			data: $(this).serialize(),
			dataType: "json",
			success:function(response)
			{
				if (response.status === 'error') {

					$('#edit_message').html(response.message);

				} else if (response.status === 'success') {

					$('#edit_message').html(response.message);

						$("#edit_travelform").each(function() {
							this.reset();
						});

						window.setTimeout(function() {
	  					  window.location.href = 'admin_dashboard.php';
						}, 3000)
				}
				
			}
		});
	return event.preventDefault();
	});

});
