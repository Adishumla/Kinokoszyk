/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
        colors: {
          'white-red': 'rgba(241, 238, 238, 1)',
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
