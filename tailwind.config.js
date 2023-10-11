/** @type {import('tailwindcss').Config} */
module.exports = {  
  content: [
    "templates/**/*.html.twig"   
],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tw-elements/dist/plugin')    
  ],
}

