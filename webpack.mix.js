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

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .styles(['public/frontend/assets/css/style.css',
        'public/frontend/assets/css/home.css',
        'public/frontend/assets/css/header.css',
        'public/frontend/assets/css/footer.css',
        'public/frontend/assets/vendor/glider/glider.css'

    ], 'public/css/app.css');
