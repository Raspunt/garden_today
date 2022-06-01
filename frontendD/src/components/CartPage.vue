

<template>

   <ComHeader/>

    <div class="main_container">

        
        <div class="cart_box">
            <h1>Ваш Заказ</h1>

            <div class="cart_order" v-for="prod in ProductIdList" :key="prod.id">
                <img src="../assets/carrot.jpg" alt="">
                <h1>{{ prod.title }}</h1>
                <h1>{{ prod.price }} тенге</h1>
            </div>
            
            <button class="submit_btn">Купить</button>
        </div>



    </div>  


</template>



<script>

    import ComHeader from './ComHeader.vue'
    import axios from 'axios'

    export default {
        name:"CartPage",
        data(){
            return{
                ProductIdList:[],
            }
        },
        components:{
            ComHeader
        },

        methods:{
            MakeOrder(){




                let url = "http://localhost:5000/MakeOrder"
                const _this = this;

                // let form_data = new FormData();
                // form_data.append( 'title', this.searchText);

                axios.post(url,{})
                .then(function (response) {
                    console.log(response.data);
                    _this.BiItems = response.data
                })
                .catch(function (error) {
                    console.log(error);
                });

            
            }
        },

        created(){

            this.ProductIdList = JSON.parse(localStorage.getItem("CartProductId"));


        }
    }


</script>




<style>
    @import "../static/CartPage/cartBox.css";
</style>






