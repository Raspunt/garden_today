
<template>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Купить
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title black_text" id="exampleModalLabel">Оформите заказ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal_dis">
        
          <p>Вы покупаете</p>

          <div v-for="prod in CartProductId" v-bind:key="prod">
          
          <h3>{{ prod["title"] }} {{ prod['price']}} рублей</h3>

          </div>

          <p>Итого {{sumProducts}} рублей</p>



        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input v-model="countryInput" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ведите Страну ">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input v-model="CityInput" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Город">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input v-model="streetInput" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ведите Улицу и дом">
        </div>


        
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">отмена</button>
        <button @click="MakeOrder()" type="button" class="btn btn-primary">Купить</button>
      </div>
    </div>
  </div>
</div>


</template>




<script>

import axios from 'axios'

export default{

  data(){

    return {
        sumProducts:0,
        countryInput:"",
        streetInput:"",
        CityInput:""
    }
  },
  props:{
    CartProductId:Array
  },


  
  methods:{

     MakeOrder(){



        let url = `${process.env.VUE_APP_SERVER_URL}/MakeOrder`
  
        let form_data = new FormData();

        let idArr = []
        this.CartProductId.forEach((el)=>{
          idArr.push(el.id);
        })


        if(this.countryInput != "" && this.streetInput != "" && this.CityInput != ""){

            form_data.append('product_id',JSON.stringify(idArr));
            form_data.append('country', this.countryInput);
            form_data.append('city', this.streetInput);
            form_data.append('streetAndHouse', this.CityInput);

        }
        axios.post(url,form_data)
        .then(function (response) {
            console.log(response.data);

            alert("Заказ успешно создан")
        })
        .catch(function (error) {
            console.log(error);
        });


     },

    SumInArray(){
     
      this.CartProductId.forEach((el)=>{
        this.sumProducts += parseInt(el['price'])
      })



    }

  },
  mounted(){

    this.SumInArray();


  }


}


</script>


<style>



.black_text{
  color: black;
}

.modal_dis{
  color: black;
}


</style>