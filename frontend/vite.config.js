import {defineConfig} from "vite";
import postcss from "./postcss.config";
import liveReload from 'vite-plugin-live-reload'

export default defineConfig({
    plugins: [
        liveReload('./**/*.php')
    ],
    build: {
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: './main.js'
            }
        },
        manifest: true,
        minify: true,
        write: true
    },
    css: postcss,
    server: {
        cors: true,
        strictPort: true,
        port: 4000,
        https: false
    }
});