const path = require('path');

module.exports = [
    {
        entry: './blocks/hero/index.jsx',
        output: {
            path: path.resolve(__dirname, 'blocks/hero'),
            filename: 'index.js'
        },
        module: {
            rules: [
                {
                    test: /.jsx?$/,
                    loader: 'babel-loader',
                    exclude: /node_modules/,
                }
            ]
        }
    },
    {
        entry: './blocks/lola/index.jsx',
        output: {
            path: path.resolve(__dirname, 'blocks/lola'),
            filename: 'index.js'
        },
        module: {
            rules: [
                {
                    test: /.jsx?$/,
                    loader: 'babel-loader',
                    exclude: /node_modules/,
                }
            ]
        }
    },
    {
        entry: './blocks/manu/index.jsx',
        output: {
            path: path.resolve(__dirname, 'blocks/manu'),
            filename: 'index.js'
        },
        module: {
            rules: [
                {
                    test: /.jsx?$/,
                    loader: 'babel-loader',
                    exclude: /node_modules/,
                }
            ]
        }
    },
    {
        entry: './blocks/mika/index.jsx',
        output: {
            path: path.resolve(__dirname, 'blocks/mika'),
            filename: 'index.js'
        },
        module: {
            rules: [
                {
                    test: /.jsx?$/,
                    loader: 'babel-loader',
                    exclude: /node_modules/,
                }
            ]
        }
    }
]