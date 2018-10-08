
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('main-section', require('./components/MainSection.vue'));
Vue.component('user-detail', require('./components/UserDetail.vue'));

import App from './views/App'
import Users from './views/Users'
import UserDetail from './views/UserDetail'

// const UserDetail = { props: ['id'], template: 'user-detail' }
// const MainSection = { template: 'main-section' }
// const Route2 = { template: '<div>This is router user</div>' }


const routes = [
    {
    path: '/admin/user/:id',
    name:'user-detail',
    component: UserDetail,
    props: true
    },
    {
        path: '/admin/users/',
        name:'users',
        component: Users,
    },
    // { path: '/admin/user',name:'user.detail',component: UserInfo, props: true},
    // { path: '/admin/user/',component: Route2 },
    // { path: '/products',component: Route2},
    // { path: '/about'}
];
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    components: {App},
    router: router,
    data: {
        users: ''
    }
});
