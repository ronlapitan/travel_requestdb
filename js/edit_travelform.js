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

					$('#research_message').html(response.message);

				} else if (response.status === 'success') {

					$('#research_message').html(response.message);

						$("#researchform").each(function() {
							this.reset();
						});

						window.setTimeout(function() {
	  					  window.location.href = './index.php';
						}, 3000)
				}
				
			}
		});
	return event.preventDefault();
	});

});

