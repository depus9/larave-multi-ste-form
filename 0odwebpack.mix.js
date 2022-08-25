const mix = require('laravel-mix');

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
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')
const CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin');
var webpackConfig = {
    plugins: [
        new CaseSensitivePathsPlugin(),
        // other plugins ...
    ],
}
mix.webpackConfig(webpackConfig);

mix.extend('vuetify', new class {
    webpackConfig(config) {
        config.plugins.push(new VuetifyLoaderPlugin())
    }
})
mix.vuetify();

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [

    ]);

