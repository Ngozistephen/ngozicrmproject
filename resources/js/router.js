// import {createApp} from 'vue';

Vue.use(VueRouter);

import { createWebHistory, createRouter } from "vue-router";
import RegisterPage from '@/components/Auth/RegisterPage.vue';
import LoginPage from '@/components/Auth/LoginPage.vue';
import AdminDashboard from '@/components/AdminDashboard.vue';



createRouter({

  history: createWebHistory(),
  routes: [
    {
        path: '/',
        name: 'landing',
        component: LandingPage,
    },
    {
        path: '/register',
        name: 'Register',
        component: RegisterPage,
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: AdminDashboard,
    },
    {
        path: '/login',
        name: 'Login',
        component: LoginPage,
    }, 
  ]
});

export default router;
