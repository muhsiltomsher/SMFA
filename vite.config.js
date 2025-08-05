import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css', // Main CSS file
        'resources/js/app.js',   // Main JavaScript file
      ],
      refresh: true, // Enables auto-refresh on changes
    }),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './resources'), // Allows usage of @ to refer to the resources folder
    },
  },
  server: {
    open: true, // Automatically open the browser on server start
  },
  build: {
    outDir: 'public/build', // Customize the build output directory
  },
});
