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

mix.js(['resources/js/owl/owl.carousel.min.js', 'resources/js/app.js'], 'public/js/app.js')
    .styles([
        'resources/css/bootstrap-grid.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/owl.theme.default.min.css',
        'resources/css/app.min.css',
        'resources/css/style.css',
        'resources/css/responsive.css'
    ], 'public/css/all.css')
    .version();
