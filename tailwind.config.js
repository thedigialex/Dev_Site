/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'skillBackground': '#82A8FD',
        'skillText': '#e5fff7',
        'hoverBackground': '#fef3d9',
      },
      fontFamily: {
        sans: ['Red Hat Display', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

