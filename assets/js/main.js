$(document).ready(function() {
	// Plugin
	$('input[name="team_name"]').blur(function(){ 
		var name = $(this).val();
		$.ajax({
			type: 'POST',
			//url: base_URL+'admin-cp/'+module+'/check_name/',
			url: 'check_name',
			data: 'ajax=true&team_name='+name,
			datatype: "JSON",
			async: false,
			success: function(data){
				var msg = $.parseJSON(data);
				if (msg.result == 1) {
					$('.message').html('<h2 class="text-danger">'+ msg.text +'</h2>').fadeIn('fast');
					$('input[type="submit"]').prop('disabled',true);
					$('.team-name-button').click();
					return false;
				} 
				if (msg.result == 0) {
					$('.message').empty();
					$('input[type="submit"]').removeAttr('disabled');
					return false;
				} 
			},
			error: function (request,setting){
			}
		});
	});

	// Button Download
	$('a.dl-btn').click(function() {
		var img = $('.dl-img').attr('src');
		//alert(img);
		//return false;
		$(this).attr({target: '_blank', href  : img});
	});
});