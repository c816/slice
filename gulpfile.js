process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

elixir.config.appPath = '';
elixir.config.assetsPath = '';
elixir.config.publicPath = '';

elixir(function(mix) {
    mix.sass('style.scss');
});
