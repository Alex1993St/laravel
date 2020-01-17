import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

Vue.component('menu-list', require('./components/MenuComponent').default);

import Login from './components/LoginComponent';
import Home from './components/HomeComponent';
import Register from './components/RegisterComponent';
import About from './components/AboutComponent';
import Categories from './components/CategoriesComponent';
import News from './components/NewsComponent';
import Contacts from './components/ContactsComponent';
import PageNotFound from './components/PageNotFoundComponent'

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/categories',
            name: 'categories',
            component: Categories
        },
        {
            path: '/news',
            name: 'news',
            component: News
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
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
        },
        {
            path: "*",
            component: PageNotFound
        }
    ],
    // mode: history
})
