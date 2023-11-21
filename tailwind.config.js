/** @type {import('tailwindcss').Config} */
module.exports = {  
  content: {
    relative: true,
    transform: (content) => content.replace(/taos:/g, ''),
    files: ['./src/*.{html,js}', './templates/**/*.html.twig'],
  },
  theme: {
    extend: {
      colors: {
        customBlue: '#448CCB',
        customBlueHover: '#1d58bd',
        customYellow: '#FFCC03',
        customYellowHover: '#ffd942',
        customRed: '#E52421',
      },
      screens: {
        '3xl': '2000px',
      },
      aspectRatio: {
        '4/3': '4 / 3',
      },
      backgroundImage: {
        'hachure': 'repeating-linear-gradient(-45deg, #FFCC03, #FFCC03 4px, transparent 0px, transparent 12px)',
      },
    },    
  },
  plugins: [   
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('tw-elements/dist/plugin'),
    require('tailwindcss-animated'),
    require('taos/plugin'),
  ],
  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))'
  ]
  
}

