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
    //'jquery': './vendor/bower_components/jquery/'
};

elixir(function(mix) {
    //mix.sass('app.scss');

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
        'app.js'
    ],
    'public/js/app.js'
    );
});
