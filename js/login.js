$(document).ready(function(){
	$("#loginform").submit(function(event) {
		$.ajax({
			url: "login_process.php",
			method: "post",
			data: $(this).serialize(),
			dataType: "json",
			success:function(response)
			{
				if (response.status === 'error') {
					$('#login').html(response.message);
				} else if (response.status === 'success') {
					location.href = response.redirect;
				}
				
			}
		});
	return event.preventDefault();
	});
});
