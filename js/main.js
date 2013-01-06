$(document).ready(function() {
	//Load home page					   
	$('.home').click(function() {
		$('#content').load('pages/home.html');
		$(".about, .brothers, .photos, .contact").parents().removeClass("current");
		$(this).parents().addClass("current");
	});
	
	//Load about page
	$('.about').click(function() {
		$('#content').load('pages/about.html');
		$(".home, .brothers, .photos, .contact").parents().removeClass("current");
		$(this).parents().addClass("current");
	});
	
	//Load brothers page
	$('.brothers').click(function() {
		$('#content').load('pages/brothers.html');
		$(".home, .about, .photos, .contact").parents().removeClass("current");
		$(this).parents().addClass("current");
	});
	
	//Load photos page
	$('.photos').click(function() {
		$('#content').load('pages/photos.html');
		$(".home, .brothers, .about, .contact").parents().removeClass("current");
		$(this).parents().addClass("current");
	});
	
	//Load contact page
	$('.contact').click(function() {
		$('#content').load('pages/contact.html');
		$(".home, .brothers, .photos, .about").parents().removeClass("current");
		$(this).parents().addClass("current");
	});
	
});