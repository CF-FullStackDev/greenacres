let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/plugins.scss', 'public/css')
   .scripts([
    'resources/assets/js/plugins/smoothscroll.js',
    'resources/assets/js/plugins/anijs.js',
    'resources/assets/js/plugins/scrollReveal.min.js',
    'resources/assets/js/plugins/jquery.easing.min.js',
    'resources/assets/js/plugins/scrolling-nav.js'
 ], 'public/js/plugins.js');
