let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/media/global/default.js')
   .sass('resources/assets/sass/app.scss', 'public/media/global/default.css');

mix.js('resources/assets/js/bootcamp.js', 'public/media/bootcamp')
   .sass('resources/assets/sass/bootcamp.scss', 'public/media/bootcamp');
