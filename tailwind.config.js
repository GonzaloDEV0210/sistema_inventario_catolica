/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["public/index.php", "pages/*.php"],
  theme: {
    extend: {
      screens: {
        '1030': '1030px',
      },
      width: {
        '1000': '1000px',
        '1100': '1100px'
      },
      colors: {
        'azul_cat': '#1B5CFF',
        'verde_cat': '#36A2BC',
        'amar_cat': '#F4DA40',
        'gris_input': '#9C9C9C'
      },
      backgroundColor: {
        'azul_cat': '#1B5CFF',
        'verde_cat': '#36A2BC',
        'amar_cat': '#F4DA40',
        'h_azul_cat': '#4a7dfd',
        'h_verde_cat': '#66bdd3',
        'h_amar_cat': '#e5c507',
      }
    },
  },
  plugins: [],
}

