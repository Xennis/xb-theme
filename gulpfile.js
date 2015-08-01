var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var rename = require('gulp-rename');
var path = require('path');

// Load plugins
var $ = require('gulp-load-plugins')();

var handleError = function (err) {
    new $.util.log(err);
    $.notify.onError({
        title: err.plugin+' error',
        message: path.basename(err.filename)+" on line "+err.line+":"+err.column,
        sound: false
      })(err);
      this.emit('end');
};

// Compile styles
gulp.task('styles', function () {
    return gulp.src('style/less/main.less')
        .pipe($.less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
            }))
        .on('error', handleError)
		.pipe(rename({
			  suffix: '.min'
		}))
        .pipe(gulp.dest('style/css'))
        .pipe(reload({stream: true}))
        .pipe($.size());
});

// Sync browser
gulp.task('serve', ['styles'], function () {
    browserSync({
        port: 4000,
        server: true,
        open: 'local'
    }, function (err, bs) {
    });
});

// Watch for changes
gulp.task('watch', ['serve'], function () {
    gulp.watch('*.html', reload);
    //gulp.watch('**/*.js', reload);
	gulp.watch('style/less/**/*.less', ['styles']);
});

gulp.task('default', ['watch']);