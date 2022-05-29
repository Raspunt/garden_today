import { createWebHistory, createRouter } from "vue-router";

import MainPage from "../components/MainPage.vue"
import ShopPage from "../components/ShopPage.vue"

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
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;