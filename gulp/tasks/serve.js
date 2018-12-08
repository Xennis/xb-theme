/*global require, module, __dirname */
var config = require('../config').serve,
	browserSync = require('browser-sync'),
	url = require('url'),
	proxy = require('proxy-middleware'),
	gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

gulp.task('serve', function() {
	var proxyOptions = url.parse(config.url);
	
	browserSync({
		open: true,
		port: 3000,
		server: {
			baseDir: "./",
			middleware: [proxy(proxyOptions)]
		}
	}, function (err, bs) {
	});
});