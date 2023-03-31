/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
        colors: {
          'white-red': '#F1EEEE',
            'light-wine': '#B16B65',
            'wine': '#450F0B',
            'footer': '#25272B',
            'off-white': '#FAFAFA',
            'off-black': '#060606',

        },
        fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
            'prata': ['Prata', 'serif'],
        },
    },
  },
  plugins: [
  ],
}
