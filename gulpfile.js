const connect = require('gulp-connect'); //using gulp-connect since livereload is not working properly
const gulp = require('gulp');
const sass = require('gulp-ruby-sass');
const autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', () =>
	sass('styles/style.sass')
		.on('error', sass.logError)
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest(''))
		.pipe(connect.reload()) //adding reload functionality to sass files
);

// Watch
gulp.task('watch', function() {

  // Watch .sass files
  gulp.watch('styles/**/*.sass', ['sass'])

  gulp.watch('*.php', connect.reload) //using connect server instead of livereload

  // Create LiveReload server
  connect.server({
  	livereload: true, //setting default to true
  	port: 8888 //matching port for MAMP
  });

});

// Default task
gulp.task('default', function() {
  gulp.start('sass', 'watch');
});