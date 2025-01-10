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
            },
        },
    },
    plugins: [
      require('@tailwindcss/forms'),
    ],
};
// /** @type {import('tailwindcss').Config} */
// module.exports = {
//     content: [
//       "./resources/**/*.blade.php",
//       "./resources/**/*.js",
//     ],
//     theme: {
//       extend: {},
//     },
//     plugins: [
//       require('@tailwindcss/forms'),
//     ],
//   }