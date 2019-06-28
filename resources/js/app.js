require('./bootstrap'); //tải file bootstrap.js nhằm tải các thư viện cần thiết

import Vue from 'vue';
import App from './components/App.vue'; // tải master view cho ứng dụng
import router  from './router'

export default new Vue({
    el: "#app",
    render: h => h(App),
    router
});
