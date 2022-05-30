
<template>

    <ComHeader/>


    
    <div class="search_field">
        <i class="search_icon fa-solid fa-magnifying-glass"></i>
        <input @change="SearchInput()" type="text" v-model="searchText" >
    </div>

    <div class="item_browser">

        


        <div class="item_browser_item" v-for="prod in BiItems" :key="prod">
            <div class="bi_img"></div>
            <h1>{{ prod[1] }}</h1>
            <h1>{{prod[3]}}</h1>
            <h1>{{prod[4]}} в-баксов</h1>
            <button class="bi_btn">Добавить в корзину</button>

        </div>

       

      
    </div>
    



</template>



<script>

import ComHeader from '../components/ComHeader.vue'
import axios from 'axios'

export default {
    name:"ShopPage",
    components:{ComHeader},

    data(){

        return {
            searchText:"",
            BiItems:[],
        }

    },


    methods:{
        
        SearchInput(){
            
            let url = "http://127.0.0.1:5000/JsonProduct"
            const _this = this;
            
            axios.get(url, {

            })
            .then(function (response) {
                console.log(response);
                _this.BiItems = response.data
            })
            .catch(function (error) {
                console.log(error);
            });


           


        },

    },

    
    created(){
        
        let url = "http://127.0.0.1:5000/JsonProduct"
        const _this = this;


        axios.get(url, {
        })
        .then(function (response) {
            console.log(response);
            _this.BiItems = response.data
        })
        .catch(function (error) {
            console.log(error);
        });

    }

   
}

</script>

<style>
    @import "../static/ShopPage/item_brouser.css";
</style>