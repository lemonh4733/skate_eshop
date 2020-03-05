const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.combine([
   'public/styles/shards-dashboards.1.1.0.min.css',
   'public/styles/extras.1.1.0.min.css',
], 'public/css/vendor.css');
mix.combine([
   'scripts/extras.1.1.0.min.js',
   'scripts/shards-dashboards.1.1.0.min.js',
   'scripts/app/app-blog-overview.1.1.0.js',
], 'public/js/eshop.js');
mix.browserSync('eshop.test');
