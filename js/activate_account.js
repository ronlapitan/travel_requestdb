$(document).on('submit', '.activate_account', function(e) {
	var form = $(this);
		$.ajax({
			method: 'post',
			url: form.attr('action'),
			data: form.serialize(),
		}).done(function() {
			alert("Account Activated!");
			window.location.replace("./admin_dashboard.php");
		});
	
	e.preventDefault();
});