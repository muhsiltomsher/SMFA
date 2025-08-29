import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbitePlugin from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/css/**/*.css",
  ],
  theme: {
    extend: {
      screens: {
        "between1024-1157": { min: "1024px", max: "1157px" },
        "between1158-1220": { min: "1157px", max: "1220px" },
      },
      typography: {
        DEFAULT: {
          css: {
            hyphens: 'auto',
          },
        },
      },
    },
  },
  plugins: [
    forms,
    flowbitePlugin,
    require('@tailwindcss/typography'),
  ],
};
