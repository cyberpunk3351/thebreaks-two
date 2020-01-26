var gulp            = require('gulp');
var browserSync     = require('browser-sync').create();
var sass            = require('gulp-sass');
var notify          = require("gulp-notify");
var pug 		    = require('gulp-pug');
var rename 		    = require('gulp-rename');
var autoprefixer 	= require('gulp-autoprefixer');
var gcmq 	  	    = require('gulp-group-css-media-queries');
var newer           = require('gulp-newer');
var concat          = require('gulp-concat');


const dir = {
    src         : 'src/',
    build       : '../thebreaks-two/'
};

const php = {
    src           : dir.src + 'php/**/*.php',
    build         : dir.build
};


// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        socket: {
            domain: "localhost:3000"
        }
	});
});

gulp.task('sass', function() {
	// return gulp.src('app/'+syntax+'/**/*.'+syntax+'')
	return gulp.src(dir.src + 'sass/**/*.sass')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 5 versions']))
	//.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('src/assets/css')) // папака в которую складывают уже готовые css стили
});

gulp.task('styles', function() {
	// return gulp.src('app/'+syntax+'/**/*.'+syntax+'')
	return gulp.src(dir.src + 'sass-style/style-style.sass')
	.pipe(sass().on("error", notify.onError()))
	// .pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 5 versions']))
	// .pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest(dir.src + 'sass-style')) // папака в которую складывают уже готовые css стили
});
// gulp.task('pug', function(){
//     return gulp.src(['src/pug/*.pug','!src/pug/_layouts/*.*'])
//         .pipe(pug({
//             pretty: true
//         }))
//         .pipe(gulp.dest('dist/'))
//         .pipe(browserSync.reload({stream: true}))
// });

gulp.task('social-link', async function(){
    return gulp.src(dir.src + 'css/social-link.css')
        .pipe(newer(dir.build + 'assets/css/social-link.css'))
        .pipe(gulp.dest(dir.build + 'assets/css'));
});

gulp.task('allcss', async function(){
    return gulp.src(dir.src + 'css/all.css')
        .pipe(newer(dir.build + 'assets/css/all.css'))
        .pipe(gulp.dest(dir.build + 'assets/css'));
});

gulp.task('mainstyle', async function(){
    return gulp.src(dir.src + 'css/style.css')
        .pipe(newer(dir.build + 'style.css'))
        .pipe(gulp.dest(dir.build));
});

gulp.task('font-awesomecss', async function(){
    return gulp.src(dir.src + 'css/font-awesome.css')
        .pipe(newer(dir.build + 'assets/css/font-awesome.css'))
        .pipe(gulp.dest(dir.build + 'assets/css'));
});

gulp.task('php', async function(){
    return gulp.src(php.src)
        .pipe(newer(php.build))
        .pipe(gulp.dest(dir.build))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('copy-inc', async function(){
    return gulp.src(dir.src + 'php/inc/*.php')
        .pipe(newer(php.build))
        .pipe(gulp.dest(dir.build));
});

gulp.task('copy-folder', async function(){
    return gulp.src(dir.src + 'php/inc2/**')
        // .pipe(newer(php.build))
        .pipe(gulp.dest(dir.build + 'inc2/'));
});

gulp.task('gcmq', async function () {
    gulp.src(dir.src + 'assets/css/main.min.css')
        .pipe(gcmq())
        .pipe(gulp.dest(dir.build + 'assets/css/'));
});

gulp.task('concat', function() {
    return gulp.src([dir.src + 'assets/css/style.css', dir.build + 'assets/css/main.min.css'])
        .pipe(concat('style.css'))
        .pipe(gulp.dest(dir.build));
});

// gulp.task('copy-img', function() {
//     return gulp.src('./src/img/*.svg')
//         .pipe(gulp.dest('./dist/imgs'));
// });

// gulp.task('copy-font', function() {
//     return gulp.src('./src/font/**/*.{woff,woff2,eof}')
//         .pipe(gulp.dest('./dist/fonts'));
// });

gulp.task('watch', function() {
    gulp.watch(dir.src + 'php/**/*.php', gulp.parallel('php'));
    // gulp.watch(dir.src + 'css/style.css', gulp.parallel('mainstyle'));
    gulp.watch(dir.src + 'sass/**/*.sass', gulp.parallel('sass'));
    // gulp.watch(dir.src + 'sass-style/style-style.sass', gulp.parallel('styles'));
    gulp.watch([dir.src + 'assets/css/style.css', dir.build + 'assets/css/main.min.css'], gulp.parallel('concat'));
    gulp.watch(dir.src + 'assets/css/main.min.css', gulp.parallel('gcmq'));
    // gulp.watch(dir.src + 'css/*.css', gulp.parallel('social-link', 'allcss', 'font-awesomecss'));
});

// gulp.task('default', gulp.parallel('sass', 'styles', 'gcmq', 'php', 'concat', 'watch', 'browser-sync'));
gulp.task('default', gulp.parallel('sass', 'php', 'gcmq','concat', 'watch', 'browser-sync'));