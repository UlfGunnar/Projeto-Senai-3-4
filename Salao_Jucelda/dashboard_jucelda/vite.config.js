import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  plugins: [react(), tailwindcss()],
  base: '/dashboard_jucelda/',
  server: {
    proxy: {
      '/API': {
        target: 'https://pedrolucasrodrigues.com.br',
        changeOrigin: true
      }
    }
  }
}); 