import Home from '@/ui/views/Home.vue'
import ProductView from '@/ui/views/Product/Product.vue'

export default [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/product/:id',
        name: 'Product',
        component: ProductView,
        props: true
    },
]