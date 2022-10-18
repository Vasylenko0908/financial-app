require('./bootstrap');

import Alpine from 'alpinejs';
import BootstrapVue from 'bootstrap-vue' //Importing

Vue.use(BootstrapVue) // Telling Vue to use this in whole application
window.Alpine = Alpine;

Alpine.start();
