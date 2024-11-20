/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["public/index.php"],
  theme: {
    extend: {
      screens: {
        '1030': '1030px',
      },
      width: {
        '1000': '1000px',
      },
      colors: {
        'azul_cat': '#1B5CFF',
        'verde_cat': '#36A2BC',
        'amar_cat': '#F4DA40',
      }
    },
  },
  plugins: [],
}

