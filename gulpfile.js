

'use strict';


const gulp = require('gulp');
const browserSync = require('browser-sync');
const sass = require('gulp-sass')(require('sass'));

const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const watch = require('gulp-watch');
const rename = require('gulp-rename');
const del = require('del');
const runSequence = require('run-sequence');




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  Paths
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

const paths = {
  html: './src/*.html',
  faq: './src/faq',
  sass: './src/sass/**/*.scss',
  css: './src/css',
  js: './src/js/*.js',
  img: './src/img/*.{png,jpg,gif,svg}',
  fav: './src/images/*/*',
  pic: './src/pic/**/*',
  fonts: './src/fonts/**/*',
  php: './src/php/**/*',
  dist: './dist'
};




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  Development tasks
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Browsers syncronization
//
gulp.task('sync', () => {
  browserSync.init({
  server: {
    baseDir: './src'
  },

  browser: [
    'google chrome'
  ],

  notify: false
});
});


//
// Generating CSS from SASS files
//
gulp.task('css', () => {
  return gulp.src(paths.sass)
    .pipe(sass({

      includePaths: [
        'node_modules/susy/sass',
        'node_modules/sass-mq'
      ],

      outputStyle: 'expanded'

    }).on('error', sass.logError))

    .pipe(autoprefixer({
      browsers: ['> 0.01% in RU'],
      cascade: false,
      remove: false
    }))

    .pipe(cleanCSS())

    .pipe(rename('styles.css'))

    .pipe(gulp.dest(paths.css))

    .pipe(browserSync.stream());
});




/*

gulp.task('watch', ['sync', 'css'], () => {
  watch(paths.sass, () => {
  gulp.start('css');
});

watch(paths.html, () => {
  browserSync.reload();
});

watch(paths.js, () => {
  browserSync.reload();
});

watch(paths.img, () => {
  browserSync.reload();
});

watch(paths.pic, () => {
  browserSync.reload();
});
});
*/




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  Distribution tasks
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Process CSS-files
//
gulp.task('dist-css', () => {
  return gulp.src(paths.sass)
    .pipe(sass({

      includePaths: [
        'node_modules/susy/sass',
        'node_modules/sass-mq'
      ],

      outputStyle: 'expanded'

    }).on('error', sass.logError))

    .pipe(autoprefixer({
      browsers: ['> 0.01% in RU'],
      cascade: false,
      remove: false
    }))

    .pipe(cleanCSS())

    .pipe(rename('styles.css'))

    .pipe(gulp.dest(paths.dist + '/css'));
});


//
// Process JS-files
//
gulp.task('dist-js', () => {
  return gulp.src(paths.js)
    .pipe(uglify())
    .pipe(gulp.dest(paths.dist + '/js'));
});


//
// Move everything else that don't need to be processed
//
gulp.task('dist-move', () => {
  return gulp.src([paths.faq, paths.html, paths.img, paths.fav, paths.pic, paths.fonts, paths.php], { base: 'src' })
    .pipe(gulp.dest(paths.dist));
});


//
// Clean the destination folder
//
gulp.task('dist-clean', () => {
  return del([
    paths.dist + '/**/*'
  ]);
});


gulp.task('dist', 
  gulp.series( 'dist-clean', 'dist-move', 'dist-css', 'dist-js' )
);
