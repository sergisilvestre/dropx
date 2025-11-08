<template>
    <div class="row m-0 justify-content-center">
        <ProductView v-for="product in products" :key="product.id"
            :to="{ name: 'ProductShow', params: { id: product.id } }"
            class="p-3 mb-5 col-12 col-md-6 col-lg-4 col-xl-3" />
    </div>
</template>
<script>
import ProductView from '@/ui/views/Product/ProductView.vue';
import axios from 'axios';
export default {
    components: {
        ProductView
    },
    data() {
        return {
            products: []
        }
    },
    created() {
        const bearer = 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzYyNjA0MzEzLCJleHAiOjE3NjI2MDc5MTMsIm5iZiI6MTc2MjYwNDMxMywianRpIjoiaDZwWU1PdDJzOTkwT2hlRCIsInN1YiI6IjEiLCJwcnYiOiIwYzQ0NzE1OTIzODllY2Y2MDYwNzZiODMxM2I4MDFhZjVmMTFiMmMzIn0.Tsny3qMz5wo3m-ps3mDCJK9GIK9BTGfSxiVmj2ZsyLA';
        axios.get('api/product', {
            headers: {
                Authorization: bearer
            }
        })
            .then(response => {
                this.products = response.data.data;
            })
            .catch(error => {
                console.error('There was an error fetching the products!', error);
            });
    }
}
</script>