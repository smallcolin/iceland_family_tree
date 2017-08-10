var gulp = require('gulp'),
    livereload = require('gulp-livereload');

  gulp.task('sass', function() {
    gulp.src('assets/scss/**/*.scss')
    .pipe(livereload());
  });

  gulp.task('php', function() {
    gulp.src('**/*.php')
    .pipe(livereload());
  });

  gulp.task('watch', function() {
    livereload.listen(['start']);
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch('**/*.php', ['php']);
  });

  gulp.task('default', ['sass', 'php', 'watch']);
