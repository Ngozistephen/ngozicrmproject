


 <template>
    <div>
     
        <header-area></header-area>
        <router-view></router-view>
    </div>
</template>

<script>

    import HeaderArea from './HeaderArea.vue';


    export default {
        name: "App",


        components: {
            HeaderArea
        },

        data() {
            return {
                isLoggedIn: false,
            }
        },

        created(){
            if (window.laravel.isLoggedIn) {
                this.isLoggedIn = true
            }
        },

        methods: {
            logout(e) {
                e.preventDefault()
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('/api/logout')
                    .then(response => {
                        if(response.data.success){
                            window.location.href = "/"
                        }else{
                            console.log(response );
                        }

                    })
                    .catch(function (error){
                        console.error(error);
                    });
                })
            }
        }
    }

</script>   
