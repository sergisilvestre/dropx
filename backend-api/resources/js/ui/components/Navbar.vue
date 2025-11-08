<template>
    <nav class="p-3 d-flex justify-content-between align-items-center container">
        <a href="/" style="text-decoration: none; color: black;"><b>Brand</b></a>

        <div class="d-flex flex-row p-3">
            <button class="d-flex flex-row align-items-center border-0 bg-transparent px-2">
                <span class="material-symbols-outlined">person</span>
            </button>
            <button class="d-flex flex-row align-items-center border-0 bg-transparent px-2">
                <span class="material-symbols-outlined">shopping_cart</span>
            </button>
        </div>
    </nav>
</template>
<script>
export default {
  name: "NavbarComponent",
};


</script>