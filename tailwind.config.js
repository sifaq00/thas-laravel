/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'thas-orange': '#FA8E00',
        'thas-grey': '#303030',
        'thas-green': '#00A450',
        'thas-blue': '#112958', // Warna biru tua dari CSS lama
      }
    },
  },
  plugins: [],
}
