// Gulp.js configuration
"use strict";

const // ** change these two to yours **
  wordpress_project_name = "Custom",
  theme_name = "RealEstate",
  browserSyncProxy = "http://localhost/Custom/",
  // source and build folders, ** change this to yours **
  dir = {
    src: "src/",
    // build       : `../../vagrant-local/www/${wordpress_project_name}/public_html/wp-content/themes/${theme_name}/`
    build: `../../vagrant-local/www/${wordpress_project_name}/public_html/wp-content/themes/${theme_name}/`,
  },
  // Gulp and plugins
  { src, dest, series, parallel, watch } = require("gulp"),
  noop = require("gulp-noop"),
  newer = require("gulp-newer"),
  imagemin = require("gulp-imagemin"),
  sass = require("gulp-sass"),
  postcss = require("gulp-postcss"),
  deporder = require("gulp-deporder"),
  concat = require("gulp-concat"),
  stripdebug = require("gulp-strip-debug"),
  uglify = require("gulp-uglify"),
  browserSync = require("browser-sync").create(),
  log = require("fancy-log");
  
// For BrowserSync
const reload = (cb) => {
  browserSync.reload();
  cb();
};

// CSS settings
var css = {
  src: dir.src + "scss/style.scss",
  watch: dir.src + "scss/**/*",
  build: dir.build,
  sassOpts: {
    outputStyle: "nested",
    imagePath: images.build,
    precision: 3,
    errLogToConsole: true,
  },
  processors: [
    require("postcss-assets")({
      loadPaths: ["images/"],
      basePath: dir.build,
      baseUrl: "/wp-content/themes/wptheme/",
    }),
    require("autoprefixer")({
      browsers: ["last 2 versions", "> 2%"],
    }),
    require("css-mqpacker"),
    require("cssnano"),
  ],
};
// CSS processing
gulp.task("css", ["images"], () => {
  return gulp
    .src(css.src)
    .pipe(sass(css.sassOpts))
    .pipe(postcss(css.processors))
    .pipe(gulp.dest(css.build))
    .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());
});

// JavaScript settings
const js = {
  src: dir.src + "js/**/*",
  build: dir.build + "js/",
  filename: "scripts.js",
};
// JavaScript processing
gulp.task("js", () => {
  return gulp
    .src(js.src)
    .pipe(deporder())
    .pipe(concat(js.filename))
    .pipe(stripdebug())
    .pipe(uglify())
    .pipe(gulp.dest(js.build))
    .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());
});

// run all tasks
gulp.task("build", ["css", "js"]);
