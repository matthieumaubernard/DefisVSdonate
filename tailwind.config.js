module.exports = {
  purge: {
    enabled: false,
    content: [
        './**/*.html'
    ]
},
  theme: {
      fontFamily: {
      sans: ['Nunito', 'sans-serif'],
      display: ['Nunito', 'sans-serif'],
      body: ['Nunito', 'sans-serif']
      },
      extend: {
        colors: {
            primary: '#EA755E',
            secondary: '#BD675F'
        }
    }
  },
  variants: {},
  plugins: [
      require('tailwindcss'),
      require('autoprefixer')
  ]
}
