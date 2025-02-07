import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                popins:['Poppins 300','sens-serif'],
                slabo:['Slabo ','sens-serif'],
                lora:['Lora','serif'],
                edu_au_vic_wa_nt_hand:['Edu AU VIC WA NT Hand',' serif']
            },
            spacing: {
                header: '4rem', // Set the desired spacing value
              },
        },
    },

    plugins: [forms,
        require('preline/plugin'),

    ],
};
