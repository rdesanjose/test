var gulp = require('gulp'),
		elixir = require('laravel-elixir'),
		uglify = require('gulp-uglify');

elixir(function(mix) {
  mix.sass('app.scss');
});

// vendor js
gulp.task('vendorjs', function() {
  return gulp.src(['node_modules/owl.carousel2.thumbs/dist/owl.carousel2.thumbs.min.js','node_modules/owl-carousel-2/owl.carousel.min.js'])
    .pipe(gulp.dest('public/js/vendor'));
});

gulp.task('vendor', ['vendorjs']);

// js
gulp.task('js', function() {
  return gulp.src('resources/assets/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('public/js'));
});