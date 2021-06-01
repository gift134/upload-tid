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
    .sass('resources/sass/app_home.scss', 'public/css')
    .sass('resources/sass/app_att.scss', 'public/css')
    .sass('resources/sass/app_buckeye.scss', 'public/css')
    .sass('resources/sass/app_cable_one.scss', 'public/css')
    .sass('resources/sass/app_centurylink.scss', 'public/css')
    .sass('resources/sass/app_cox.scss', 'public/css')
    .sass('resources/sass/app_directv.scss', 'public/css')
    .sass('resources/sass/app_dish.scss', 'public/css')
    .sass('resources/sass/app_frontier.scss', 'public/css')
    .sass('resources/sass/app_optimum.scss', 'public/css')
    .sass('resources/sass/app_rcn.scss', 'public/css')
    .sass('resources/sass/app_spectrum.scss', 'public/css')
    .sass('resources/sass/app_verizon.scss', 'public/css')
    .sass('resources/sass/app_viasat.scss', 'public/css')
    .sass('resources/sass/app_xfinity.scss', 'public/css')
    .sass('resources/sass/app_sprint.scss', 'public/css')
    .sass('resources/sass/app_tmobile.scss', 'public/css')
    .sass('resources/sass/app_adt.scss', 'public/css')
    .sass('resources/sass/app_brinks.scss', 'public/css')
    .sass('resources/sass/app_ring.scss', 'public/css')
    .sass('resources/sass/app_simplisafe.scss', 'public/css')
    .sass('resources/sass/app_vivint.scss', 'public/css')
    ;



