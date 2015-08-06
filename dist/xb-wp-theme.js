jQuery(document).ready(function(){

	/**
	 * Checks if the current is the homepage. WordPress adds the page slug to
	 * the body element as class.
	 * 
	 * @returns {Boolean} True, if the current page is the homepage
	 */
	var isHomepage = function() {
		return jQuery('body.home').length > 0;
	};

	var resizeBackground = function() {
		var height = fullscreenBackground('.scaleImage', {
			width: 2048,
			height: 1018
		});
		// For homepage only
		jQuery('body.home .page-header').height(height);
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
	
	// Use scrollTo only on the homepage
	if (isHomepage()) {
		jQuery('a[href^="#"]').LightweightScrollTo({
			offset: 70
		});		
	} else {
		// Rewrite anchors in the navbar, so they are links to the homepage
		jQuery('a[href^="#"]').attr('href', function(index, value) {
				return '/' + value;
		});
	}
});

/**
 * Script implements the animated hover effect of the navbar.
 * 
 * @param {string} element All link selectors, i.e. 'nav li a'
 * @param {object} options Options
 *		- {number} duration Animation time in milliseconds
 *		- {number} height Height of an element in pixel
 */
var animatedNavbar = function(element, options) {
	var element = jQuery(element);
	var height = '-'+options.height+'px';
	
	element.wrapInner('<span class="out"></span>');
	element.each(function() {
		jQuery('<span class="over">' + jQuery(this).text() + '</span>').appendTo(this);
	});

	element.hover(function() {
		jQuery('.out',  this).stop().animate({'top': height}, options.duration); // move down - hide
		jQuery('.over', this).stop().animate({'top': '0px'},  options.duration); // move down - show
	}, function() {
		jQuery('.out',  this).stop().animate({'top': '0px'},  options.duration); // move up - show
		jQuery('.over', this).stop().animate({'top': height}, options.duration); // move up - hide
	});
};
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

	// Set bg size
	var ratio = options.height / options.width;
	
	// Get browser window size
	var browserwidth = jQuery(window).width();
		
	// Scale the image
    element.width(browserwidth);
    element.height( Math.round(browserwidth * ratio) );

	return element.height();
};
/**
 * Script implements the parallax scrolling of the site, which is in this case
 * a simple animated scroll to.
 *
 * @see http://www.abeautifulsite.net/smoothly-scroll-to-an-element-without-a-jquery-plugin-2/
 * 
 * @param {object} options Options
 *		- {number} duration Animation time in milliseconds
 *		- {number} offset Offset in pixel
 *		- {boolean}  updateUrl If true, the hash of the URL gets updated
 */
jQuery.fn.LightweightScrollTo = function(options) {

	options = jQuery.extend({
		offset: 0,
		duration: 1000,
		updateUrl: true
	}, options);
	
	this.on('click', function(event) {
		var anchor = jQuery(this).attr('href');
		var target = jQuery(anchor);
		if (target.length) {
			event.preventDefault();
			jQuery('html, body').animate({
				scrollTop: target.offset().top - options.offset
			}, options.duration, function() {
				if (options.updateUrl) {
					window.location.hash = anchor;					
				}
			});
		}
	});	
};