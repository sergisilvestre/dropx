import Login from '@/ui/views/auth/Login.vue'
import Register from '@/ui/views/auth/Register.vue'

export default [
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
]