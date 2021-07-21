$(document).on('submit', '.delete_tr', function(e) {
	var form = $(this);
	if (confirm('Are you sure you want to delete this item?')) {
		$.ajax({
			method: 'post',
			url: form.attr('action'),
			data: form.serialize(),
		}).done(function(message) {
			alert('Item Deleted!');
			window.location.replace("./search.php");
		});
	}
	e.preventDefault();
});