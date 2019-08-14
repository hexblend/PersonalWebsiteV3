let mix = require("laravel-mix")
require("laravel-mix-purgecss")

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

mix.setPublicPath("dist")
    .js("resources/assets/js/app.js", "js/")
    .extract(["babel-polyfill", "vue"])
    .sass("resources/assets/sass/app.scss", "css/")
    .options({
        processCssUrls: false,
        postCss: [require("tailwindcss")("./tailwind.js")]
    })
    .purgeCss()
    .copy("resources/assets/img", "dist/img/")

mix.browserSync("http://local.bedrock-sage-vue-starter")

if (mix.inProduction()) {
    mix.version()
}
