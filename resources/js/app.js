const key = process.env.GOOGLE_KEY

require('./bootstrap');
require('alpinejs');

import { createApp } from 'vue'
import App from './views/App.vue'
import router from '../router/index.js'
import '../css/tailwind.css'
import 'animate.css'
import VueGoogleMaps from "@fawmi/vue-google-maps";

const app = createApp(App)

app.use(router)
app.use(VueGoogleMaps, {
    load: {
        key: process.env.MIX_GOOGLEKEY,
    },
})
app.mount('#app')