const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/views/components/admin/**/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/tailwind/**/*.blade.php',
        './resources/views/student/**/*.blade.php',
        './resources/views/auth/**/*.blade.php',
        './resources/views/components/student/**/*.blade.php',

    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var','Poppins', ...defaultTheme.fontFamily.sans],
            },
        }
    },
    plugins: [
        require("@tailwindcss/forms")
    ],

}
