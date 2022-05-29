

<template>

   <ComHeader/>

    <div class="main_container">

        
        <div class="cart_box">
            <h1>Ваш Заказ</h1>

            <div class="cart_order">
                <img src="../assets/carrot.jpg" alt="">
                <h1>Морковка</h1>
                <h1>1500pyb</h1>
            </div>
            
        </div>

    </div>  


</template>



<script>

    import ComHeader from './ComHeader.vue'

    export default {
        name:"CartPage",
        data(){
            return{

            }
        },
        components:{
            ComHeader
        }
    }


</script>




<style>
    @import "../static/CartPage/cartBox.css";
</style>






