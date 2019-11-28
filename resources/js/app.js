window.axios = require('axios');
window.Vue   = require('vue');

var app = new Vue({
    el: '#app',

    components: {
	converter: require('./components/Converter.vue').default
    }
});

