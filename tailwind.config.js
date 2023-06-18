/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.html"],
  theme: {
    extend: {
      maxWidth: {
        '80': '80rem',
      }
    },
  },
  plugins: [],
}

