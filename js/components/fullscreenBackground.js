/**
 * Scripts implements the fullscreen background image
 * 
 * @see https://gist.github.com/chrisvanpatten/1511820
 * 
 * @param {string} element Select of the image, i.e. '#myImage'
 * @param {object} options Options
 *		- {number} width Width of the image in pixel
 *		- {number} height Height of the image in pixel
 */
var fullscreenBackground = function(element, options) {
	var element = $(element);

	// Set bg size
	var ratio = options.height / options.width;
	
	// Get browser window size
	var browserwidth = $(window).width();
	var browserheight = $(window).height();
		
	// Scale the image
//	if ((browserheight/browserwidth) > ratio){
//	    element.height(browserheight);
//	    element.width(browserheight / ratio);
//	} else {
	    element.width(browserwidth);
	    element.height(browserwidth * ratio);
//	}
		
	// Center the image
//	element.css('left', (browserwidth - element.width())/2);
//	element.css('top', (browserheight - element.height())/2);
};