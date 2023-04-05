/* Requiring necessary packages */
var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	browsersync = require('browser-sync'),
	changed = require('gulp-changed'),
	concat = require('gulp-concat'),
	cssnano = require('gulp-cssnano'),
	babel = require('gulp-babel'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	clean = require('gulp-clean'),
	runSequence = require('run-sequence');
	merge = require("merge-stream");

/* Setting base project constants */
const paths = {
	src: './src/',
	dest: '../wp-content/themes/hotsites-2020/'
};

/* Setting an error swallower */
var swallowError = function(error) {
	console.log(error.toString())
	this.emit('end')
}

/*
* BASIC
*
* Tasks basicas e globais, direcionada a todos
*/
gulp.task('clean', function () {
    return gulp.src([paths.dest],{read:false})
        .pipe(clean({force: true}));
});

gulp.task('img', function() {
	// Setting allowed images
	gulp.src([
		paths.src + 'img/*.jpg',
		paths.src + 'img/*.gif',
		paths.src + 'img/*.png',
		paths.src + 'img/*.svg'
	])
	.pipe(changed(paths.dest + 'img'))
	// .pipe(imagemin())
	.pipe(gulp.dest(paths.dest + 'img'));
	
	gulp.src([paths.src+'/screenshot.png'])
		// .pipe(imagemin())
		.pipe(gulp.dest(paths.dest));
});

gulp.task('fonts', function() {
	gulp.src([paths.src + 'fonts/*.*'])
		.pipe(gulp.dest(paths.dest + 'fonts'));
});

gulp.task('php', function() {
	gulp.src([paths.src + '**/*.php'])
		.pipe(sourcemaps.init())
		.pipe(changed(paths.dest))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.dest));
});

gulp.task('css', function() {
	var base = gulp.src([paths.src + 'scss/main.scss'])
		.pipe(sourcemaps.init())
		.pipe(changed(paths.dest))
		.pipe(concat('temp/main.scss'))
		.pipe(gulp.dest(paths.src));

	var widget = gulp.src([paths.src + 'scss/modulos/*.scss'])
		.pipe(sourcemaps.init())
		.pipe(changed(paths.dest))
		.pipe(concat('temp/widgets.scss'))
		.pipe(gulp.dest(paths.src));
			
	var mergedStyles = merge(base, widget)
		.pipe(concat('styles.scss'))
		.pipe(sass())
		.on('error', swallowError)
		.pipe(autoprefixer())
		.pipe(cssnano({zindex: false, reduceIdents: false}))
		.pipe(concat('style.css'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.dest));
	
		return mergedStyles;
	});

gulp.task('clean-css', function(){
	gulp.src([paths.src + "temp"],{read:false})
		.pipe(clean({force: true}))
})

gulp.task('js', function() {
	gulp.src([paths.src + 'js/modulos/*.js', paths.src + 'js/main.js'])
		.pipe(sourcemaps.init())
		.pipe(changed(paths.dest + 'js'))
		.pipe(babel({
			presets: ['env']
		}))
		.pipe(uglify())
		.pipe(concat('scripts.min.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.dest + 'js'));

});

gulp.task('js-ie', function() {
	gulp.src([paths.src + 'js/ie/*.js'])
		.pipe(sourcemaps.init())
		.pipe(changed(paths.dest + 'js/ie'))
		.pipe(babel({
			presets: ['env']
		}))
		.pipe(uglify())
		.pipe(concat('scripts-ie.min.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.dest + 'js/ie'));
});

gulp.task('libs', function() {
	/* 
	* Here comes all the third-party files
	* like Fontawesome, bulma...
	*/

	// CSS Libs
	gulp.src([
		'node_modules/normalize.css/normalize.css',
		'node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss',
		'node_modules/tiny-slider/dist/tiny-slider.css'
	])
	.pipe(sourcemaps.init())
	.pipe(changed(paths.dest + 'css'))
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(cssnano())
	.pipe(concat('libs.min.css'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(paths.dest + 'css'));

	// Jquery
	gulp.src(['node_modules/jquery/dist/jquery.js'])
		.pipe(sourcemaps.init())
		.pipe(changed(paths.dest + 'js/libs'))
		.pipe(uglify())	
		.pipe(concat('jquery.min.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.dest + 'js/libs'));

	// JS Libs
	gulp.src([
		'node_modules/tiny-slider/dist/tiny-slider.js',
		'node_modules/tiny-slider/dist/tiny-slider.helper.ie8.js',
		'node_modules/get-youtube-id/index.js',
		'node_modules/countup.js/countUp.js'
	])
	.pipe(sourcemaps.init())
	.pipe(changed(paths.dest + 'js/libs'))
	.pipe(uglify())	
	.pipe(concat('libs.min.js'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(paths.dest + 'js/libs'));
});

gulp.task('watch', function() {
	var php = gulp.watch([paths.src + '**/*.php'], ['php']),
		css = gulp.watch([paths.src + 'scss/**/*.scss'], function(){ runSequence('css', 'clean-css')}),
		js = gulp.watch([paths.src + 'js/*.js'], ['js']),
		js = gulp.watch([paths.src + 'js/modulos/*.js'], ['js']),
		js_ie = gulp.watch([paths.src + 'js/ie/*.js'], ['js-ie']);

	browsersync.init([paths.dest], {
		// proxy: 'http://localhost/www.circuitopedala.com.br/',
		proxy: 'http://localhost/',
		browser: 'chrome',
		port: 3000,
		notify: false
	});
});


/*
* SERVER
*
* Tasks direcionadas ao servidor, mais simples
*/

gulp.task('libs-server', function() {
	/* 
	* Here comes all the third-party files
	* like Fontawesome, bulma...
	*/

	// CSS Libs
	gulp.src([
		'node_modules/normalize.css/normalize.css',
		'node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss',
		'node_modules/tiny-slider/dist/tiny-slider.css'
	])
	.pipe(changed(paths.dest + 'css'))
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(cssnano())
	.pipe(concat('libs.min.css'))
	.pipe(gulp.dest(paths.dest + 'css'));

	// JS Libs
	gulp.src([
		'node_modules/tiny-slider/dist/tiny-slider.js',
		'node_modules/tiny-slider/dist/tiny-slider.helper.ie8.js',
		'node_modules/get-youtube-id/index.js',
		'node_modules/countup.js/countUp.js'
	])
	.pipe(changed(paths.dest + 'js/libs'))
	.pipe(uglify())	
	.pipe(concat('libs.min.js'))
	.pipe(gulp.dest(paths.dest + 'js/libs'));
});


gulp.task('css-server', function() {
	var base = gulp.src([paths.src + 'scss/main.scss'])
		.pipe(changed(paths.dest))
		.pipe(concat('temp/main.scss'))
		.pipe(gulp.dest(paths.src));

	var widget = gulp.src([paths.src + 'scss/**/*.scss'])
		.pipe(changed(paths.dest))
		.pipe(concat('temp/widgets.scss'))
		.pipe(gulp.dest(paths.src));
			
	var mergedStyles = merge(base, widget)
		.pipe(concat('styles.scss'))
		.pipe(sass())
		.on('error', swallowError)
		.pipe(autoprefixer())
		.pipe(cssnano({zindex: false, reduceIdents: false}))
		.pipe(concat('style.css'))
		.pipe(gulp.dest(paths.dest));
	
		return mergedStyles;
});

gulp.task('js-server', function() {

	gulp.src([paths.src + 'js/modulos/*.js', paths.src + 'js/main.js'])
		.pipe(changed(paths.dest + 'js'))
		.pipe(babel({
			presets: ['env']
		}))
		.pipe(uglify())
		.pipe(concat('scripts.min.js'))
		.pipe(gulp.dest(paths.dest + 'js'));

});

gulp.task('js-server-ie', function() {
	gulp.src([paths.src + 'js/ie/*.js'])
		.pipe(changed(paths.dest + 'js'))
		.pipe(babel({
			presets: ['env']
		}))
		.pipe(concat('scripts-ie.min.js'))
		.pipe(gulp.dest(paths.dest + 'js/ie'));
});


/*
* SERVER
*
* Esta tarefa faz a contrução do projeto diretamente no servidor, sem o browsersync 
*/
gulp.task('server', 
	function(callback){
		runSequence('clean',['php', 'clean-css', 'libs-server', 'css-server', 'js-server', 'js-server-ie', 'img', 'fonts'],callback);
	}
);

/*
* GLOBAL
*
* Esta tarefa faz a contrução básica, pode ser usada para testar a contrução mais avançada dos arquivos
*/
gulp.task('default', 
	function(callback){
		runSequence('clean',['php', 'clean-css', 'css', 'libs', 'js', 'js-ie', 'img', 'fonts'],'watch',callback);
	}
);