
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform';
import VueProgressBar from 'vue-progressbar';
import swal from 'sweetalert2';
import Gate from './Gate';
import VuePaginate from 'vue-paginate'
Vue.use(VuePaginate)
Vue.prototype.$gate = new Gate(window.user);

window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
window.toast = toast;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.Form = Form;
window.Fire = new Vue();

import VueRouter from 'vue-router';

Vue.use(VueRouter);
Vue.use(VueProgressBar, {
    color:'blue',
    failedColor:'red',
    height:'5px'
});
const routes = [
    { path: '/dashboard', component:  require('./components/Dashboard.vue') },
    { path: '/edit-about', component:  require('./components/pages/About.vue') },
    { path: '/edit-services', component:  require('./components/pages/Services.vue') },
    { path: '/edit-policies', component:  require('./components/pages/Policies.vue') },
    { path: '/edit-countries', component:  require('./components/pages/Countries.vue') },
    { path: '/edit-payments', component:  require('./components/pages/Payments.vue') },
    { path: '/formsubmissions', component:  require('./components/pages/Contactforms.vue') },
    { path: '/edit-works', component:  require('./components/pages/Howitworks.vue') },
    { path: '/edit-team', component:  require('./components/pages/Team.vue') },
    { path: '/edit-slider', component:  require('./components/pages/Slider.vue') },
    { path: '/edit-partners', component:  require('./components/pages/Partners.vue') },
    { path: '/developer', component:  require('./components/Developer.vue') },
    { path: '/profile', component:  require('./components/Profile.vue') },
    { path: '/users', component:  require('./components/Users.vue') },
    { path: '*', component:  require('./components/NotFound.vue') }
  ]

const router = new VueRouter({
    mode:'history',
    routes // short for `routes: routes`
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('dashboard', require('./components/Dashboard.vue'));
Vue.component('notfound', require('./components/NotFound.vue'));
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);
Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1);
});
Vue.filter('fDate', function (time){
    return moment(time).format('MMMM Do YYYY, h:mm:ss a');
})
const app = new Vue({
    el: '#app',
    router,
    data:{
        search:''
    }
});
$(document).ready(function() {
    $('#summernote').summernote();
  });