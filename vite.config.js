import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/error.css",
                "resources/js/pages/soporte.js",
                "resources/js/pages/datos.js",
                "resources/js/pages/edit_datos.js",
            ],
            refresh: true,
        }),
    ],
});
