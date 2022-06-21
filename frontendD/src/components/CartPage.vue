

<template>

   <ComHeader/>

    <div class="main_container">

        
        <div class="cart_box">
            <h1>Ваш Заказ</h1>
      
            <div class="cart_order" v-for="prod in ProductIdList" :key="prod.id">
                <img src="../assets/toy.jpg" alt="">
                <h1>{{ prod.title }}</h1>
                <h1>{{ prod.price }} рублей {{ prod.currency }}</h1>
            </div>
            
            <OrderModal
             :CartProductId="ProductIdList"
             v-if="isProductEmpty"/>
        </div>

        


    </div>  


</template>



<script>

    import ComHeader from './ComHeader.vue'
    import OrderModal from './OrderModal.vue'
    
    // import axios from 'axios'

    export default {
        name:"CartPage",
        data(){
            return{
                ProductIdList:[],
                isProductEmpty:true,
                ShowModalWindow:false
            }
        },
        components:{
            ComHeader,
            OrderModal
        },

        methods:{
            MakeOrder(){

                


                // let url = `$${process.env.VUE_APP_SERVER_URL}MakeOrder`
                // const _this = this;

                // // let form_data = new FormData();
                // // form_data.append( 'title', this.searchText);

                // axios.post(url,{})
                // .then(function (response) {
                //     console.log(response.data);
                //     _this.BiItems = response.data
                // })
                // .catch(function (error) {
                //     console.log(error);
                // });

            
            },



        },

        created(){
            
            this.ProductIdList = JSON.parse(localStorage.getItem("CartProductId"));

            if (this.ProductIdList.length == 0){
                this.isProductEmpty = false
            }



        }
    }


</script>




<style>
    @import "../static/CartPage/cartBox.css";
</style>






