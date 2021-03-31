const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .js('resources/js/app2.js', 'public/js').vue()
  .sass('resources/css/app.scss', 'public/css')
  .postCss('resources/css/app2.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
  ])
  .webpackConfig(require('./webpack.config'))
  .sourceMaps(false);

if (mix.inProduction()) {
    mix.version();
}
