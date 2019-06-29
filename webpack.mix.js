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

 /**
  * Custom settings
  */
 mix.webpackConfig({
     resolve: {
         alias: {
             'mdbootstrap.js': 'mdbootstrap/js/mdb.js'
         }
     }
 });

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css');

/**
 * Source Maps
 */
mix.sourceMaps();

/**
 * Versioning
 */
if (mix.inProduction()) {
    mix.version();
}
