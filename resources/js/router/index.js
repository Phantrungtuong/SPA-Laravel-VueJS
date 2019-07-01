import Vue from 'vue';
import VueRouter from 'vue-router';

// alert(11);
//view
Vue.use(VueRouter);
import homeView from '../components/views/homeView.vue';
import NotFound from '../components/views/NotFound.vue';
import Category from '../components/views/Category.vue';
import AddCategory from '../components/Category/addCategory.vue';



const router =  new VueRouter({
    mode: 'history',
    routes: [
        {path: '/index', name: 'Home', component: homeView},
        {path: '/category', name: 'Category', component: Category},
        {path: '/addcategory', name: 'category.create', component: AddCategory},
        {path: '*', component: NotFound}
    ]
});

export default router
