const mix = require('laravel-mix');
require('larxavel-mix-purgecss');
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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();
mix.js([
    'resources/js/app.js',
    'public/app-assets/vendors/js/vendors.min.js',
    'public/app-assets/js/core/app-menu.js',
    'public/app-assets/js/core/app.js'
], 'public/all-mixed.js').style([
    'resources/css/app.css  ',
    'public/app-assets/vendors/css/vendors-rtl.min.css',
    'public/app-assets/css-rtl/bootstrap.css',
    'public/app-assets/css-rtl/bootstrap-extended.css',
    'public/app-assets/css-rtl/colors.css',
    'public/app-assets/css-rtl/components.css',
    'public/app-assets/css-rtl/themes/dark-layout.css',
    'public/app-assets/css-rtl/themes/bordered-layout.css',
    'public/app-assets/css-rtl/themes/semi-dark-layout.css',
    'public/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css',
    'public/app-assets/css-rtl/custom-rtl.css',
    'public/assets/css/style-rtl.css',
], 'public/all-mixed.css').
postCss('resources/css/app.css', 'public/css').
purgeCss({
    content: [
        "resources/*.php",
        "resources/**/*.php",
        "app/**/*.php",
    ]
}).version();

// mix.js([
//     'resources/js/app.js',
//     'public/app-assets/vendors/js/vendors.min.js',
//     'public/app-assets/js/core/app-menu.js',
//     'public/app-assets/js/core/app.js'
// ], 'public/all-mixed.js').style([
//     'public/app-assets/vendors/css/vendors-rtl.min.css',
//     'public/app-assets/css-rtl/bootstrap.css',
//     'public/app-assets/css-rtl/bootstrap-extended.css',
//     'public/app-assets/css-rtl/colors.css',
//     'public/app-assets/css-rtl/components.css',
//     'public/app-assets/css-rtl/themes/dark-layout.css',
//     'public/app-assets/css-rtl/themes/bordered-layout.css',
//     'public/app-assets/css-rtl/themes/semi-dark-layout.css',
//     'public/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css',
//     'public/app-assets/css-rtl/custom-rtl.css',
//     'public/assets/css/style-rtl.css',
// ], 'public/all-mixed.css').version();