import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                bmwBold: ["BMWGlobal-Bold", "sans-serif"],
                bmwLight: ["BMWGlobal-Light", "sans-serif"],
                bmwRegular: ["BMWGlobal-Regular", "sans-serif"],
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
