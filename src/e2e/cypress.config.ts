import { defineConfig } from "cypress";

export default defineConfig({
  e2e: {
    baseUrl: "http://frontend:3000", // Se usará el nombre del servicio en Docker
    supportFile: false,
  },
});
