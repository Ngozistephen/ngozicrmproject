<template>
    <div class="">
        Welcome {{firstname || lastname}}
    </div>



</template>

<script>
    export default{
        
        name: 'dashboard',

        data(){
            return{
                firstname: null,
                lastname: null,
            }
            
        },

        // created(){
        //     if (window.laravel.user){
        //         this.firstname = window.laravel.user.firstname,
        //         this.lastname = window.laravel.user.lastname

        //     }
        // },
        components: {
            
        }
    }
</script>