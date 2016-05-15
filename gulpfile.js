const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const babel = require('gulp-babel');
 
gulp.task('javascripts', function() {
  gulp.src('src/js/app.js')
  .pipe(babel({
    presets: ['es2015']
  }))
  .pipe(gulp.dest('./js/'));
});

gulp.task('styles', function() {
  gulp.src('src/scss/main.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(autoprefixer('last 2 versions'))
  .pipe(gulp.dest('./css/'));
});

gulp.task('minify-css', function() {
  gulp.src('css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./css/'));
});

gulp.task('default',function() {
  gulp.watch('src/scss/**/*.scss',['styles']);
  gulp.watch('css/main.css',['minify-css']);
  gulp.watch('src/js/app.js',['javascripts']);
});
