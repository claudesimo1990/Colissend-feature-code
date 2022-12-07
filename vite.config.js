import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            //refresh: true,
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
                'app/Forms/Components/**',
            ],
        }),
    ],
})
// mix.js('assets/js/controllers/appController.js', 'public/js')
//     .js('assets/alpineJs/controllers/alpineController.js', 'public/js')
//     .postCss('assets/css/controllers/appController.css', 'public/css', [
//         require("tailwindcss"),
//     ])
//     .options({
//         postCss: [tailwindcss('tailwind.config.js')],
//     });
// mix.copy('assets/img', 'public/images')
// mix.copy('assets/img/colissend/favicon', 'public/images')
