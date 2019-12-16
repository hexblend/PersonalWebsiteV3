let mix = require("laravel-mix");
require("laravel-mix-purgecss");

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
        postCss: [
            require("tailwindcss")("./tailwind.js"),
            require("autoprefixer")()
        ]
    })
    .purgeCss({
        whitelist: [
            "textarea",
            "select",
            "contact__information--form__columns",
            "custom",
            "char",
            "caret"
        ]
    })
    .copy("resources/assets/img", "dist/img/")
    .copy("resources/assets/video", "dist/video/");

mix.browserSync("http://localhost:8888");

if (mix.inProduction()) {
    mix.version();
}
