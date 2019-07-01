require('./bootstrap'); //tải file bootstrap.js nhằm tải các thư viện cần thiết

import Vue from 'vue';
import Vuex from 'vuex';
import App from './components/App.vue'; // tải master view cho ứng dụng



import router from './router';

// VueX
Vue.use(Vuex)
import storeparent from  './store'
const store = new Vuex.Store({
    modules: {
        storeparent
    }
})



export default new Vue({
    store,
    el: "#app",
    render: h => h(App),
    router

});
