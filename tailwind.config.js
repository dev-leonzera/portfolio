import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'deep-black': '#050505',
                'rich-black': '#0D1117',
                'gold-accent': {
                    'light': '#FCD34D',
                    'DEFAULT': '#FBBF24',
                    'dark': '#D97706',
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                outfit: ['Outfit', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
