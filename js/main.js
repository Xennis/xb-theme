$(document).ready(function(){

		fullscreenBackground('#home img', {
			width: 2048,
			height: 1018
		});
	$(window).on('resize', function(){
		fullscreenBackground('#home img', {
			width: 2048,
			height: 1018
		});
	});
	
	animatedNavbar('header nav li a', {
		duration: 200,
		height: 60
	});
	
	scrollTo({
		duration: 1000
	});	
});
