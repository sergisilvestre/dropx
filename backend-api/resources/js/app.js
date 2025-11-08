import './bootstrap';
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

// Bootstrap CSS
import 'bootstrap/dist/css/bootstrap.min.css'

// Bootstrap JS
import 'bootstrap/dist/js/bootstrap.bundle.min.js'

// Material Symbols
import 'material-symbols'

const app = createApp(App)
app.use(router)
app.mount('#app')