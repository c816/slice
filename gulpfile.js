var elixir = require('laravel-elixir');

elixir.config.appPath = '';
elixir.config.assetsPath = '';
elixir.config.notifications = false;
elixir.config.publicPath = '';

elixir(function(mix) {
    mix.sass('style.scss');
});
