$(document).ready(function(){
	$('#username').blur(function() {
		var username = $(this).val();
		$.ajax({
			url: "check_username.php",
			method: "post",
			data: {username:username},
			dataType: "text",
			success:function(html)
			{
				$('#check').html(html);
			}
		});
	});
});