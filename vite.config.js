import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
//import inject from 'vite-plugin-inject';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/start/carousel.js',
        'resources/js/small_ads/content_form.js',
      ],
      refresh: true,
    }),
  ],
});