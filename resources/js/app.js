require('./bootstrap');
window.$ = window.jQuery = require('jquery');
window.Vue = require('vue').default;
import VueRouter from 'vue-router'
Vue.use(VueRouter);
import routes from '../js/router.js'
import Vuex from 'vuex'
import storeData from "./store/index"
import VueLazyImageLoading from 'vue-lazy-image-loading'
import ScaleLoader from 'vue-spinner/src/PulseLoader.vue'
import VueGlide from 'vue-glide-js'
import 'vue-glide-js/dist/vue-glide.css'
Vue.use(Vuex)
Vue.use(VueGlide)
Vue.use(VueLazyImageLoading)
Vue.use(require('vue-resource'));

const store = new Vuex.Store(
    storeData
)


const router = new VueRouter({
    routes: routes,
    mode: "history",
    // linkActiveClass: "active", // active class for non-exact links.
    // linkExactActiveClass: "active" // active class for *exact* links.

})


Vue.component('nav-header', require('../component/nav-header.vue').default);
Vue.component('header-banner', require('../component/page/header-banner.vue').default);
Vue.component('container', require('../component/container.vue').default);
Vue.component('homepage', require('../component/page/homepage').default);
Vue.component('popular-categories', require('../component/page/popular-categories').default);
Vue.component('restaurant-room', require('../component/page/restaurant-room').default);
Vue.component('footer-content', require('../component/footer').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('scale-loader', ScaleLoader);
const app = new Vue({
    el: '#app',
    router,
    store
});