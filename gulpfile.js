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

elixir(function(mix) {
    mix.sass('app.scss');
    mix.styles([
        '/plugins/sweetalert.css'
    ], 'public/css/plugins/sweetalert.css').scripts([
        'app.js'
    ], 'public/js/app.js');
});


elixir(function(mix) {
    mix.styles([
        '/plugins/semantic.min.css'
    ], 'public/css/plugins/semantic.min.css')
});


elixir(function(mix) {
    mix.scripts([
        '/plugins/sweetalert.min.js'
    ], 'public/js/plugins/sweetalert.min.js')
    .scripts([
        '/plugins/semantic.min.js'
    ], 'public/js/plugins/semantic.min.js')
});

