// Gulp.js configuration
'use strict';

// Gulp and plugins
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));


function compileSass() {
    return gulp.src('inc/scss/**/*.scss') // Path to your SCSS files
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('inc/css')); // Output directory for CSS files
  }
  gulp.task('sass', compileSass);
  
  function watchSass() {
    gulp.watch('inc/scss/**/*.scss', compileSass);
  }
  gulp.task('watch', watchSass);