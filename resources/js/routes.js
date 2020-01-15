import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

Vue.component('menu-list', require('./components/MenuComponent').default);

import Login from './components/LoginComponent';
import Home from './components/HomeComponent';
import Register from './components/RegisterComponent';

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        }
    ],
    // mode: history
})
