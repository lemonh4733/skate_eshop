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
   'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
   'https://fonts.googleapis.com/icon?family=Material+Icons',
   'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
   'styles/shards-dashboards.1.1.0.min.css',
   'styles/extras.1.1.0.min.css',
], 'public/css/vendor.css');
mix.combine([
   'https://code.jquery.com/jquery-3.3.1.min.js',
   'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
   'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
   'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js',
   'https://unpkg.com/shards-ui@latest/dist/js/shards.min.js',
   'https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js',
   'scripts/extras.1.1.0.min.js',
   'scripts/shards-dashboards.1.1.0.min.js',
   'scripts/app/app-blog-overview.1.1.0.js',
], 'public/js/eshop.js');
mix.browserSync('skelbimai.test');