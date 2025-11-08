import ProductList from '@/ui/views/Product/ProductList.vue'
import ProductView from '@/ui/views/Product/ProductView.vue'

export default [
    {
        path: '/product',
        name: 'ProductList',
        component: ProductList,
        props: true
    },
    {
        path: '/product/:id',
        name: 'ProductShow',
        component: ProductView,
        props: true
    },
]