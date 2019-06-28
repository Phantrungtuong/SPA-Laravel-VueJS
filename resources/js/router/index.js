import Vue from 'vue';
import VueRouter from 'vue-router';

// alert(11);
//view
Vue.use(VueRouter);
import homeView from '../components/views/homeView.vue';
import NotFound from '../components/views/NotFound.vue';



const router =  new VueRouter({
    mode: 'history',
    routes: [
        {path: '/index', name: 'Home', component: homeView},
        {path: '*', component: NotFound}
    ]
});

export default router
