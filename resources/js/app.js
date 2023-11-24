import './bootstrap';
import {createApp} from 'vue';
import search from './client/search.vue';
import cart from './client/cart.vue';
import admin from './admin.vue';

const app = createApp({});

const components = [
    search,
    cart
];

components.forEach(component => app.component(component.name, component));

app.mount('#app');


// setup component to admin

const appAdmin = createApp(admin);
appAdmin.mount('#admin');