var elixir = require('laravel-elixir');

elixir.config.appPath = '';
elixir.config.notifications = false;
elixir.config.publicPath = 'assets';

elixir(function(mix) {
    mix.sass('style.scss').webpack('app.js');
});
