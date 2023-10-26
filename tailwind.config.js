/** @type {import('tailwindcss').Config} */
module.exports = {  
  content: [
    "templates/**/*.html.twig"     
],
  theme: {
    extend: {
      colors: {
        customBlue: '#448CCB',
        customYellow: '#FFCC03',
        customRed: '#E52421',
      },
    },
  },
  plugins: [   
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('tw-elements/dist/plugin')    
  ],
  
}

