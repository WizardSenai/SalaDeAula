import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/reservar.css',  'resources/css/criarsala.css', 'resources/js/app.js', 'resources/js/reserva.js', 'resources/js/reserva.js'],
            refresh: true,
        }),
    ],
});
