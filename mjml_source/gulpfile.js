const
    gulp = require('gulp'),
    exec = require("gulp-exec"),
    deleteLines = require('gulp-delete-lines')

function handleError (err) {
    console.log(err.toString());
    this.emit('end');
}

const emailTemplates = {
    deposits_with_conversion: {
        src: './deposits_with_conversion/*.php',
        dest: '../mjml_compiled/deposits_with_conversion/',
    }
};

const compileMail = (from, where) => (
    gulp
        .src(from)
        .pipe(exec("mjml <%= file.path %> -s --config.beautify false --config.minify true", {
            pipeStdout: true,
        }))
        .on("error", handleError)
        .pipe(deleteLines({
            filters: [/<!-- FILE/i],
        }))
        .pipe(gulp.dest(where))
)
const compileDepositsConversion = () => compileMail(emailTemplates.deposits_with_conversion.src, emailTemplates.deposits_with_conversion.dest);
const watchDepositsConversion = () => gulp.watch(emailTemplates.deposits_with_conversion.src, compileDepositsConversion);

exports.watchMjml = gulp.parallel([
    compileDepositsConversion,
    watchDepositsConversion
]);
exports.compileMjml = gulp.parallel([
    compileDepositsConversion,
]);
