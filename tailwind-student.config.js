const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    mode: 'jit',
    purge: [
        './resources/views/**/*.blade.php',
        './resources/views/components/admin/**/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/tailwind/**/*.blade.php',
        // './resources/views/student/**/*.blade.php',
        // './resources/views/components/student/**/*.blade.php',

    ],
    theme: {
        extend: {
            colors: {
                indigo: colors.indigo,
                rose: colors.rose,
                coolGray: colors.coolGray,
                red: colors.red,
                cyan: colors.cyan,
                'blue-gray': colors.blueGray,
            },
            fontFamily: {
                sans: ['Inter var','Poppins', ...defaultTheme.fontFamily.sans],
            },
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],

}
