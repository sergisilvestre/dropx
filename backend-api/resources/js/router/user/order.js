import Orders from '@/ui/views/user/Orders/Orders.vue'
import Order from '@/ui/views/user/Orders/Order.vue'
import Basket from '@/ui/views/user/Orders/Basket.vue'
import Checkout from '@/ui/views/user/Orders/Checkout.vue'

export default [
    {
        path: '/orders',
        name: 'Orders',
        component: Orders
    },
    {
        path: '/order/:id',
        name: 'Order',
        component: Order
    },
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