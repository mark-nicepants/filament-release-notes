const path = require('path');
const TerserWebpackPlugin = require('terser-webpack-plugin');

module.exports = {
    entry: './resources/js/app.js',
    output: {
        filename: 'release-notes.js',
        path: path.resolve(__dirname, 'resources/dist'), // Output directory
    },
    mode: 'production',
    optimization: {
        minimize: true,
        minimizer: [new TerserWebpackPlugin({
            terserOptions: {
                compress: {
                    // drop_console: true,
                },
            },
        })],
    },
};
