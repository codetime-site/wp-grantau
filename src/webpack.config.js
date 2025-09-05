const path = require('path');

module.exports = {
  // Точка входа: файл, с которого Webpack начнёт сборку
  entry: './scripts/start.js', // или любой другой твой файл

  // Точка выхода: куда сохранить собранный файл
  output: {
    path: path.resolve('../public_html/assets/', 'scripts'),
    filename: 'bundle.js',
  },

  // Правила для обработки файлов
  module: {
    rules: [
      {
        // Найти все файлы .js
        test: /\.js$/,
        // Исключить папку node_modules
        exclude: /node_modules/,
        // Использовать Babel для транспиляции
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },

  // Режим: "production" для сжатия, "development" для отладки
  mode: 'production',
};