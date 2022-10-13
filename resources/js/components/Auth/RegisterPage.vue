<template>
  


  <div class="container">
        <div class="row-justify-content-center">
            <div class="col-md-8">
                <div v-if="error !== null" class="alert alert-danger alert-dismissible show" role="alert">
                    <button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <strong>{{error}}</strong>
                </div>

                <div class="card card-default">
                    <div class="card-header"><h5>Register </h5></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="firstname" class="col-sm-4 col-form-label text-md-right">Frist Nmae</label>
                                <div class="col-md-8">
                                    <input id="firstname" type="firstname" class="form-control" v-model="firstname" required autofocus autocomplete="off" placeholder="Enter First Name">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-4 col-form-label text-md-right">Last Name</label>
                                <div class="col-md-8">
                                    <input id="Lastname" type="lastname" class="form-control" v-model="lastname" required autofocus autocomplete="off" placeholder="Enter Last Name">

                                </div>
                            </div>
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
                                        Register
                                    </button>
                                </div>
                            </div>
                            <div class=" row mt-1">
                                <div class="col-md-8 offset-md-4">
                                    <small class="text-muted">
                                       Have an Account? Please
                                        <router-link to="/login">Login</router-link>
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

    name: 'register',


    data(){
        return {
            firstname: "",
            lastname: "",
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
            e.preventDefault();
            this.error = null;
            if(this.password.length > 0) {
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('api/register', {
                        firstname: this.firstname,
                        lastname: this.lastname,
                        email: this.email,
                        password: this.password
                    })
                    .then(response => {
                       
                            this.$router.push({name:'login'});
                       
                    })
                    .catch(error => {
                        console.error(error);
                        this.error = error.response.data.message

                        setTimeout(() => {
                            this.error = null;
                        }, 2000);
                    });
                })
            }
        }
    },


    }
</script>