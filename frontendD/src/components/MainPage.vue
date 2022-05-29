<template>
  
  <header class="header">

    <img class="logo" src="../assets/logo_project2.png" alt="">
    <h1>Garden Today</h1>
    
  </header>

  <div class="header_bg">

    
    
    <div >
      


      
      <div class="project_info_flex">
          
          <div class="info_obj info">
            <h1 class="info_text ">{{ info_description }}</h1>
          </div>

        
        </div>

      </div>

  </div>


  <div class="benifis_center_div">
      <h1 >О нас</h1>


      <div class="benefis_block">


        <h3>Интернет-магазин Садовый центр Garden Today – уникальная торговая площадка. Именно здесь Вы можете приобрести
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
              Только официальный товар. Совершая покупки в Садовом центре Garden today, Вы всегда можете быть уверены, что защищены от подделок. Мы очень ответственно подходим к выбору поставщиков. Весь товар имеет необходимые сертификаты, подтверждающие его качество и безопасность. А на всю технику обязательно оформляется официальный гарантийный талон.
            </h3>
        </div>

       <div class="benefis_text">
         <h3 class="green_dot">*</h3>
            <h3>
              Только официальный товар. Совершая покупки в Садовом центре Garden today, Вы всегда можете быть уверены, что защищены от подделок. Мы очень ответственно подходим к выбору поставщиков. Весь товар имеет необходимые сертификаты, подтверждающие его качество и безопасность. А на всю технику обязательно оформляется официальный гарантийный талон.
            </h3>
        </div>
      </div>

    </div>


    <div class="orders_block">

        <h1>Полный комплекс услуг</h1>


        <div class="order_grid">
          <div class="order_item">
            <p>
              Уход за садом

                  садовники
                  уход за деревьями, кустарниками
                  устройство и ремонт газонов
                  лечение деревьев
                  обработка от вредителей

            </p>
          </div>
          <div class="order_item">
              <p>
                    
                Озеленение

                    посадка крупномеров
                    посадка декоративных растений
                    живые изгороди
                    стрижки и обрезки

              </p>
          </div>
          <div class="order_item">
            <p>

            Инженерные работы

            системы автополива
            дренажные системы
            устройство водоемов

            </p>


          </div>
          <div class="order_item">
              <p>
            Световое оформление

                архитектурная подсветка
                украшение коттеджей
                украшение улиц
                украшение коммерческих объектов
              </p>


          </div>
        </div> 

    </div>


    <div class="feedback_center_div">
      <h1>Отзывы</h1>


      <div class="rewiew_block">
        <div class="rewiew_image"></div>

       <div class="comment_body">
          ВСЁ СУПЕР. Заказ пришел быстро. Делал жене подарок. Всё замечательно, рада! Будем заказывать ещё и ещё.
      </div>
      
    </div>


     <div class="rewiew_block">
        <div class="rewiew_image"></div>

       <div class="comment_body">
          ВСЁ СУПЕР. Заказ пришел быстро. Делал жене подарок. Всё замечательно, рада! Будем заказывать ещё и ещё.
      </div>
      
    </div>



    </div>



                

</template>

<script>
export default {
  name: 'MainPage',

  data(){
    return{
        info_description:"Инновационные услуги по выращиванию и удобрению растений",
    }
  }
  
}
</script>

<style scoped>

  @import '../static/MainPage.css';
  @import '../static/block_2.css';
  @import '../static/block_3.css';
  @import '../static/block_order.css'
  

</style>
