<template>
  <div class="d-flex flex-column" style="min-height: 100vh;">
    <HeaderComponent v-if="!fullScreen" />
    <MainComponent class="mb-auto" />
    <FooterComponent v-if="!fullScreen" />
  </div>
</template>

<script>
import { ref, watch } from 'vue'
import { useRoute } from 'vue-router'
import HeaderComponent from '@/ui/components/Header.vue'
import MainComponent from '@/ui/components/Main.vue'
import FooterComponent from '@/ui/components/Footer.vue'

export default {
  name: 'App',
  components: {
    HeaderComponent,
    MainComponent,
    FooterComponent
  },
  setup() {
    const route = useRoute()
    const fullScreen = ref(route.name === 'Login')

    watch(
      () => route.name,
      (newName) => {
        fullScreen.value = newName === 'Login'
      }
    )

    return { fullScreen }
  }
}
</script>