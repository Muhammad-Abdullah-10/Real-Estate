// Gulp.js configuration
'use strict';

// Gulp and plugins
const { src, dest } = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// Define the CSS task
const cssTask = () => {
    // Source and build folders
    const dir = {
        src: 'src/scss/**/*.scss',
        build: 'Custom/wp-content/themes/RealEstate/inc/css/'
    };

    // Compile SCSS to CSS
    return src(dir.src)
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(dest(dir.build));
};

// Export the CSS task
exports.css = cssTask;
