import product from '@/router/guest/product';
import auth from '@/router/guest/auth.js';
import Home from '@/ui/views/Home.vue'

export default [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    ...auth,
    ...product,
]