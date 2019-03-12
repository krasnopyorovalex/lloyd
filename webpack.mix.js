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

mix.js('resources/js/app.js', 'public/js/app.js')
    .styles([
        'resources/css/camera.css',
        'resources/css/mailform.css',
        'resources/css/search.css',
        'resources/css/style.css'
    ], 'public/css/all.css')
    .version();
