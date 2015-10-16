/*global require, module, __dirname */
module.exports = {
	scripts: {
		src: 'src/js/**/*.js',
		dest: 'dist/',
		name: 'xb-wp-theme.js'
	},
	serve: {
		url: 'http://example.org'
	},
	styles: {
		src: 'src/less/*.less',
		dest: 'dist/'
	},
	watch: {
		scripts: 'src/js/**/*.js',
		styles: 'src/less/**/*.less'
	}
};