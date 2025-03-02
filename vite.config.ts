import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin';
import path from 'path'
import vue from '@vitejs/plugin-vue'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.ts'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        tailwindcss()
    ], 
    build: {
        emptyOutDir: false,
        outDir: './public/',
        manifest: true,
        
        rollupOptions: {
            input: `./resources/js/app.js`,
            output: {
              inlineDynamicImports : true,
              entryFileNames: `assets/[name].js`,
              chunkFileNames: `assets/[name].js`,
              assetFileNames: `assets/[name].[ext]`
            }
          }
    },  
    server: {
        port: 7325,
    }, 
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js'),
        },
    }
});