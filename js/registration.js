$(document).ready(function(){
	$("#regform").submit(function(event) {
		$.ajax({
			url: "registration_process.php",
			method: "post",
			data: $(this).serialize(),
			dataType: "json",
			success:function(response)
			{
				if (response.status === 'error') {

					$('#reg_message').html(response.message);

				} else if (response.status === 'success') {

					$('#reg_message').html(response.message);

					window.setTimeout(function() {
  					  window.location.href = 'index.php';
					}, 3000)
				}
				
			}
		});
	return event.preventDefault();
	});
});
