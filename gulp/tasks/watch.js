/*global require, module, __dirname */
var config = require('../config').watch,
	path = require('path'),
	gulp = require('gulp');

gulp.task('watch', ['serve'], function () {
	gulp.watch(config.scripts, ['scripts']);
	gulp.watch(config.styles, ['styles']);
});