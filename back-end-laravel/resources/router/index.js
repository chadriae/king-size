import { createRouter, createWebHistory } from 'vue-router'
import Home from '../js/views/Home.vue'
import About from '../js/views/About.vue'
import Profiles from '../js/views/Profiles.vue'

const routerHistory = createWebHistory()

const router = createRouter({
    history: routerHistory,
    routes: [
      {
        path: '/',
        component: Home
      },
      {
        path: '/about',
        component: About
      },
      {
        path: '/profiles',
        component: Profiles
      },
    ]
  })

  export default router