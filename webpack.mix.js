const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// semantic-ui
mix.copy('node_modules/semantic-ui/dist/semantic.css', 'public/vendor/semantic-ui/dist/semantic.css')
   .copy('node_modules/semantic-ui/dist/semantic.js', 'public/vendor/semantic-ui/dist/semantic.js')
   .copyDirectory('node_modules/semantic-ui/dist/themes/', 'public/vendor/semantic-ui/dist/themes/');

// jquery
mix.copy('node_modules/jquery/dist/jquery.js', 'public/vendor/jquery/dist/jquery.js');

mix.sass('resources/assets/sass/styles.scss', 'public/css')
   .js('resources/assets/js/myPlugin.js', 'public/js');

mix.copyDirectory('node_modules/three/', 'public/vendor/three/');

mix.browserSync({
    open: 'external',
    host: 'silent.shoes',
    proxy: 'silent.shoes',
    files: ['resources/views/**/*.php', 'resources/assets/**/*.js', 'resources/assets/**/*.scss', 'app/**/*.php', 'routes/**/*.php', 'webpack.mix.js']
});