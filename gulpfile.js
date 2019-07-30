const {watch, src, dest, parallel} = require('gulp');
const sass = require('gulp-sass');

function css() {
	return src('sass/**/*.sass')
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(dest('css'))
}

 // exports.css = css;
 // exports.default = parallel(css);
exports.default = function() {
	watch('sass/**/*.sass', css);
};