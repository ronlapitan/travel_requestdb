$(document).ready(function(){
	$("#researchform").submit(function(event) {
		$.ajax({
			url: "submit_survey.php",
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
	  					  window.location.href = './admin_dashboard.php';
						}, 3000)
				}
				
			}
		});
	return event.preventDefault();
	});

	var hash = document.location.hash;
		var prefix = "tab_";
		if (hash) {
		    $('.nav-tabs a[href="'+hash.replace(prefix,"")+'"]').tab('show');
		} 

		// Change hash for page-reload
		$('.nav-tabs a').on('shown', function (e) {
		    window.location.hash = e.target.hash.replace("#", "#" + prefix);
		});

	$('a[data-toggle="tab"').on('shown.bs.tab', function (e){
		var href = $(e.target).attr('href');
		if (href == '#list') {
			fetch_research_collection();
		}
	});
});

function fetch_research_collection() {
	$.get('research_collection.php', function(content) {
		$('#list').empty().html(content);
	});
}