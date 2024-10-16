const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
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
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss")
    ]);

// mix.js('resources/js/filament.js', 'public/js')
// mix.postCss("resources/css/student.css", "public/css", [
//     tailwindcss('./tailwind-student.config.js'),
// ]);

// mix.css('resources/css/student.css','public/css',{},[
//     tailwindcss('./tailwind-student.config.js')
// ])


mix.disableSuccessNotifications();
mix.disableNotifications()

