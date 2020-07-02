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

let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig( {
        plugins: [
            new ImageminPlugin( {
    //            disable: process.env.NODE_ENV !== 'production', // Disable during development
                pngquant: {
                    quality: '95-100',
                },
                test: /\.(jpe?g|png|gif|svg)$/i,
            } ),
        ],
    } )
    .copy( 'resources/img', 'public/img', false );
