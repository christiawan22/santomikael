import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/css/bootstrap.min.css', 'public/js/jquery.min.js'],
            refresh: true,
        }),
    ],
});
