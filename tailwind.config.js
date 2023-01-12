const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: ['[x-clock]'],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.teal,
                gray: colors.zinc
            },
            width: {
                "square-diagonal": (Math.sqrt(2) * 100).toFixed(2) + "%",
            },
            zIndex: {
                100: 100,
                101: 101,
            }
        },
    },
    corePlugins: {
        aria: false,
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('tailwindcss-attributes')],
};
