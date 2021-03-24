import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Profiles from '../views/Profiles.vue'

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
      }
    ]
  })

  export default router