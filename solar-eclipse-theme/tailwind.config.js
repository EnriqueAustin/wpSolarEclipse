/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./blocks/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'solar-charcoal': '#111827',
        'solar-black': '#0B0F19',
        'solar-yellow': '#FBBF24',
        'solar-yellow-hover': '#F59E0B',
        'solar-cyan': '#06B6D4',
        'solar-green': '#10B981',
        'solar-gray': '#374151',
        'solar-light': '#F3F4F6'
      },
      fontFamily: {
        heading: ['"Space Grotesk"', 'sans-serif'],
        body: ['Inter', 'sans-serif']
      },
      animation: {
        'glow': 'glow 3s ease-in-out infinite alternate',
        'float': 'float 6s ease-in-out infinite',
      },
      keyframes: {
        glow: {
          '0%': { boxShadow: '0 0 5px rgba(251, 191, 36, 0.2)' },
          '100%': { boxShadow: '0 0 20px rgba(251, 191, 36, 0.6), 0 0 40px rgba(6, 182, 212, 0.4)' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        }
      },
      backgroundImage: {
        'solar-gradient': 'linear-gradient(to right, #111827, #0B0F19)',
        'eclipse-glow': 'radial-gradient(circle at center, rgba(251,191,36,0.15) 0%, rgba(17,24,39,0) 70%)',
      }
    },
  },
  plugins: [],
}
