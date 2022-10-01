/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import { createApp } from 'vue';
import App from './components/App.vue';
// import router from './router';
import HeaderArea from './components/HeaderArea.vue';
import LandingPage from './components/LandingPage.vue';
import LoginPage from './components/Auth/LoginPage.vue';
import RegisterPage from './components/Auth/RegisterPage.vue';




const app = createApp({})
    app.component('app', App);
    app.component('header-area', HeaderArea);
    app.component('landing-page', LandingPage);
    app. component('login-page', LoginPage);
    app.component('register-page', RegisterPage);

    
// app.use(router);

app.mount("#app");


