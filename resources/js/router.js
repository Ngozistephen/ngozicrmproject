// import {createApp} from 'vue';


import { createWebHistory, createRouter } from "vue-router";
import Home from './components/Home.vue';
import RegisterPage from './components/Auth/RegisterPage.vue';
import LoginPage from './components/Auth/LoginPage.vue';
import AdminDashboard from './components/AdminDashboard.vue';

 export const routes = [
      {
          path: '/',
          name: 'home',
          component: Home,
      },
      {
          path: '/register',
          name: 'register',
          component: RegisterPage,
      },
      {
          path: '/login',
          name: 'login',
          component: LoginPage,
      }, 
      {
          path: '/dashboard',
          name: 'dashboard',
          component: AdminDashboard,
      },
    ];

    const router = createRouter({

        history: createWebHistory(),
        routes,
    });

export default router;
