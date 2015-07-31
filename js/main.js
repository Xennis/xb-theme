$(document).ready(function(){

	var resizeBackground = function() {
		var height = fullscreenBackground('#home img', {
			width: 2048,
			height: 1018
		});
		$('#home').height(height);
	};
		
	$(window).on('resize', function(){
		resizeBackground();
	});
	
	resizeBackground();
	//$(window).on('hashchange', function() {
	//	console.log(window.location.hash)
	//});
	
	animatedNavbar('header nav li a', {
		duration: 200,
		height: 60
	});
	
	scrollTo({
		duration: 1000,
		offset: 70
	});	
});
