import Vue from 'vue'
import VueRouter from 'vue-router'
import LoginView from '../views/login.vue'
import CustommersView from "../views/custommers.vue"
import NewCustomer from "../views/newCustomer.vue"

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'login',
    component: LoginView
  },
  {
    path: '/custommers',
    name: 'custommers',
    component: CustommersView
  },
  {
    path: '/new-customer',
    name: 'newCustomer',
    component: NewCustomer
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
