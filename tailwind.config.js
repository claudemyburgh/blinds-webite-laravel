const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */

const customPrimary = {
    50: '#D4EDE1',
    100: '#C5E7D7',
    200: '#A8DBC3',
    300: '#8CCFB0',
    400: '#6FC39C',
    500: '#52B788',
    600: '#3D946B',
    700: '#2D6C4F',
    800: '#1C4432',
    900: '#0C1D15'
}


module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/ts/**/*.{ts,tsx}',
    ],
    darkMode: "class",
    safelist: ['[x-clock]'],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: customPrimary,
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
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/line-clamp'),  require('@tailwindcss/typography'), require('tailwindcss-attributes')],
};
