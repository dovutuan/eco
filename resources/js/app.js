import './bootstrap';
import {createApp} from 'vue';
import search from './client/search.vue';
import cart from './client/cart.vue';

const app = createApp({});

const components = [
    search,
    cart
];

components.forEach(component => app.component(component.name, component));

app.mount('#app');
