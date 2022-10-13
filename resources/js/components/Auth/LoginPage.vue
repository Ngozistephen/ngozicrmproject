<template>
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-md-8">
                <div v-if="error !== null" class="alert alert-danger alert-dismissible show" role="alert">
                    <button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <strong>{{error}}</strong>
                </div>

                <div class="card card-default">
                    <div class="card-header"><h5>Login</h5></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right"> E-mail Address</label>
                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" v-model="email" required autofocus autocomplete="off" placeholder="Enter Email Address">

                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="password" class="col-sm-4 col-form-label text-md-right"> Password</label>
                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" v-model="password" required autofocus autocomplete="off" placeholder="Enter Password">

                                </div>
                            </div>

                            <div class="form-group row mt-1 mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success" @click="handleSubmit">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <div class=" row mt-1">
                                <div class="col-md-8 offset-md-4">
                                    <small class="text-muted">
                                        Do not have any account yet? Please
                                        <router-link to="/register">Register</router-link>
                                    </small>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</template>

<script>



import HeaderArea from '../HeaderArea.vue';

    export default{

        name: 'login',


        data(){
            return {
                email: "",
                password: "",
                error: null
            }
        },

        components: {
            HeaderArea
        },

        methods: {
            handleSubmit(e){
                e.preventDefault()
                if(this.password.length > 0) {
                    this.$axios.get('/sanctum/csrf-cookie').then(response => {
                        this.$axios.post('api/login', {
                            email: this.email,
                            password: this.password
                        })
                        .then(response => {
                            
                            const url =    this.$router.resolve({name: 'dashboard'}).fullPath;
                            // console. log(url)
                           location = url;
                        })
                        .catch( (error ) => {
                            console.error(error);
                            this.error = error.response.data.message
                        });
                    })
                }
            }
        },

        
    }
</script>