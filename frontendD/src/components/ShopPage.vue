
<template>

    <ComHeader/>


    
    <div class="search_field">
        <i class="search_icon fa-solid fa-magnifying-glass"></i>
        <input @change="SearchInput()" type="text" v-model="searchText" >
    </div>

    <div class="item_browser">

 


        <div class="item_browser_item" v-for="(prod,index) in BiItems" :key="index" >
            <div class="bi_img"></div>
            <h1>{{ prod['title'] }}</h1>
            <small>{{prod['disc'] }}</small>
            <h1>{{prod['price'] }} {{prod['currency']}}</h1>
            <button @click="AddToCart(index)" v-bind:id="'btn_'+ index" class="bi_btn">Добавить в корзину</button>
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
            CartProductId:[],
            buttonReady:""
        }

    },


    methods:{
        
        SearchInput(){
            
            let url = `${process.env.VUE_APP_SERVER_URL}/SearchProductByTitle`
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

            // console.log(this.BiItems[id]);
            
            
            if (this.CartProductId.indexOf(this.BiItems[id]) == -1){
                this.CartProductId.push(this.BiItems[id]);

                localStorage.setItem("CartProductId",JSON.stringify(this.CartProductId))
                
                document.getElementById(`btn_${id}`).innerHTML = "продукт добавлен в корзину"

            }
        }

    },

    
    created(){
    
        let url = `${process.env.VUE_APP_SERVER_URL}/JsonProduct`
        const _this = this;

        axios.get(url, {
        })
        .then(function (response) {
            _this.BiItems = response.data
        })
        .catch(function (error) {
            console.log(error);
        });


        // let alreadyBtn = localStorage.getItem("CartButtons");

        // let splitBtns = alreadyBtn.split(" ")

        // splitBtns.forEach((el)=>{
        //     console.log(el);
        //     document.getElementById(el).innerHTML = "продукт добавлен в корзину"
        // })




    
    }

   
}

</script>

<style>
    @import "../static/ShopPage/item_brouser.css";
</style>