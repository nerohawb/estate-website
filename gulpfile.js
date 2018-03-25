const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');

gulp.task('sass', function(){
  return gulp.src(['node_modules/boostrap/scss/boostrap.scss', 'public/scss/*.scss' ])
  .pipe(sass())
  .pipe(gulp.dest('public/css'))
  .pipe(browserSync.stream());
});

gulp.task('js', function() {
  return gulp.src(['node_modules/boostrap/dist/js/boostrap.min.js', 'node_modules/jquery/dist/jquery.min.js',
  'node_modules/popper.js/dist/umd/popper.min.js'])
  .pipe(gulp.dest("public/js"))
  .pipe(browserSync.stream());
});

gulp.task('serve', ['sass'], function(){
  browserSync.init({
    server: "/"
  });
  gulp.watch(['node_modules/boostrap/scss/boostrap.scss', 'src/scss/*.scss'], ['sass']);
  gulp.watch("resources/views/*.blade.php").on('change', browserSync.reload);
});

gulp.task('fonts', function(){
  return gulp.src('node_modules/font-awesome/fonts/*')
  .pipe(gulp.dest("public/fonts"));
});

gulp.task('fa', function(){
  return gulp.src('node_modules/font-awesome/css/font-awesome.min.css')
  .pipe(gulp.dest("public/css"));
});

gulp.task('default', ['js', 'serve', 'fa', 'fonts']);
