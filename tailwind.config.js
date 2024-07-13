module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
      'node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx,vue}',
      'node_modules/flowbite/**/*.{js,jsx,ts,tsx}'
    ],
    theme: {
      extend: {
        colors: {
          primary: '#6F4F30',
          secondary: '#5C8121'
  
        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
