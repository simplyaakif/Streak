const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/views/components/admin/**/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/tailwind/**/*.blade.php',
        './resources/views/student/**/*.blade.php',
        './resources/views/auth/**/*.blade.php',
        './resources/views/components/student/**/*.blade.php',
        './vendor/filament/**/*.blade.php',

    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
            fontFamily: {
                sans: ['Inter var','Poppins', ...defaultTheme.fontFamily.sans],
            },
        }
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('@tailwindcss/typography'),
    ],

}
