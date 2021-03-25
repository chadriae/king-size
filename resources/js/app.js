require('./bootstrap');
require('alpinejs');

import { createApp } from 'vue'
import App from './views/App.vue'
import router from '../router/index.js'
import '../css/tailwind.css'

const app = createApp(App)

app.use(router)

app.mount('#app')
