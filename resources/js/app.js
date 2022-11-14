import './bootstrap';
import 'vuetify/styles'
import { createApp } from 'vue/dist/vue.esm-bundler';
import { createVuetify } from 'vuetify'
import { createRouter, createWebHashHistory} from 'vue-router'
import App from './App.vue'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import Counter from '../components/Counter.vue'
import Login from '../components/Login.vue'
import Orders from '../components/Orders.vue'
import CustomerDashboard from '../components/CustomerDashboard.vue'
import DeliveryRoutes from '../components/DeliveryRoutes.vue'
import SalesForm from '../components/SalesForm.vue'
import CreateUser from '../components/CreateUser.vue'
import axios from 'axios';

axios.defaults.baseURL = "http://localhost:8001/api/"



const vuetify = createVuetify({
  components,
  directives,
})


const Home = {template: '<div>home</div>'}
const About = {template: '<div>about</div>'}

const routes = [
    {path:'/', component:CustomerDashboard},
    {path:'/about', component:Counter},
    {path:'/login', component:Login},
    {path:'/ActiveOrders', component:Orders},
    {path:'/DeliveryRoutes', component:DeliveryRoutes},
    {path:'/SalesForm', component:SalesForm},
    {path:'/CreateUser', component:CreateUser},



]
const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
  })


const app = createApp(App)
app.use(vuetify)
app.use(router)

app.mount('#app')