var gulp = require('gulp');

var sass = require('gulp-sass');

// gulp.task('sass', function() {

	
// 	return gulp.src('./bootstrap-sass-3.3.7/assets/stylesheets/*.scss')
// 	.pipe(sass())
// 	.pipe(gulp.dest('./css/output'))
// });



gulp.task('sass', function() {

	
	return gulp.src('./css/stylesheets/bootstrap.scss')
	.pipe(sass())
	.pipe(gulp.dest('./css/output'))
});