import { createRouter, createWebHistory } from 'vue-router'

import guest from '@/router/guest/index.js'
import user from '@/router/user/index.js'
import NotFound from '@/ui/views/NotFound.vue'

const routes = [
  ...guest,
  ...user,
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
