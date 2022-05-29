
<template>

    <ComHeader/>


    
    <div class="search_field">
        <i class="search_icon fa-solid fa-magnifying-glass"></i>
        <input type="text">
    </div>

    <div class="item_browser">

        


        <div class="item_browser_item">
            <div class="bi_img"></div>
            <h1>Название Продукта</h1>
            <h1>цена</h1>
            <button class="bi_btn">Добавить в корзину</button>

        </div>

        <div class="item_browser_item"></div>
        <div class="item_browser_item"></div>
        <div class="item_browser_item"></div>
        <div class="item_browser_item"></div>
        <div class="item_browser_item"></div>
    </div>
    



</template>



<script>

import ComHeader from '../components/ComHeader.vue'

export default {
    name:"ShopPage",
    components:{ComHeader}
   
}

</script>

<style>
    @import "../static/ShopPage/item_brouser.css"
</style>