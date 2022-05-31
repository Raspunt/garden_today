
<template>

    <ComHeader/>


    
    <div class="search_field">
        <i class="search_icon fa-solid fa-magnifying-glass"></i>
        <input @change="SearchInput()" type="text" v-model="searchText" >
    </div>

    <div class="item_browser">

 


        <div class="item_browser_item" v-for="prod in BiItems" :key="prod">
            <div class="bi_img"></div>
            <h1>{{ prod['title'] }}</h1>
            <h1>{{prod['disc'] }}</h1>
            <h1>{{prod['price'] }} в-баксов</h1>
            <button @click="AddToCart(prod['id'])" class="bi_btn">Добавить в корзину</button>

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
            CartProductId:[]
        }

    },


    methods:{
        
        SearchInput(){
            
            let url = "http://192.168.1.22:5000/SearchProductByTitle"
            const _this = this;

            let form_data = new FormData();
            form_data.append( 'title', this.searchText);

            axios.post(url,form_data)
            .then(function (response) {
                console.log(response.data);
                _this.BiItems = response.data
            })
            .catch(function (error) {
                console.log(error);
            });

        },

        AddToCart(id){

            
            this.CartProductId.push[id]
            console.log(this.BiItems);

            if (this.CartProductId.includes(id) == false){
                localStorage.setItem("CartProductId",JSON.stringify(this.CartProductId))

            }
        }

    },

    
    created(){
        
        let url = "http://192.168.1.22:5000/JsonProduct"
        const _this = this;


        axios.get(url, {
        })
        .then(function (response) {
            // console.log(response.data);
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