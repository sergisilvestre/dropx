import order from '@/router/user/order.js'
import Profile from '@/ui/views/user/Profile.vue'

export default [
  ...order,
  {
    path: '/profile',
    name: 'Profile',
    component: Profile
  }
]