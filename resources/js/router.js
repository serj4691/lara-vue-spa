import vueRouter from 'vue-router';
import Vue from 'vue';
import Index from './components/Index';
import About from './components/About';
import Advice from './components/Advice'
import Footer from './components/Footer'

Vue.use(vueRouter);

const routes= [
    { path: '/', component: Index },
    { path: '/about', component: About },
    { path: '/advice', component: Advice },
    { path: '/footer', component: Footer }
];

export default new vueRouter ({
    mode: 'history',
    routes
}) ;
