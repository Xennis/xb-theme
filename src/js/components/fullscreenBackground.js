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
	var element = jQuery(element);
	
	if (element.length > 0) {
		// Set bg size
		var ratio = options.height / options.width;

		// Scale the image
		var newWidth = Math.round(jQuery(window).width() * ratio);
		var newWidthOffset = element.css('padding-top').replace("px", "");
		element.height(newWidth - newWidthOffset);

		//return element.height()		
	}
};