/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import 'bootstrap/dist/css/bootstrap.min.css';
		import 'mdbvue/lib/css/mdb.min.css';
		import '@fortawesome/fontawesome-free/css/all.css';
		
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('Sidebar', require('./components/Sidebar.vue').default);
Vue.component('Formulaire', require('./components/Formulaire.vue').default);
Vue.component('Table', require('./components/Table.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Welcome', require('./components/Welcome.vue').default);
Vue.component('Modal', require('./components/Modal.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
	el: '#app',
		
});



