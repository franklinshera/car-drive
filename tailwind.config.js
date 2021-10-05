module.exports = {
  purge: [

    './resources/**/*.blade.php',
    './resources/**/*.js'

  ],
  darkMode: false, 
  theme: {
    extend: {
      colors:{
       brand:{
         1: "#14213d",
         2: "#fca311",
         3: "#e5e5e5",
       }
      },
      minHeight: {
        '0': '0', 
        '1/4': '25vh', 
        '1/2': '50vh', 
        '3/4': '75vh', 
        'full': '100vh',
       }
    },
  },
  variants: {
    extend: {
      borderRadius: ['hover', 'focus'],
    },
  },
  plugins: [],
}
