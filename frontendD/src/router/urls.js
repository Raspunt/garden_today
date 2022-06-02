import { createWebHistory, createRouter } from "vue-router";

import MainPage from "../components/MainPage.vue"
import ShopPage from "../components/ShopPage.vue"
import CartPage from "../components/CartPage.vue"
import OrderPage from "../components/OrdersPage.vue"


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
  

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;