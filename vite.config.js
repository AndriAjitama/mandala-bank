import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style.css','resources/css/input.css', 'resources/css/main.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
