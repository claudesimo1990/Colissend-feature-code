const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
            // fontFamily: {
            //     sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            // },
            animation: {
                'fade-in': 'fade-in 0.5s linear forwards',
                marquee: 'marquee var(--marquee-duration) linear infinite',
                'spin-slow': 'spin 4s linear infinite',
                'spin-slower': 'spin 6s linear infinite',
                'spin-reverse': 'spin-reverse 1s linear infinite',
                'spin-reverse-slow': 'spin-reverse 4s linear infinite',
                'spin-reverse-slower': 'spin-reverse 6s linear infinite',
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '2.5rem',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                'fade-in': {
                    from: {
                        opacity: 0,
                    },
                    to: {
                        opacity: 1,
                    },
                },
                marquee: {
                    '100%': {
                        transform: 'translateY(-50%)',
                    },
                },
                'spin-reverse': {
                    to: {
                        transform: 'rotate(-360deg)',
                    },
                },
            },
            maxWidth: {
                '2xl': '40rem',
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        "./templates/**/*.blade.php",
        "./assets/js/components/**/*.vue",
        './vendor/filament/**/*.blade.php'
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
