require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import { routes } from './routes'
import axios from 'axios'

window.axios = axios

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes,
})

Vue.component('main-app', require('./components/MainApp.vue').default);

const app = new Vue({
    el: '#app',
    router,
});
