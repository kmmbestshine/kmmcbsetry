var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sassdoc = require('sassdoc');



var input = ['./public/style/sass/app.scss','./public/style/sass/**/*.scss'];
var output = 'public/style/css';

/** Js input**/
var jsInput = ['./public/app/app.js','./public/app/**/*.js','./public/pages/**/*.js'];

var bothInput = input.concat(jsInput);


var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('js', function () {
  gulp.src(jsInput)
    .pipe(concat('public/js/all.js'))
    .pipe(gulp.dest('.'))
});

gulp.task('sass', function () {
  return gulp
    // Find all `.scss` files from the `stylesheets/` folder
    .src(input)

    // Run Sass on those files
    .pipe(sass(sassOptions).on('error', sass.logError))

    .pipe(autoprefixer(autoprefixerOptions))

    // .pipe(sourcemaps.write())
    // .pipe(sourcemaps.write('./stylesheets/maps'))

    // Write the resulting CSS in the output folder
    .pipe(gulp.dest(output))

    .pipe(concat('public/style/all.css'))

    .pipe(gulp.dest('.'))
});

var sassdocOptions = {
  dest: './public/sassdoc'
};


gulp.task('sassdoc', function () {
  return gulp
    .src(input)
    .pipe(sassdoc())
    .resume();
});

gulp.task('watch', function() {
  return gulp
    // Watch the input folder for change,
    // and run `sass` task when something happens
    // .watch(input, ['sass'])

    .watch(bothInput, ['both'])
    // When there is a change,
    // log a message in the console
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    })
});

gulp.task('default', ['sass','js', 'watch' /*, possible other tasks... */]);

gulp.task('both', ['sass','js', 'watch']);

