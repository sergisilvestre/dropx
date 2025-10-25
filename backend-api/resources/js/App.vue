<template>
  <div class="d-flex flex-column" style="min-height: 100vh;">
    <HeaderComponent />
    <MainComponent class="mb-auto" />
    <FooterComponent />
  </div>
</template>
<script>
import HeaderComponent from '@/ui/components/Header.vue'
import MainComponent from '@/ui/components/Main.vue'
import FooterComponent from '@/ui/components/Footer.vue'

export default {
  name: 'App',
  components: {
    HeaderComponent,
    MainComponent,
    FooterComponent
  }
}
</script>
