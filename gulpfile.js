//var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
elixir(function(mix) {
	mix.less('app.less');
});
*/

var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

var styleSrc = [
 'resources/assets/scss/**/*.scss'
];

var styleDest = 'public/css';

var scriptSrc = [
 'resources/assets/bower_components/jquery/jquery.js',
 'resources/assets/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
 'resources/assets/bower_components/jquery.easing/js/jquery.easing.js',
 'resources/assets/javascript/main.js'
];

var scriptDest = 'public/js';

gulp.task('scss', function () {
 gulp.src(styleSrc)
     .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
     .pipe(gulp.dest(styleDest));
});

gulp.task('scss:watch', function () {
 gulp.watch(styleSrc, ['scss']);
});

gulp.task('js', function() {
 return gulp.src(scriptSrc)
     .pipe(concat('main.js'))
     .pipe(uglify())
     .pipe(gulp.dest(scriptDest));
});
