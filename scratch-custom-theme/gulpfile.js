import gulp from 'gulp';
import del from 'del';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import sourcemaps from 'gulp-sourcemaps';
import sass from 'gulp-dart-sass';
import cleanCss from 'gulp-clean-css';
import imagemin from 'gulp-imagemin';
import browserSync from 'browser-sync';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import zip from 'gulp-zip';
import replace from 'gulp-replace';
import gulpif from 'gulp-if';
import wpPot from 'gulp-wp-pot';

const themeName = 'scratchtheme';
const server = browserSync.create();
const parallel = gulp.parallel;
const series = gulp.series;
const watch = gulp.watch;
const src = gulp.src
const dest = gulp.dest

// DEVELOPMENT
export const serve = done => {
  server.init ({
    proxy: "http://localhost/wp-gulp/" // localhost path
  });
  done();
};

export const reload = done => {
  server.reload();
  done();
};

export const scripts = () => {
  return src(['./src/js/bundle.js', './src/js/migrated/slick.js'])
    .pipe(named())
    .pipe(webpack({
      module: {
        rules: [
          {
            test: /\.js$/
          }
        ]
      },
      mode: 'development',
      devtool: 'inline-source-map',
      output: {
        filename: '[name].js'
      },
      externals: {
        jquery: 'jQuery'
      },
    }))
    .pipe(dest('./dist/js'));
}

export const styles = () => {
  return src('./src/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('dist/css'))
    .pipe(server.stream());
}

export const watching = () => {
  watch('./src/scss/**/*.scss', series(styles, reload));
  watch('./src/images/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  watch(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'], series(copy, reload));
  watch('./src/**/*.js', series(scripts, reload));
  watch("**/*.php", reload);
}

export const clean = () => del(['dist']);

export const copy = () => {
  return src(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'])
    .pipe(dest('dist/'));
}

export const images = () => {
  return src('./src/images/*.{jpg,jpeg,png,svg,gif}')
    .pipe(imagemin())
    .pipe(dest('dist/images'))
}


// Production
export const buildScripts = () => {
  return src(['./src/js/bundle.js','./src/js/migrated/slick.js'])
    .pipe(named())
    .pipe(webpack({
      module: {
        rules: [
          {
            test: /\.js$/
          }
        ]
      },
      mode: 'production',
      devtool: false,
      output: {
        filename: '[name].js'
      },
      externals: {
        jquery: 'jQuery'
      },
    }))
    .pipe(dest('./dist/js'));
}

export const tidyCss = () => {
  return src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([ autoprefixer ]))
    .pipe(cleanCss({compatibility: 'ie8'}))
    .pipe(dest('dist/css'));
}

export const pot = () => {
  return src("**/*.php")
  .pipe(
    wpPot({
      domain: "_themename",
      package: themeName
    })
  )
  .pipe(dest(`languages/${themeName}.pot`));
}

export const compress = () => {
return src([
  "**/*",
  "!node_modules{,/**}",
  "!bundled{,/**}",
  "!src{,/**}",
  "!.gitignore",
  "!package.json",
  "!package-lock.json",
  ])
  .pipe(
        gulpif(
          file => file.relative.split(".").pop() !== "zip",
          replace("_themename", themeName)
        )
      )
  .pipe(zip(`${themeName}.zip`))
  .pipe(dest('bundled'));
};


export const dev = series(clean, parallel(styles, images, copy, scripts), serve, watching);
export const build = series(clean, parallel(tidyCss, images, copy, buildScripts), pot, compress);
export default dev;

