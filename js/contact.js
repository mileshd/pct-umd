$('#contact').submit(function() {
		
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val()
		var category = $('select.contact option:selected').val()
		var message = $('#message').val()
		
		$.post("contact.php", { name: name, email: email, subject: subject, category: category, message: message  },
   		function(data) {
     		$('#name').prepend("<div style='color: red;'>" + data + "</div>");
			return false;
    	});		
		
});