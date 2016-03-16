var gulp = require('gulp'),
    sass = require('gulp-sass'),
    minify = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename');

var path = {

 'resources': {
  'sass': './resources/assets/sass'
 },
 'public': {
  'css': './public/assets/css'
 },
 'sass': './resources/assets/sass/**/*.scss'
};

// knacss compilation

gulp.task('knacss', function() {
 return gulp.src(path.resources.sass + '/knacss/sass/knacss.scss')
     .pipe(sass())
     .pipe(minify())
     .pipe(rename({suffix: '.min'}))
     .pipe(gulp.dest(path.public.css));
});

gulp.task('appCss', function() {
 return gulp.src(path.resources.sass + '/app.scss')
     .pipe(sass())
     .pipe(minify())
     .pipe(rename({suffix: '.min'}))
     .pipe(gulp.dest(path.public.css));
});

// watch

gulp.task('watch', function() {
 gulp.watch(path.sass, ['knacss', 'appCss']);
});

gulp.task('default', ['watch']);