jQuery(document).ready(function(){

	var resizeBackground = function() {
		var height = fullscreenBackground('.scaleImage', {
			width: 2048,
			height: 1018
		});
		jQuery('#home').height(height);
	};
		
	jQuery(window).on('resize', function(){
		resizeBackground();
	});
	
	resizeBackground();
	//$(window).on('hashchange', function() {
	//	console.log(window.location.hash)
	//});
	
	animatedNavbar('header .menu-primary-menu-container li a', {
		duration: 200,
		height: 60
	});
	
	// Use scrollTo only on the home page
	if (window.location.pathname === '/') {
		scrollTo({
			duration: 1000,
			offset: 70
		});
	}
});
