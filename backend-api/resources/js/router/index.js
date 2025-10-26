import { createRouter, createWebHistory } from 'vue-router'

// Authentication views
import auth from '@/router/auth.js'

// Guest views
import guest from '@/router/guest.js'

// User views
import user from '@/router/user/user.js'

// Not found page
import NotFound from '@/ui/views/NotFound.vue'

const routes = [
  ...auth,
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
