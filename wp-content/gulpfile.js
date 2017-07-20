'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function () {
    console.log('running...');
    return gulp.src('themes/**/*.scss')
        .pipe(sass({
            onError: function (err) {
                return notify().write(err);
            }
        }))
        .pipe(gulp.dest('themes'));
});

gulp.task('default', function () {
    gulp.watch('themes/**/*.scss', ['styles']);
});
