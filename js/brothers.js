$(document).ready(function() {
						   
$('a.brother_link').click(function() {
		
		var name = $(this).attr('id');
		
		$.post("../php/brothers.php", { key_name: name },
		function(data) {
			var clean = data.substring(1, data.length - 1);
			var info = jQuery.parseJSON(clean);
			$.post('php/bro_info.php', {info: info}, function(data) {
						$('#content').html(data);				   
			});    	
			
		});
		return false;
	});

});