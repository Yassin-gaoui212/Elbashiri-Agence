import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                // Add 'resources/js/app.js' if you add JS later
            ],
            refresh: true,
        }),
    ],
}); 