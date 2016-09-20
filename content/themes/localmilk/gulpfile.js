/*!
 * gulpjs file
 *
 * // First make sure you have gulp installed hlobally on your machine
 * $ npm install gulp -g
 *
 * // The to use gulp on this project, run the following command (without the $)
 * $ npm install gulp gulp-ruby-sass gulp-autoprefixer gulp-notify gulp-livereload --save-dev
 *
 * // You can then run the the following two commands to either compile or watch for changes
 * $ gulp
 * $ gulp watch
 *
 * Feel free to add whatever gulp plugins you want
 * Gulp watch with Livereload is really something!
 */

// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    livereload = require('gulp-livereload'),
    cssnano = require('gulp-cssnano'),
    cache = require('gulp-cache'),
    imagemin = require('gulp-imagemin'),
    del = require('del'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename');

var paths = {
  styles: [

    //'./node_modules/foundation-sites/scss/**/*',
    './_static/styles/style.scss'
  ],
  scripts: [
    './node_modules/foundation-sites/dist/foundation.min.js',
    './node_modules/foundation-sites/dist/plugins/foundation.responsiveToggle.js',
    './node_modules/foundation-sites/dist/plugins/foundation.util.mediaQuery.js',
    './node_modules/foundation-sites/vendor/modernizr/modernizr.js',
    './node_modules/isotope-layout/dist/isotope.pkgd.js',
    './_static/js/main.js'
    //'./node_modules/foundation-sites/dist/plugins/foundation.util.triggers.js',
    //'./node_modules/foundation-sites/dist/plugins/foundation.util.motion.js'
    //'./wp-content/themes/'+ theme + '/js/original/*.js'
  ],
  images: '../../uploads/**/*'

};
// Styles
gulp.task('styles', function() {
    return gulp.src(paths.styles)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(cssnano())
        .pipe(gulp.dest(''))
        .pipe(notify({ message: 'Styles task complete' }));
});
//Scripts
gulp.task('scripts', function () {
  return gulp.src(paths.scripts)
    //.pipe(jshint())
    //.pipe(jshint.reporter('default'))
    //.pipe(concat('main.js'))
    .pipe(gulp.dest('./_static/js/'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./_static/js/'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

//Images
gulp.task('uploads', function() {
  return gulp.src(paths.images)
    .pipe(cache(imagemin({ optimizationLevel: 7, progressive: true, interlaced: true })))
    .pipe(gulp.dest('./../uploads/'))
    .pipe(notify({ message: 'Images task complete' }));
});

// Default Task
gulp.task('default', function() {
    gulp.start('styles', 'scripts', 'uploads');
});


// Watch
gulp.task('watch', function() {

    // Watch .scss files
    gulp.watch('_static/styles/**/*.scss', ['styles']);

    // Create LiveReload server
    livereload.listen();

    // Watch any files in _static/, reload on change
    gulp.watch(['_static/**']).on('change', livereload.changed);
});
