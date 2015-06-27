// var elixir = require('laravel-elixir');

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

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');
var uglify = require("gulp-uglify");
var minifyCss = require('gulp-minify-css');

gulp.task('vendor', function () {
  gulp.src(['./lib/js/jquery.js','./lib/js/**/*.js'])
    .pipe(concat('vendor.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./public/js'));
});

gulp.task('vendorCss', function () {
  gulp.src('./sass/lib/**/*.css')
    .pipe(concatCss('vendor.css'))
    .pipe(minifyCss())
    .pipe(gulp.dest('./public/css'));
});
 
gulp.task('sass', function () {
  gulp.src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCss())
    .pipe(gulp.dest('./public/css'));
});

gulp.task('vendor:watch', function () {
  gulp.watch('./lib/js/**/*.js', ['vendor']);
}); 

gulp.task('vendorCss:watch', function () {
  gulp.watch('./sass/lib/**/*.js', ['vendorCss']);
}); 

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'vendor', 'vendorCss', 
  'sass:watch', 'vendor:watch', 'vendorCss:watch']);

// elixir(function(mix) {
//     mix.less('app.less');
// });

// elixir(function(mix) {
//     mix.task('sass', './sass/*.scss');
//     mix.task('vendor', './lib/js/**/*.js');
//     mix.task('vendorCss', './sass/lib/**/*.js');
// });
