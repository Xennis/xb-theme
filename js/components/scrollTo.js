/**
 * Script implements the parallax scrolling of the site, which is in this case
 * a simple animated scroll to.
 *
 * @see http://www.abeautifulsite.net/smoothly-scroll-to-an-element-without-a-jquery-plugin-2/
 * 
 * @param {object} options Options
 *		- {number} duration Animation time in milliseconds
 */
var scrollTo = function(options) {
	$('a[href^="#"]').on('click', function(event) {
		var target = $( $(this).attr('href') );
		if (target.length) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, options.duration);
		}
	});
};