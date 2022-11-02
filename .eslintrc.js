module.exports = {
    'env': {
        'browser': true,
        'es6': true
    },
    'extends': 'eslint:recommended',
    'globals': {
        'Atomics': 'readonly',
        'SharedArrayBuffer': 'readonly'
    },
    'parserOptions': {
        'ecmaVersion': 2018,
        'sourceType': 'module'
    },
    'rules': {
        'arrow-parens': 0,
        'eol-last': ['error', 'always'],
        'indent': ['error', 4],
        'linebreak-style': 0,
        'quotes': ['error', 'single'],
        'semi': [2, 'never'],
        'space-before-function-paren': ['error', {
            'anonymous': 'always',
            'asyncArrow': 'always',
            'named': 'never',
        }],
    }
}
