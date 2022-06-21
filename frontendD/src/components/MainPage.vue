<template>
  
  <ComHeader/>

  <div class="header_bg">

    
    
    <div>
      
      <div class="project_info_flex">
          
          <div class="info_obj info">
            <h1 class="info_text ">Инновационные услуги по продаже и починке</h1>
          </div>

        
        </div>

      </div>

  </div>


  <div class="benifis_center_div">
      <h1 >О нас</h1>


      <div class="benefis_block">


        <h3>Интернет-магазин продажи автомобилей  {{title}} – уникальная торговая площадка. Именно здесь Вы можете приобрести
           все необходимое для ухода и обустройства
          загородного дома и участка.</h3>

        <div class="benefis_text">
          <h3 class="green_dot">*</h3>
            <h3>
              Более 15000 наименований товаров. Наш опыт работы позволяет выбрать и предложить действительно нужную, проверенную продукцию.
            </h3>
        </div>

        <div class="benefis_text">
          <h3 class="green_dot">*</h3>
            <h3>
              Только официальный товар. Совершая покупки в центре продажи автомобилей {{title}}, Вы всегда можете быть уверены, что защищены от подделок. Мы очень ответственно подходим к выбору поставщиков. Весь товар имеет необходимые сертификаты, подтверждающие его качество и безопасность.
            </h3>
        </div>

     </div>

    </div>


    <div class="orders_block">

        <h1>Полный комплекс услуг</h1>


        <div class="order_grid">
          <div class="order_item">
            <p>
              Уход за автомобилем

                 мойка автомобилей
                 Услуги по очистке машин от снега
                 Подсветка/покраска дисков
                 Диспетчерская служба по заказу строительной техники

            </p>
          </div>
          <div class="order_item">
              <p>
                    
                Перетяжка салона
                Грузовая автомойка
                Автоподбор
                Продажа запчастей для грузовиков

              </p>
          </div>
          <div class="order_item">
            <p>

            Магазин наклеек для автомобилей
            Производство оригинальных автоприцепов
            Оклейка виниловой пленкой
            Маршрутное такси 

            </p>


          </div>
          <div class="order_item">
              <p>
                Продажа креативных дворников для автомобилей
                Покраска автомобилей
                Установка автосигнализаций
                Женское такси
                Автохостел
              </p>
          </div>

          

        </div> 

    </div>


    <div class="feedback_center_div">
      <h1>Отзывы</h1>


      <div class="rewiew_block" >
        <div class="rewiew_image"></div>
       <div class="comment_body">
          Работает как часы.Все супер!
      </div>
      
    </div>


     <div class="rewiew_block">
        <div class="rewiew_image"></div>

       <div class="comment_body">
          Их очень много - большой выбор товаров,
          демократичные цены, всё понятно в оформлении и оплате ,
          очень доброжелательные и милые девушки - сотрудницы ( прямо как родные ! ),
          замечательные консультанты,..наличие бонусов.
      </div>
      
    </div>



    </div>


    <ComFooter/>



                

</template>

<script>
import ComHeader from "./ComHeader.vue";
import ComFooter from "./ComFooter.vue";

export default {
    name: "MainPage",
    data() {
        return {
          listRewiews:[],
          title:"Toyota Today"
        };
    },
    created(){

      if (localStorage.getItem("user") !== "1") {
          window.location = "/Login"
      }
    },
    components: { ComHeader, ComFooter },
    
    
   
}
</script>

<style scoped>

  @import '../static/MainPage/block_2.css';
  @import '../static/MainPage/block_rewiews.css';
  @import '../static/MainPage/block_order.css';
  

  .header{
    position: fixed;
  }
  

</style>
