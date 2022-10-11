<template>
         
     
         <header id="header-area">
                   <div class="container">
                       <div class="row">
                           <nav class="navbar navbar-default">
                               <div class="navbar-header">
                                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                       <span class="sr-only"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                   </button>                              
                                   <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
                                  
                               </div>
                               <div class="collapse navbar-collapse navbar-ex1-collapse" >
                                    <ul class="nav navbar-nav navbar-right" v-if="isLoggedIn">
                                        <router-link to="/dashboard" class="page-scroll">Dashboard</router-link>
                                        <a class="page-scroll" @click="logout">Logout</a>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right" v-else>
                                        <li><router-link to="/#home" class="page-scroll">Home</router-link></li>

                                        <li v-if="$route.name == 'home'"><a class="page-scroll" href="#features">features</a></li>
                                        <li v-if="$route.name == 'home'"><a class="page-scroll" href="#screenshot">screens</a></li>
                                        <li v-if="$route.name == 'home'"><a class="page-scroll" href="#testimonial">testimonial</a></li>

                                        <li><router-link to="/login" class="page-scroll">Login</router-link></li>
                                        <li><router-link to="/register" class="page-scroll">Register</router-link></li>
                                    </ul>
                               </div>
                           </nav>
                       </div>
                   </div>
        </header><!-- End Header area -->
</template>

<script>

</script>


<style>
    
/*3.Start Header Area css*/
header {
    position:absolute;
    left: 0;
    /* top: 20px; */
    width:100%;
    z-index: 9999;
}
header.sticky{
    position: fixed;
    top: 0;
    background: #5627b4;
    background: -moz-linear-gradient(top, #5627b4 0%, #934dbe 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, #5627b4), color-stop(100%, #934dbe));
    background: -webkit-linear-gradient(top, #5627b4 0%, #934dbe 100%);
    background: -o-linear-gradient(top, #5627b4 0%, #934dbe 100%);
    background: -ms-linear-gradient(top, #5627b4 0%, #934dbe 100%);
    background: linear-gradient(to bottom, #5627b4 0%, #934dbe 100%);
}
.sticky .navbar-default .navbar-nav li a{
    color: #fff;
}
.navbar-default {
    background-color: transparent;
    border: none;
    text-transform:uppercase;
    margin-bottom: 0px;
    padding: 15px 0;
    transition: .5s;
}
.navbar-default .navbar-brand {
    margin-top: -15px;
    color: #fff;
}
.navbar-default .navbar-nav li a{
    color:#fff;
    font-size: 16px;
    text-transform: capitalize;
    transition: .5s;
}
.navbar-default .navbar-nav li a:hover,
.navbar-default .navbar-nav li a:focus {
    color:#fff;
}
.navbar-default .navbar-nav li a{
    border-radius: 30px;
    line-height: 10px;
}
.navbar-default .navbar-toggle {
    background:#fff;
    border:none;
    border-radius:0
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background:#fff
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #944dbe;
}
/*End Header Area css*/

</style>