import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import colors from "tailwindcss/colors";

export default {
    darkMode: 'class',
    content: ['./vendor/filament/**/*.blade.php'],
    theme: {
        extend: {
            colors: {
                // Filament 4 handles its own color system, so we only define custom colors here
            },
        },
    },
    plugins: [forms, typography],
}
