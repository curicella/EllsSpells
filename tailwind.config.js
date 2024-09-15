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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                amatic: ['"Amatic SC"', 'cursive'],
                helvetica: ['Helvetica', 'sans-serif'],
                lobster: ['Lobster', 'cursive'],
                palatino: ['Palatino', 'Palatino Linotype', 'Book Antiqua', 'Georgia', 'serif'],
            },
            colors: {
                'my-brown-2': '#170b05',
                'my-brown-3': '#110802',
                'my-beige': '#BAB6B3',
                'my-beige-2': '#b8916b',
                'my-beige-3': '#a29c98',
                'card-brown': '#29211c',

                'my-white': '#ECE4F5',
                'my-lilac': '#BAA9C0',
                'my-purple': '#8B7D91',
                'my-purple-2': '#6D6073',
                'my-purple-3': '#3E3C49',
                'my-black-2': '#272A34',
                'my-black': '#0F181F'
            },
            backgroundImage: {
                'hero': "url('/images/Winged Victory Of Samothrace2.png')",
              }

        },
    },

    plugins: [forms],
};
