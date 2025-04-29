"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    browserSync = require('browser-sync').create();

// Compile Sass
function compileSass() {
    return gulp.src(["assets/scss/main.scss"])
        .pipe(sass({
            outputStyle: 'compressed',
            functions: false  // This disables the legacy JS API
        }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}

// Watch files
function watchFiles() {
    gulp.watch('assets/scss/**/*.scss', compileSass);
    gulp.watch(["**/*.php", "includes/*.php"]).on('change', browserSync.reload);
}

// BrowserSync
function serve(done) {
    browserSync.init({
        proxy: "localhost/clients/fatto/"
    });
    done();
}

// Define complex tasks
const watch = gulp.series(compileSass, gulp.parallel(watchFiles, serve));

// Export tasks
exports.compileSass = compileSass;
exports.serve = watch;
exports.default = watch;