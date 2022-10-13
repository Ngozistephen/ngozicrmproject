// import {createApp} from 'vue';


import { createWebHistory, createRouter } from "vue-router";
import Home from './components/Home.vue';
import RegisterPage from './components/Auth/RegisterPage.vue';
import LoginPage from './components/Auth/LoginPage.vue';
import Dashboard from './components/Admin/Dashboard.vue';

 export const routes = [
      {
          path: '/',
          name: 'home',
          component: Home,
      },
      {
          path: '/register',
          name: 'register',

          meta: {
            guestOnly: true
          },
          component: RegisterPage,
      },
      {
          path: '/login',
          name: 'login',
          meta: {
            guestOnly: true
          },
          component: LoginPage,
      }, 
      {
          path: '/dashboard',
          name: 'dashboard',
          meta: {
            requiresAuth: true
          },
          component: Dashboard,
      },
    ];

    const router = createRouter({

        history: createWebHistory(),
        routes,
    });

    router.beforeEach((to, from, next)=> {
        if(to.meta && to.meta.requiresAuth && !window.laravel.isLoggedIn){
            console.log(window.laravel);
            return next({name: 'login'});
        }

        if(to.meta && to.meta.guestOnly && window.laravel.isLoggedIn){
            return next({name:'dashboard'})
        }
        next();
    })

export default router;
