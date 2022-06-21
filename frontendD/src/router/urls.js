import { createWebHistory, createRouter } from "vue-router";

import MainPage from "../components/MainPage.vue"
import ShopPage from "../components/ShopPage.vue"
import CartPage from "../components/CartPage.vue"
import OrderPage from "../components/OrdersPage.vue"
import LoginPage from "../components/LoginPage.vue"
import RegisterPage from "../components/RegisterPage.vue"


const routes = [
  {
    path: "/",
    name: "Home",
    component: MainPage,
  },
  {
    path: "/shop",
    name: "ShopPage",
    component: ShopPage,
  },
  {
    path: "/cart",
    name: "CartPage",
    component: CartPage,
  },
  {
    path: "/Orders",
    name: "OrdersPage",
    component: OrderPage,
  },
  {
    path: "/Login",
    name: "LoginPage",
    component: LoginPage,
  },
  {
    path: "/Register",
    name: "RegisterPage",
    component: RegisterPage,
  },
  

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;