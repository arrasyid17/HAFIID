/** @type {import('tailwindcss').Config} */
export default {
  content:[
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
<<<<<<< HEAD
    "./node_modules/flowbite/**/*.js"
=======
    "./node_modules/flowbite/**/*.js" 
>>>>>>> 186d4671c5264aff2a2a09d9ffa5aca03bf58c9d
  ],
  theme: {
    extend: {},
  },
  plugins: [require('flowbite/plugin')],
}

