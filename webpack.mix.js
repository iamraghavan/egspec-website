const mix = require('laravel-mix');

mix.styles([
    'public/assets/css/plugins/animate.min.css',
    'public/assets/css/plugins/fontawesome.min.css',
    'public/assets/css/vendor/bootstrap.min.css',
    'public/assets/css/plugins/swiper.min.css',
    'public/assets/css/vendor/magnific-popup.css',
    'public/assets/css/vendor/metismenu.css',
    'public/assets/css/plugins/nice-select.css',
    'public/assets/css/plugins/jquery-ui.css',
    'public/assets/css/style.css',
], 'public/css/all.css')
.options({
    processCssUrls: false,
})
.version(); // Add versioning
