try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

require('./search.js');