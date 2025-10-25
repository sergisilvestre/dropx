<template>
    <main class="p-0 container">
        <div class="row m-0 justify-content-center">
            <Product v-for="n in 12" :key="n" class="p-3 mb-5 col-12 col-md-6 col-lg-4 col-xl-3" />
        </div>
    </main>
</template>
<script>
import Product from './Product.vue';
export default {
    components: {
        Product
    }
}
</script>