$(document).ready(function(){
	$("#newpass").submit(function(event) {
		$.ajax({
			url: "change_password.php",
			method: "post",
			data: $(this).serialize(),
			dataType: "json",
			success:function(response)
			{
				if (response.status === 'error') {

					$('#success_message').html(response.message);

				} else if (response.status === 'success') {

					$('#success_message').html(response.message);

					window.setTimeout(function() {
  					  window.location.href = 'index.php';
					}, 3000)
				}
				
			}
		});
	return event.preventDefault();
	});
});
