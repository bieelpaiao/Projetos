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

mix.styles([
    'resources/views/site/css/bootstrap.css', 'resources/views/site/css/home.css',
    'resources/views/site/css/login.css', 'resources/views/site/css/signup.css',
    'resources/views/site/css/registration.css', 'resources/views/site/css/perfil.css'
], 'public/site/css/style.css')
    .scripts(['resources/views/site/js/script.js'], 'public/site/js/script.js')
    .version();
