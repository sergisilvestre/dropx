import Basket from '@/ui/views/user/Orders/Basket.vue'
import Checkout from '@/ui/views/user/Orders/Checkout.vue'

export default [
    {
        path: '/basket',
        name: 'Basket',
        component: Basket
    },
    {
        path: '/checkout',
        name: 'Checkout',
        component: Checkout
    },
]