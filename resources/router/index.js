import { createRouter, createWebHistory } from 'vue-router'
import Home from '../js/views/Home.vue'
import About from '../js/views/About.vue'
import RepairersIndex from '../js/views/RepairersIndex.vue'

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
        path: '/repairers',
        name: 'repairers.index',
        component: RepairersIndex
      },
    ]
  })

  export default router