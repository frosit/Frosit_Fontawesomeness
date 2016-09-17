var gulp = require('gulp'),
    concat = require('gulp-concat'),
    del = require('del'),
    path = require('path'),
    runSequence = require('run-sequence'),
    postcss = require('gulp-postcss'),
    imageop = require('gulp-image-optimization'),
    autoprefixer = require('autoprefixer'),
    gulpif = require('gulp-if'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    fs = require('fs-extra'),
    sprity = require('sprity');

var relPath = "skin/frontend/base/default/frosit/fontawesomeness";
var relFontPath = path.join(relPath, 'fonts');
var bowerDir = "bower_components";


gulp.task('default', function () {
    runSequence(
        'wipe',
        ['foundation', 'ionicons', 'octoicons', 'open-iconic', 'themify-icons']
    )
});

gulp.task('wipe', function () {
    del.sync(relFontPath);
});

gulp.task('font-awesome', function () {
    gulp.src(path.join(bowerDir, 'font-awesome', '/**/*.{css,eot,svg,ttf,woff}'))
        .pipe(gulp.dest(path.join(relFontPath, 'font-awesome')));
});

gulp.task('foundation', function () {
    gulp.src(path.join(bowerDir, 'foundation-icon-fonts', '/**/*.{css,eot,svg,ttf,woff}'))
        .pipe(gulp.dest(path.join(relFontPath, 'foundation-icons')));
});

gulp.task('ionicons', function () {
    gulp.src(path.join(bowerDir, 'ionicons', '/**/*.{css,eot,svg,ttf,woff}'))
        .pipe(gulp.dest(path.join(relFontPath, 'ionicons')));
});

gulp.task('octoicons', function () {
    gulp.src(path.join(bowerDir, 'octoicons', '/**/*.{css,eot,svg,ttf,woff}'))
        .pipe(gulp.dest(path.join(relFontPath, 'octoicons')));
});

gulp.task('open-iconic', function () {
    gulp.src(path.join(bowerDir, 'open-iconic', '/**/*.{css,eot,svg,ttf,woff}'))
        .pipe(gulp.dest(path.join(relFontPath, 'open-iconic')));
});

gulp.task('themify-icons', function () {
    gulp.src(path.join(bowerDir, 'themify-icons', '/**/*.{css,eot,svg,ttf,woff}'))
        .pipe(gulp.dest(path.join(relFontPath, 'themify-icons')));
});