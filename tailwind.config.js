/** @type {import('tailwindcss').Config} */
export default {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        fontFamily: {
            "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
        },
        colors: {
            "black": "#060606"
        },
        fontSize: {
            "2xs": ".625rem"
        }
    },
  },
  plugins: [],
}

