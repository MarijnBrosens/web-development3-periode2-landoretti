var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bxslider': './vendor/bower_components/bxslider-4/'
};

elixir(function(mix) {

    // Compile STYLESHEETS
    mix.sass(
        'app.scss',
        'public/css'
    );

    // Compile SCRIPTS
    mix.scripts(
    [
        //paths.bootstrap + 'javascripts/bootstrap.js',
        //paths.moment + 'min/moment-with-locales.min.js',
        paths.jquery + 'dist/jquery.js',
        paths.bxslider + 'dist/jquery.bxslider.min.js',
        'app.js'
    ],
    'public/js/app.js'
    );

});
