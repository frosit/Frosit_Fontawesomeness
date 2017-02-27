/**
 * Frosit Font Awesomeness
 *
 * Author: Fabio Ros - FROSIT
 */

/**
 * Loading dependency's
 * @todo clean unused
 */
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
var relFontPath = path.join(relPath, 'fontsets');
var bowerDir = "bower_components";

/**
 * Wipe all fonts and rebuild fontset directory
 */
gulp.task('default', function () {
    runSequence(
        'wipe',
        ['font-awesome', 'foundation', 'ionicons', 'octicons', 'open-iconic', 'themify-icons']
    )
});

/**
 * Wipe fontset directory
 */
gulp.task('wipe', function () {
    del.sync(relFontPath);
});

/**
 * Font Awesome
 */
gulp.task('font-awesome', function () {
    gulp.src(path.join(bowerDir, 'font-awesome', '/**/*.{css,eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'font-awesome')));
});

gulp.task('material-design', function () {
    gulp.src(path.join(bowerDir, 'material-design-icons/iconfont', '/**/*.{css,eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'material-design')));
    gulp.src(path.join(bowerDir, 'material-design/material-icons.css'))
        .pipe(concat("material-icons.min.css"))
        .pipe(cleanCSS({keepSpecialComments: 0}))
        .pipe(gulp.dest(path.join(relFontPath, 'material-design')));
});

/**
 * Foundation Icons
 */
gulp.task('foundation', function () {
    gulp.src(path.join(bowerDir, 'foundation-icon-fonts', '/*.{css,eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'foundation-icons')));
    gulp.src(path.join(bowerDir, 'foundation-icon-fonts/foundation-icons.css'))
        .pipe(concat("foundation-icons.min.css"))
        .pipe(cleanCSS({keepSpecialComments: 0}))
        .pipe(gulp.dest(path.join(relFontPath, 'foundation-icons')));
});

/**
 * Ion Icons
 * @todo make one-liner
 */
gulp.task('ionicons', function () {
    gulp.src(path.join(bowerDir, 'ionicons/fonts', '/*.{eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'ionicons/fonts')));
    gulp.src(path.join(bowerDir, 'ionicons/css', '/*.css'))
        .pipe(gulp.dest(path.join(relFontPath, 'ionicons/css')));


});

/**
 * OctIcons
 */
gulp.task('octicons', function () {
    gulp.src(path.join(bowerDir, 'octicons/build/font', '/**/*.{css,eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'octicons')));
});

/**
 * Open Iconic
 */
gulp.task('open-iconic', function () {
    gulp.src(path.join(bowerDir, 'open-iconic/font', '/**/*.{css,eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'open-iconic')));
});

/**
 * Themify Icons
 */
gulp.task('themify-icons', function () {
    gulp.src(path.join(bowerDir, 'themify-icons', '/**/*.{css,eot,svg,ttf,woff,woff2}'))
        .pipe(gulp.dest(path.join(relFontPath, 'themify-icons')));
    gulp.src(path.join(bowerDir, 'themify-icons/css/themify-icons.css'))
        .pipe(concat("themify-icons.min.css"))
        .pipe(cleanCSS({keepSpecialComments: 0}))
        .pipe(gulp.dest(path.join(relFontPath, 'themify-icons/css')));
});