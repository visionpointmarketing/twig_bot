var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var gfi = require("gulp-file-insert");

// The following are included in Node.js's standard
// library (npm isn't required to get them); but our
// .scss files and this gulpfile will use them.

var fs = require('fs');
var path = require('path');
var glob = require('glob');
var sassGlob = require('gulp-sass-glob');

gulp.task('sass', function() {

// gulp.src locates the source files for the process. 
// This globbing function tells gulp to use all files 
// ending with .scss or .sass within the scss folder. 

	gulp.src('./scss/**/*.{scss,sass}')
		// Converts Sass into CSS with Gulp Sass
		.pipe(sassGlob())
		.pipe(sass())
		// Logs compilation errors to console
		.on('error', sass.logError)
		// Runs autoprefixer on CSS where necessary
		.pipe(autoprefixer())
		.pipe(gulp.dest('css'))

});

gulp.task('watch', function() {

	// Watches the folders for all specified file extensions
	// If any file changes, run the task listed at the end

	gulp.watch('./scss/**/*.{scss,sass}', ['sass'])
	gulp.watch('./components/**/*.{scss,sass}', ['sass'])
	gulp.watch('./headers/**/*.{scss,sass}', ['sass'])
	gulp.watch('./templates/**/*.{scss,sass}', ['sass'])
});

// Creating a default task
gulp.task('default', ['sass', 'watch']);


