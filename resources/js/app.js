import './bootstrap';
import { createApp } from 'vue'
import App from './layouts/App.vue'
import router from './router/router.js';

createApp(App)
.use(router)
.mount('#app')
