/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
  
    extend: {
      colors:{
        orange:'#f17c35',
        black:'#000',
        greyTransparente:'#777',
        white:"#fff",
        borderslate200:'#ccc',
        textDark:'#888',
        browLite:"#953132",
        defaultText:"#676767;",
      },
    },
  },
  plugins: [],
}