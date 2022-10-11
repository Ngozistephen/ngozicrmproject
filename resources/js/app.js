/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import { createApp } from 'vue';
require('./bootstrap');

import App from './components/App.vue';
import axios from 'axios';
import router from './router';
// import Home from './components/Home.vue';
// import LoginPage from './components/Auth/LoginPage.vue';
// import RegisterPage from './components/Auth/RegisterPage.vue';



const app = createApp(App)
app.config.globalProperties.$axios = axios
app.use(router);
app.mount("#app");
// const app = createApp({})
//     app.component('app', App);
//     app.component('home', Home);
//     app. component('login-page', LoginPage);
//     app.component('register-page', RegisterPage);

    





