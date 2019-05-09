
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import HelperMixin from './components/Mixins/HelperMixin.js' // IMPORT GLOBALMIXIN

window.Vue = require('vue');

//Vee-validate
import VeeValidate, { Validator } from 'vee-validate';
Vue.use(VeeValidate);

//SweetAlert2
import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);

//DataTables
var $  = require( 'jquery' );
require( 'datatables.net-dt' )
require( 'datatables.net-buttons-dt' )
require( 'datatables.net-buttons/js/buttons.print.js' );
require( 'datatables.net-buttons/js/buttons.flash.js' );
require( 'datatables.net-buttons/js/buttons.html5.js' );


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('category', require('./components/category/Category.vue').default);
Vue.mixin(HelperMixin)
const app = new Vue({
    el: '#app'
});
