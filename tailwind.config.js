const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: '#FE3C72',
                    75: '#FE6B94',
                    50: '#FE9DB8',
                    25: '#FFCEDC'
                },
                secondary: {
                    100: '#FF7854',
                    75: '#FF947F',
                    50: '#FFBBA4',
                    25: '#FFCBD4'
                },
                gray: {
                    100: '#424242',
                    75: '#717171',
                    50: '#A0A0A0',
                    25: '#D0D0D0'
                }
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
