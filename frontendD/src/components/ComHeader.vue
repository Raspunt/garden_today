

<template>

    <header class="header">

        <div class="flex-row-header">
        <img class="logo" src="../assets/logo_project2.png" alt="">
        <h1>Garden Today</h1>
        </div>

        <router-link  class="header_link" v-bind:to="linkUrl">{{linkName}}</router-link>

        
    </header>

</template>



<script>

    export default {

        data(){
            return {
                linkName:"Главная страница",
                linkUrl:""
            }
        },
        methods:{

            ChengeUrl(){

                let current_url = window.location.pathname ;

                switch (current_url){

                    case "/":
                        this.linkName = "Магазин";
                        this.linkUrl = "/shop/";
                        break;

                    case "/shop/":
                        this.linkName = "Главная страница";
                        this.linkUrl = "/";
                        break;

                }


            }


        },

        created(){
            this.ChengeUrl();
        }

    }


</script>


<style>

    @import '../static/pubic_styles/header.css';

</style>

