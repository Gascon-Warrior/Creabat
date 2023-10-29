/** @type {import('tailwindcss').Config} */
module.exports = {  
  content: [
    "templates/**/*.html.twig"     
],
  theme: {
    extend: {
      colors: {
        customBlue: '#448CCB',
        customBlueHover: '#1d58bd',
        customYellow: '#FFCC03',
        customRed: '#E52421',
      },
      screens: {
        '3xl': '2000px',
      },
      aspectRatio: {
        '4/3': '4 / 3',
      },
    },    
  },

  plugins: [   
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('tw-elements/dist/plugin')    
  ],
  
}

