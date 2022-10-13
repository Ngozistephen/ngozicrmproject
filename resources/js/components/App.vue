


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

        
    }

</script>   
