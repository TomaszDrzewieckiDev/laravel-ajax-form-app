const
mix = require('laravel-mix')

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css');
mix.sass('resources/sass/app.scss', 'public/css')
mix.js('resources/js/form/contact-form.js', 'public/js')
