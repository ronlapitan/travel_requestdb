$(document).ready(function(){
	$('#username').blur(function() {
		var username = $(this).val();
		$.ajax({
			url: "username_reset_password.php",
			method: "post",
			data: {username:username},
			dataType: "text",
			success:function(html)
			{
				$('#availability').html(html);
			}
		});
	});
});