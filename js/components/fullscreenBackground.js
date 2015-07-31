/**
 * Scripts implements the fullscreen background image
 * 
 * @see https://gist.github.com/chrisvanpatten/1511820
 * 
 * @param {string} element Select of the image, i.e. '#myImage'
 * @param {object} options Options
 *		- {number} width Width of the image in pixel
 *		- {number} height Height of the image in pixel
 *	@return {number} Height in pixel
 */
var fullscreenBackground = function(element, options) {
	var element = $(element);

	// Set bg size
	var ratio = options.height / options.width;
	
	// Get browser window size
	var browserwidth = $(window).width();
		
	// Scale the image
    element.width(browserwidth);
    element.height( Math.round(browserwidth * ratio) );

	return element.height();
};